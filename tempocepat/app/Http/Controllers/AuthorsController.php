<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;
use Illuminate\Http\Request;
use Auth;
use DB;
use Image;
use App\Musician;
class AuthorsController extends Controller
{
    public function index()
    {
        return view('authors.index')->with('title', 'Article Author - TC Project');
    }
    public function create()
    {
    }
    public function store()
    {
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update($id)
    {
    }
    public function destroy($id)
    {
    }
    public function denied()
    {
        $userid = Auth::id();
        $roleid = DB::table('role_user')->where('user_id', $userid)->pluck('role_id');
        return view('errors.503')->with('userid', $userid)->with('roleid', $roleid);
    }
    public function member_data()
    {
        $id = Auth::id();
        return view('authors.member-data')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('title', 'Your Profile');
    }
    public function member_data_edit()
    {
        $id = Auth::id();
        return view('authors.member-data-edit')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('title', 'Your Profile Edit');
    }
    public function member_events()
    {
        $id = Auth::id();
        return view('authors.member-events')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('events', DB::table('events')->orderBy('created_at', 'desc')->get())->with('title', 'Your Participated Events');
    }
    public function member_wishlist()
    {
        $id = Auth::id();
        return view('authors.member-wishlist')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        
        ->with('products', DB::table('products')->orderBy('created_at', 'desc')->get())->with('title', 'Your Wishlist');
    }
    public function member_playlist()
    {
        $id = Auth::id();
        return view('authors.member-playlist')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        
        ->with('musics', DB::table('musics')->join('musicians', 'musics.musician_id', '=', 'musicians.id')->select('musics.*', 'musics.created_at as musics_created', 'musicians.name', 'musicians.image')->get())->with('title', 'Your Playlist');
    }
    public function member_additional()
    {
        $id = Auth::id();
        return view('authors.member-additional')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('title', 'Additional Features');
    }
    public function member_your_events()
    {
        $id = Auth::id();
        return view('authors.member-your-events')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('events', DB::table('events')->orderBy('created_at', 'desc')->get())->with('title', 'Your Events');
    }
    public function member_your_store($slug)
    {
        $id_store = DB::table('stores')->where('stores.slug', $slug)->pluck('stores.id');
        $id_user = Auth::id();
        return view('authors.member-your-store')
        ->with('user', DB::table('users')
            ->join('stores', 'users.store_id', '=', 'stores.id')
            ->join('musicians', 'users.musician_id', '=', 'musicians.id')
            ->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')
            ->where('users.id',$id_user)
            ->first())
        ->with('store', DB::table('stores')->where('stores.slug', $slug)->first())
        ->with('products', DB::table('products')
            ->where('products.stores_id', $id_store)
            ->get())
        ->with('title', 'Your Store');
    }
    public function member_your_musician($slug)
    {
        $id_musician = DB::table('musicians')->where('musicians.slug', $slug)->pluck('musicians.id');
        $id_user = Auth::id();
        return view('authors.member-your-musician')
        ->with('user', DB::table('users')
            ->join('stores', 'users.store_id', '=', 'stores.id')
            ->join('musicians', 'users.musician_id', '=', 'musicians.id')
            ->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')
            ->where('users.id',$id_user)
            ->first())
        ->with('musician', DB::table('musicians')->where('musicians.slug', $slug)->first())
        ->with('musics', DB::table('musics')
            ->join('musicians', 'musics.musician_id', '=', 'musicians.id')
            ->select('musics.*', 'musics.created_at as musics_created', 'musicians.name', 'musicians.image')
            ->where('musics.musician_id', $id_musician)
            ->get())
        ->with('title', 'Your Musician');
    }
    public function do_crop(Request $request)
    {
        $musician_id = Input::get('musician_id');
        $musician    = DB::table('musicians')->find($musician_id);
        if (isset($request->crop_image)) {
            $y1    = $_POST['top'];
            $x1    = $_POST['left'];
            $w     = $_POST['right'];
            $h     = $_POST['bottom'];
            $image = public_path('assets/img/oI750JKz_product_image.jpg');
            list($width, $height) = getimagesize($image);
            $newwidth  = 600;
            $newheight = 400;
            $thumb     = imagecreatetruecolor($newwidth, $newheight);
            $source    = imagecreatefromjpeg($image);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb, $image, 100);
            $im   = imagecreatefromjpeg($image);
            $dest = imagecreatetruecolor($w, $h);
            imagecopyresampled($dest, $im, 0, 0, $x1, $y1, $w, $h, $w, $h);
            imagejpeg($dest, public_path('assets/img/oI750JKz_product_image.jpg'), 100);
        }
        return Redirect::to('/musician/create')->with('message', 'Musician data updated successfully!');
    }
}