<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Auth;
use Session;
use DB;
use Hash;
use View;
use Route;
use File;
use Image;
class UserController extends Controller
{
    public function signup()
    {
        return view('users.signup')->with('users', DB::table('users')->get())->with('title', 'Sign Up - Tempo Cepat');
    }
    public function profile()
    {
        return view('users.profile')->with('title', 'Profile - Tempo Cepat');
    }
    public function participated_events()
    {
        return view('users.profile-participated-events')->with('title', 'Participated Events - Tempo Cepat');
    }
    public function wishlist()
    {
        return view('users.wishlist')->with('title', 'Wishlist - Tempo Cepat');
    }
    public function liked_musics()
    {
        return view('users.liked-musics')->with('title', 'Liked Musics - Tempo Cepat');
    }
    public function store()
    {
        $validation = User::validate(Input::all());
        if ($validation->fails()) {
            return Redirect::back()->withErrors($validation)->withInput();
        } else {
            $user                 = new User();
            $user->name           = Input::get('name');
            $user->fullname       = Input::get('fullname');
            $user->email          = Input::get('email');
            $user->password       = Hash::make(Input::get('password'));
            $user->image          = '';
            $user->role_id        = Input::get('role_id');
            $user->sex_type       = Input::get('sex_type');
            $user->birthday_day   = Input::get('birthday_day');
            $user->birthday_month = Input::get('birthday_month');
            $user->birthday_year  = Input::get('birthday_year');
            $user->address        = Input::get('address');
            $user->remember_token = Input::get('_token');
            $user->save();
        }
        return Redirect::to('user/account')->with('pesan', 'Tambah user
            berhasil!');
    }
    public function user_account()
    {
        return view('member-pages.user-account')->with('title', 'user Account - Tempo Cepat');
    }
    public function edit_user($id)
    {
        return View::make('member-pages.edit-user-back')->with('user', DB::table('users')->find($id))->with('title', 'Ubah user');
    }
    public function put_update_user()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            if ($oldfilename == '') {
                $filename   = str_random(8) . '_product_image.' . $image->getClientOriginalExtension();
                $pathMedium = public_path('img/profiles/' . $filename);
                Image::make($image->getRealPath())->fit(200, 200)->save($pathMedium);
                $filename = $filename;
            } else {
                $pathMedium = public_path('img/profiles/' . $filename);
                Image::make($image->getRealPath())->fit(200, 200)->save($pathMedium);
            }
        } else {
        }
        $user                 = User::find($id);
        $user->name           = Input::get('name');
        $user->fullname       = Input::get('fullname');
        $user->email          = Input::get('email');
        $user->password       = Hash::make(Input::get('password'));
        $user->image          = $filename;
        $user->role_id        = Input::get('role_id');
        $user->sex_type       = Input::get('sex_type');
        $user->birthday_day   = Input::get('birthday_day');
        $user->birthday_month = Input::get('birthday_month');
        $user->birthday_year  = Input::get('birthday_year');
        $user->address        = Input::get('address');
        $user->remember_token = Input::get('_token');
        $user->save();
        return Redirect::back();
    }
    public function destroy_product($id)
    {
        $filetodelete = DB::table('products')->select('products.image')->where('id', $id)->first();
        File::delete(public_path() . '/img/profiles/' . $filetodelete->image);
        User::find($id)->delete();
        return Redirect::back();
    }
    public function destroy_inside_product()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/img/profiles/' . $filetodelete);
        User::find(Input::get('id'))->delete();
        return Redirect::route('dashboard.list.user')->with('message', 'The product was deleted successfully!');
    }
}