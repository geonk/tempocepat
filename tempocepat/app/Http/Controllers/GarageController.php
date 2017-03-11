<?php namespace App\Http\Controllers;
use App\Music;
use App\Musician;
use Illuminate\Support\Facades\Input;
use Redirect;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Session;
use DB;
use Hash;
use View;
use Route;
use File;
use Image;
class GarageController extends Controller
{
    public function create_slug($slug)
    {
        $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens      = '/[\-\s]+/';
        $slug                       = preg_replace($lettersNumbersSpacesHypens, '', mb_strtolower($slug, 'UTF-8'));
        $slug                       = preg_replace($spacesDuplicateHypens, '-', $slug);
        $slug                       = trim($slug, '-');
        return $slug;
    }
    public function create_music()
    {
        return view('member-pages.create-music')->with('title', 'Create Music - Tempo Cepat');
    }
    public function post_music()
    {
        $music                      = new Music();
        $music->title               = Input::get('title');
        $music->description         = Input::get('description');
        $music->users_id            = Input::get('users_id');
        $music->users_role_id       = Input::get('users_role_id');
        $music->musician_id         = Input::get('musician_id');
        $music->music_categories_id = Input::get('music_categories_id');
        $music->save();
        return Redirect::to('/music/create')->with('message', 'The music was posted successfully!');
    }
    public function edit_music($id)
    {
        return View::make('member-pages.edit-music')->with('music', DB::table('musics')->find($id))->with('title', 'Ubah music');
    }
    public function put_update_music()
    {
        $id                         = Input::get('id');
        $music                      = Music::find($id);
        $music->title               = Input::get('title');
        $music->description         = Input::get('description');
        $music->users_id            = Input::get('users_id');
        $music->users_role_id       = Input::get('users_role_id');
        $music->musician_id         = Input::get('musician_id');
        $music->music_categories_id = Input::get('music_categories_id');
        $music->save();
        return Redirect::to('/dashboard/your_musician')->with('message', 'music data updated successfully!');
    }
    public function destroy_music($id)
    {
        Music::find($id)->delete();
        return Redirect::route('dashboard.your_musician')->with('message', 'The music was deleted successfully!');
    }
    public function destroy_inside_music()
    {
        Music::find(Input::get('id'))->delete();
        return Redirect::route('dashboard.your_musician')->with('message', 'The music was deleted successfully!');
    }
    public function create_musician()
    {
        $id = Auth::id();
        return view('member-pages.create-musician')->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug', 'musicians.slug as musicians_slug')->where('users.id', $id)->first())->with('title', 'Create Musician - Tempo Cepat');
    }
    public function post_musician()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename   = str_random(8) . '_musician_image.' . $image->getClientOriginalExtension();
            $pathMedium = public_path('assets/img/garage/musician/logo/medium/' . $filename);
            Image::make($image->getRealPath())->fit(200, 200)->save($pathMedium);
            $pathSmall = public_path('assets/img/garage/musician/logo/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 75)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $imageCover = Input::file('image_cover');
        if (isset($imageCover)) {
            $filenameCover = str_random(8) . '_musician_cover_image.' . $imageCover->getClientOriginalExtension();
            $pathMedium    = public_path('assets/img/garage/musician/cover/medium/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(1280, 360)->save($pathMedium);
            $pathSmall = public_path('assets/img/garage/musician/cover/small/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(300, 85)->save($pathSmall);
            $createimageCover = $filenameCover;
        } else {
            $createimageCover = '';
        }
        $musician                         = new Musician();
        $slug                             = $this->create_slug(Input::get('name'));
        $musician->slug                   = $slug;
        $musician->name                   = Input::get('name');
        $musician->description            = Input::get('description');
        $musician->genre                  = Input::get('genre');
        $musician->image                  = $createimage;
        $musician->image_cover            = $createimageCover;
        $musician->musician_categories_id = Input::get('musician_categories_id');
        $musician->save();
        return Redirect::to('/musician/create')->with('message', 'The musician was posted successfully!');
    }
    public function edit_musician($id)
    {
        return View::make('member-pages.edit-musician')->with('musician', DB::table('musicians')->find($id))->with('title', 'Ubah musician');
    }
    public function put_update_musician(Request $request)
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $y1s        = Input::get('top_square');
            $x1s        = Input::get('left_square');
            $ws         = Input::get('right_square');
            $hs         = Input::get('bottom_square');
            $pathMedium = public_path('assets/img/garage/musician/logo/medium/' . $filename);
            $pathSmall  = public_path('assets/img/garage/musician/logo/small/' . $filename);
            if ($y1s > 0) {
                Image::make($image->getRealPath())->resize(200, null, function($constraint)
                {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->crop($ws, $hs, $x1s, $y1s)->save($pathMedium);
                Image::make($image->getRealPath())->resize(75, null, function($constraint)
                {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->crop($ws, $hs, $x1s, $y1s)->save($pathSmall);
            } elseif ($x1s > 0) {
                Image::make($image->getRealPath())->resize(null, 200, function($constraint)
                {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->crop($ws, $hs, $x1s, $y1s)->save($pathMedium);
                Image::make($image->getRealPath())->resize(null, 75, function($constraint)
                {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->crop($ws, $hs, $x1s, $y1s)->save($pathSmall);
            } else {
                Image::make($image->getRealPath())->resize(200, 200)->save($pathMedium);
                Image::make($image->getRealPath())->resize(75, 75)->save($pathSmall);
            }
        } else {
        }
        $imageCover       = Input::file('image_cover');
        $oldfilenameCover = Input::get('filename_cover');
        $filenameCover    = $oldfilenameCover;
        $musician_id      = Input::get('musician_id');
        $musician         = DB::table('musicians')->find($musician_id);
        $y1               = Input::get('top');
        $x1               = Input::get('left');
        $w                = Input::get('right');
        $h                = Input::get('bottom');
        $y1               = $y1 * 2;
        $x1               = $x1 * 2;
        $w                = $w * 2;
        $h                = $h * 2;
        if (isset($imageCover)) {
            $pathMedium = public_path('assets/img/garage/musician/cover/medium/' . $filenameCover);
            $imageCoverNew = Image::make($imageCover->getRealPath())->resize(1280, null, function($constraint)
            {
                $constraint->aspectRatio();
            })->crop($w, $h, $x1, $y1)->save($pathMedium);
            $pathSmall     = public_path('assets/img/garage/musician/cover/small/' . $filenameCover);
            Image::make($imageCoverNew)->resize(300, null, function($constraint)
            {
                $constraint->aspectRatio();
            })->save($pathSmall);
        } else {
        }
        $musician              = Musician::find($id);
        $slug                  = $this->create_slug(Input::get('name'));
        $musician->slug        = $slug;
        $musician->name        = Input::get('name');
        $musician->description = Input::get('description');
        $musician->genre       = Input::get('genre');
        $musician->image       = $filename;
        $musician->image_cover = $filenameCover;
        $musician->save();
        return Redirect::to('/dashboard/your_musician/0aaaaaaa')->with('message', 'Musician data updated successfully!');
    }
    public function destroy_musician($id)
    {
        $filetodelete = DB::table('articles')->select('articles.image')->where('id', $id)->first();
        File::delete(public_path() . '/assets/img/garage/musician/medium/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/garage/musician/small/' . $filetodelete->image);
        Musician::find($id)->delete();
        return Redirect::route('dashboard.list.musician')->with('message', 'The musician was deleted successfully!');
    }
    public function destroy_inside_musician()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/assets/img/garage/musician/medium/' . $filetodelete);
        File::delete(public_path() . '/assets/img/garage/musician/small/' . $filetodelete);
        Musician::find(Input::get('id'))->delete();
        return Redirect::route('dashboard.list.musician')->with('message', 'The musician was deleted successfully!');
    }
}