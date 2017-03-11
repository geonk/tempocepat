<?php
namespace App\Http\Controllers;
use App\Event;
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
use App\User;
class EventController extends Controller
{
    public function create_event()
    {
        return view('member-pages.create-event')->with('title', 'Create Event - Tempo Cepat');
    }
    public function post_event()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename  = str_random(8) . '_event_image.' . $image->getClientOriginalExtension();
            $pathLarge = public_path('assets/img/event/large/' . $filename);
            Image::make($image->getRealPath())->fit(950, 633)->save($pathLarge);
            $pathMedium = public_path('assets/img/event/medium/' . $filename);
            Image::make($image->getRealPath())->fit(445, 300)->save($pathMedium);
            $pathSmall = public_path('assets/img/event/small/' . $filename);
            Image::make($image->getRealPath())->fit(120, 80)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $event                = new Event();
        $event->title         = Input::get('title');
        $event->body_info     = Input::get('body_info');
        $event->image         = $createimage;
        $event->users_id      = Input::get('users_id');
        $event->users_role_id = Input::get('users_role_id');
        $event->save();
        $id_active_user = Auth::id();
        $role_id        = DB::table('role_user')->select('role_user.role_id')->where('user_id', $id_active_user)->first();
        if ($role_id->role_id == 3 || $role_id->role_id == 4) {
            $target = '/dashboard-list-event';
        } elseif ($role_id->role_id == 1 || $role_id->role_id == 2) {
            $target = '/dashboard/your_events';
        }
        return Redirect::to($target)->with('message', 'The event was posted successfully!');
    }
    public function edit_event($id)
    {
        $id_active_user = Auth::id();
        $role_id        = DB::table('role_user')->select('role_user.role_id')->where('user_id', $id_active_user)->first();
        if ($role_id->role_id == 3 || $role_id->role_id == 4) {
            $edit_view = 'member-pages.edit-event-back';
        } elseif ($role_id->role_id == 1 || $role_id->role_id == 2) {
            $edit_view = 'member-pages.edit-event';
        }
        return View::make($edit_view)->with('event', DB::table('events')->find($id))->with('user', User::find($id_active_user))->with('title', 'Ubah event - ');
    }
    public function put_update_event()
    {
        $id             = Input::get('id');
        $id_active_user = Auth::id();
        $role_id        = DB::table('role_user')->select('role_user.role_id')->where('user_id', $id_active_user)->first();
        if ($role_id->role_id == 3 || $role_id->role_id == 4) {
            $target = '/dashboard-list-event';
        } elseif ($role_id->role_id == 1 || $role_id->role_id == 2) {
            $target = '/dashboard/your_events';
        }
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $pathLarge = public_path('assets/img/event/large/' . $filename);
            Image::make($image->getRealPath())->fit(950, 633)->save($pathLarge);
            $pathMedium = public_path('assets/img/event/medium/' . $filename);
            Image::make($image->getRealPath())->fit(445, 300)->save($pathMedium);
            $pathSmall = public_path('assets/img/event/small/' . $filename);
            Image::make($image->getRealPath())->fit(120, 80)->save($pathSmall);
        } else {
        }
        $event                = Event::find($id);
        $event->title         = Input::get('title');
        $event->body_info     = Input::get('body_info');
        $event->image         = $filename;
        $event->users_id      = Input::get('users_id');
        $event->users_role_id = Input::get('users_role_id');
        $event->save();
        return Redirect::to($target)->with('message', 'Event data updated successfully!');
    }
    public function destroy_event($id)
    {
        $filetodelete = DB::table('events')->select('events.image')->where('id', $id)->first();
        File::delete(public_path() . '/assets/img/event/large/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/event/medium/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/event/small/' . $filetodelete->image);
        Event::find($id)->delete();
        return Redirect::back();
    }
    public function destroy_inside_event()
    {
        $id_active_user = Auth::id();
        $id             = Input::get('id');
        $role_id        = DB::table('role_user')->select('role_user.role_id')->where('user_id', $id_active_user)->first();
        if ($role_id->role_id == 3 || $role_id->role_id == 4) {
            $target = 'dashboard.list.event';
        } elseif ($role_id->role_id == 1 || $role_id->role_id == 2) {
            $target = 'dashboard.your_events';
        }
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/assets/img/event/large/' . $filetodelete);
        File::delete(public_path() . '/assets/img/event/medium/' . $filetodelete);
        File::delete(public_path() . '/assets/img/event/small/' . $filetodelete);
        Event::find(Input::get('id'))->delete();
        return Redirect::route($target)->with('message', 'The event was deleted successfully!');
    }
}