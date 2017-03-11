<?php
namespace App\Http\Controllers;
use App\Article;
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
class BlogController extends Controller
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
    public function create_blog()
    {
        return view('developer-pages.create-blog')->with('articles', DB::table('articles')->get())->with('title', 'Create Blog - Tempo Cepat');
    }
    public function post_blog()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename  = str_random(8) . '_blog_image.' . $image->getClientOriginalExtension();
            $pathLarge = public_path('assets/img/blog/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/blog/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/blog/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $article                        = new Article();
        $slug                           = $this->create_slug(Input::get('title'));
        $article->slug                  = $slug;
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $createimage;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/blog/create')->with('message', 'The article was posted successfully!');
    }
    public function edit_blog($id)
    {
        return View::make('developer-pages.edit-blog')->with('article', DB::table('articles')->find($id))->with('title', 'Ubah Simpanan - ');
    }
    public function put_update_blog()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $pathLarge = public_path('assets/img/blog/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/blog/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/blog/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
        } else {
        }
        $article                        = Article::find($id);
        $slug                           = $this->create_slug(Input::get('title'));
        $article->slug                  = $slug;
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $filename;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/blog/create')->with('message', 'Article data updated successfully!');
    }
    public function destroy_blog($id)
    {
        $filetodelete = DB::table('articles')->select('articles.image')->where('id', $id)->first();
        File::delete(public_path() . '/assets/img/blog/large/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/blog/medium/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/blog/small/' . $filetodelete->image);
        Article::find($id)->delete();
        return Redirect::back();
    }
    public function destroy_inside_blog()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/assets/img/blog/large/' . $filetodelete);
        File::delete(public_path() . '/assets/img/blog/medium/' . $filetodelete);
        File::delete(public_path() . '/assets/img/blog/small/' . $filetodelete);
        Article::find(Input::get('id'))->delete();
        return Redirect::route('create.blog')->with('message', 'The article was deleted successfully!');
    }
}