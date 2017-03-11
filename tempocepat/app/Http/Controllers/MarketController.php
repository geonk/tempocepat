<?php
namespace App\Http\Controllers;
use App\Product;
use App\ProductCategory;
use App\Store;
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
class MarketController extends Controller
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
    public function create_product()
    {
        return view('member-pages.create-product')->with('title', 'Create Product - Tempo Cepat');
    }
    public function post_product()
    {
        $product_image_1 = Input::file('product_image_1');
        $product_image_2 = Input::file('product_image_2');
        $product_image_3 = Input::file('product_image_3');
        $image           = $product_image_1;
        if (isset($image)) {
            $filename  = str_random(8) . '_product_image.' . $image->getClientOriginalExtension();
            $pathLarge = public_path('assets/img/market/product/large/1/' . $filename);
            Image::make($product_image_1->getRealPath())->fit(900, 1200)->save($pathLarge);
            $pathMedium = public_path('assets/img/market/product/medium/1/' . $filename);
            Image::make($product_image_1->getRealPath())->fit(472, 618)->save($pathMedium);
            $pathSmall = public_path('assets/img/market/product/small/1/' . $filename);
            Image::make($product_image_1->getRealPath())->fit(196, 260)->save($pathSmall);
            if (isset($product_image_2)) {
                $pathLarge = public_path('assets/img/market/product/large/2/' . $filename);
                Image::make($product_image_2->getRealPath())->fit(900, 1200)->save($pathLarge);
                $pathMedium = public_path('assets/img/market/product/medium/2/' . $filename);
                Image::make($product_image_2->getRealPath())->fit(472, 618)->save($pathMedium);
                $pathSmall = public_path('assets/img/market/product/small/2/' . $filename);
                Image::make($product_image_2->getRealPath())->fit(196, 260)->save($pathSmall);
            } else {
            }
            if (isset($product_image_3)) {
                $pathLarge = public_path('assets/img/market/product/large/3/' . $filename);
                Image::make($product_image_3->getRealPath())->fit(900, 1200)->save($pathLarge);
                $pathMedium = public_path('assets/img/market/product/medium/3/' . $filename);
                Image::make($product_image_3->getRealPath())->fit(472, 618)->save($pathMedium);
                $pathSmall = public_path('assets/img/market/product/small/3/' . $filename);
                Image::make($product_image_3->getRealPath())->fit(196, 260)->save($pathSmall);
            } else {
            }
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $product                        = new Product();
        $slug                           = $this->create_slug(Input::get('name'));
        $product->slug                  = $slug;
        $product->name                  = Input::get('name');
        $product->price                 = Input::get('price');
        $product->sale                  = Input::get('sale');
        $product->image                 = $createimage;
        $product->stores_id             = Input::get('stores_id');
        $product->product_categories_id = Input::get('product_categories_id');
        $product->save();
        return Redirect::to('/product/create')->with('message', 'The product was posted successfully!');
    }
    public function edit_product($id)
    {
        return View::make('member-pages.edit-product')->with('product', DB::table('products')->find($id))->with('title', 'Ubah product');
    }
    public function put_update_product()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            if ($oldfilename == '') {
                $filename  = str_random(8) . '_product_image.' . $image->getClientOriginalExtension();
                $pathLarge = public_path('assets/img/market/product/large/' . $filename);
                Image::make($image->getRealPath())->fit(900, 1200)->save($pathLarge);
                $pathMedium = public_path('assets/img/market/product/medium/' . $filename);
                Image::make($image->getRealPath())->fit(437, 580)->save($pathMedium);
                $pathSmall = public_path('assets/img/market/product/small/' . $filename);
                Image::make($image->getRealPath())->fit(196, 260)->save($pathSmall);
                $filename = $filename;
            } else {
                $pathLarge = public_path('assets/img/market/product/large/' . $filename);
                Image::make($image->getRealPath())->fit(900, 1200)->save($pathLarge);
                $pathMedium = public_path('assets/img/market/product/medium/' . $filename);
                Image::make($image->getRealPath())->fit(437, 580)->save($pathMedium);
                $pathSmall = public_path('assets/img/market/product/small/' . $filename);
                Image::make($image->getRealPath())->fit(196, 260)->save($pathSmall);
            }
        } else {
        }
        $product                        = Product::find($id);
        $slug                           = $this->create_slug(Input::get('name'));
        $product->slug                  = $slug;
        $product->name                  = Input::get('name');
        $product->price                 = Input::get('price');
        $product->sale                  = Input::get('sale');
        $product->image                 = $filename;
        $product->stores_id             = Input::get('stores_id');
        $product->product_categories_id = Input::get('product_categories_id');
        $product->save();
        return Redirect::to('/dashboard/your_store')->with('message', 'Product data updated successfully!');
    }
    public function destroy_product($id)
    {
        $filetodelete = DB::table('products')->select('products.image')->where('id', $id)->first();
        File::delete(public_path() . '/assets/img/market/product/large/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/market/product/medium/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/market/product/small/' . $filetodelete->image);
        Product::find($id)->delete();
        return Redirect::back();
    }
    public function destroy_inside_product()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/assets/img/market/product/large/' . $filetodelete);
        File::delete(public_path() . '/assets/img/market/product/medium/' . $filetodelete);
        File::delete(public_path() . '/assets/img/market/product/small/' . $filetodelete);
        Product::find(Input::get('id'))->delete();
        return Redirect::route('dashboard.your_store')->with('message', 'The product was deleted successfully!');
    }
    public function create_product_category()
    {
        return view('member-pages.create-product-category')->with('title', 'Create Product Category - Tempo Cepat');
    }
    public function post_product_category()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename  = str_random(8) . '_product_category_image.' . $image->getClientOriginalExtension();
            $pathLarge = public_path('assets/img/product_category/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/product_category/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/product_category/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $article                        = new Article();
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $createimage;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/product_category/create')->with('message', 'The product_category was posted successfully!');
    }
    public function edit_product_category($id)
    {
        return View::make('developer-pages.edit-product_category')->with('article', DB::table('articles')->find($id))->with('title', 'Ubah product_category - ');
    }
    public function put_update_product_category()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $pathLarge = public_path('assets/img/product_category/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/product_category/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/product_category/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
        } else {
        }
        $article                        = Article::find($id);
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $filename;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/product_category/create')->with('message', 'product_category data updated successfully!');
    }
    public function destroy_product_category($id)
    {
        $filetodelete = DB::table('articles')->select('articles.image')->where('id', $id)->pluck('articles.image');
        File::delete(public_path() . 'assets/img/product_category/large/' . $filetodelete);
        File::delete(public_path() . 'assets/img/product_category/medium/' . $filetodelete);
        File::delete(public_path() . 'assets/img/product_category/small/' . $filetodelete);
        Article::find($id)->delete();
        return Redirect::route('create.product_category')->with('message', 'The product_category was deleted successfully!');
    }
    public function destroy_inside_product_category()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . 'assets/img/product_category/large/' . $filetodelete);
        File::delete(public_path() . 'assets/img/product_category/medium/' . $filetodelete);
        File::delete(public_path() . 'assets/img/product_category/small/' . $filetodelete);
        Article::find(Input::get('id'))->delete();
        return Redirect::route('create.product_category')->with('message', 'The product_category was deleted successfully!');
    }
    public function create_store()
    {
        $id = Auth::id();
        return view('member-pages.create-store')
        ->with('user', DB::table('users')->join('stores', 'users.store_id', '=', 'stores.id')->join('musicians', 'users.musician_id', '=', 'musicians.id')->select('users.*', 'stores.slug as stores_slug','musicians.slug as musicians_slug')->where('users.id',$id)->first())
        ->with('title', 'Create Store - Tempo Cepat');
    }
    public function post_store()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename   = str_random(8) . '_store_image.' . $image->getClientOriginalExtension();
            $pathMedium = public_path('assets/img/market/store/logo/medium/' . $filename);
            Image::make($image->getRealPath())->fit(200, 200)->save($pathMedium);
            $pathSmall = public_path('assets/img/market/store/logo/small/' . $filename);
            Image::make($image->getRealPath())->fit(100, 100)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $imageCover = Input::file('image_cover');
        if (isset($imageCover)) {
            $filenameCover = str_random(8) . '_store_cover_image.' . $imageCover->getClientOriginalExtension();
            $pathMedium    = public_path('assets/img/market/store/cover/medium/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(1280, 575)->save($pathMedium);
            $pathSmall = public_path('assets/img/market/store/cover/small/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(300, 135)->save($pathSmall);
            $createimageCover = $filenameCover;
        } else {
            $createimageCover = '';
        }
        $store              = new Store();
        $slug               = $this->create_slug(Input::get('name'));
        $store->slug        = $slug;
        $store->name        = Input::get('name');
        $store->slogan      = Input::get('slogan');
        $store->description = Input::get('description');
        $store->image       = $createimage;
        $store->image_cover = $createimageCover;
        $store->save();
        return Redirect::to('/store/create')->with('message', 'The store was posted successfully!');
    }
    public function edit_store($id)
    {
        return View::make('member-pages.edit-store')->with('store', DB::table('stores')->find($id))->with('title', 'Ubah store');
    }
    public function put_update_store()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $pathMedium = public_path('assets/img/market/store/logo/medium/' . $filename);
            Image::make($image->getRealPath())->fit(200, 200)->save($pathMedium);
            $pathSmall = public_path('assets/img/market/store/logo/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 75)->save($pathSmall);
        } else {
        }
        $imageCover       = Input::file('image_cover');
        $oldfilenameCover = Input::get('filename_cover');
        $filenameCover    = $oldfilenameCover;
        if (isset($imageCover)) {
            $pathMedium = public_path('assets/img/market/store/cover/medium/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(1280, 575)->save($pathMedium);
            $pathSmall = public_path('assets/img/market/store/cover/small/' . $filenameCover);
            Image::make($imageCover->getRealPath())->fit(300, 135)->save($pathSmall);
        } else {
        }
        $store              = Store::find($id);
        $slug               = $this->create_slug(Input::get('name'));
        $store->slug        = $slug;
        $store->name        = Input::get('name');
        $store->slogan      = Input::get('slogan');
        $store->description = Input::get('description');
        $store->image       = $filename;
        $store->image_cover = $filenameCover;
        $store->save();
        return Redirect::to('/store/create')->with('message', 'Store data updated successfully!');
    }
    public function destroy_store($id)
    {
        $filetodelete = DB::table('stores')->select('stores.image')->where('id', $id)->first();
        File::delete(public_path() . '/assets/img/market/store/large/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/market/store/medium/' . $filetodelete->image);
        File::delete(public_path() . '/assets/img/market/store/small/' . $filetodelete->image);
        Store::find($id)->delete();
        return Redirect::back();
    }
    public function destroy_inside_store()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . '/assets/img/store/large/' . $filetodelete);
        File::delete(public_path() . '/assets/img/store/medium/' . $filetodelete);
        File::delete(public_path() . '/assets/img/store/small/' . $filetodelete);
        Store::find(Input::get('id'))->delete();
        return Redirect::route('dashboard.list.store')->with('message', 'The store was deleted successfully!');
    }
    public function create_lookbook()
    {
        return view('member-pages.create-lookbook')->with('title', 'Create Lookbook - Tempo Cepat');
    }
    public function post_lookbook()
    {
        $image = Input::file('image');
        if (isset($image)) {
            $filename  = str_random(8) . '_lookbook_image.' . $image->getClientOriginalExtension();
            $pathLarge = public_path('assets/img/lookbook/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/lookbook/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/lookbook/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
            $createimage = $filename;
        } else {
            $createimage = '';
        }
        $article                        = new Article();
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $createimage;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/lookbook/create')->with('message', 'The lookbook was posted successfully!');
    }
    public function edit_lookbook($id)
    {
        return View::make('developer-pages.edit-lookbook')->with('article', DB::table('articles')->find($id))->with('title', 'Ubah lookbook - ');
    }
    public function put_update_lookbook()
    {
        $id          = Input::get('id');
        $image       = Input::file('image');
        $oldfilename = Input::get('filename');
        $filename    = $oldfilename;
        if (isset($image)) {
            $pathLarge = public_path('assets/img/lookbook/large/' . $filename);
            Image::make($image->getRealPath())->fit(768, 512)->save($pathLarge);
            $pathMedium = public_path('assets/img/lookbook/medium/' . $filename);
            Image::make($image->getRealPath())->fit(320, 212)->save($pathMedium);
            $pathSmall = public_path('assets/img/lookbook/small/' . $filename);
            Image::make($image->getRealPath())->fit(75, 50)->save($pathSmall);
        } else {
        }
        $article                        = Article::find($id);
        $article->title                 = Input::get('title');
        $article->article               = Input::get('article');
        $article->image                 = $filename;
        $article->users_id              = Input::get('users_id');
        $article->users_role_id         = Input::get('users_role_id');
        $article->article_categories_id = Input::get('article_categories_id');
        $article->save();
        return Redirect::to('/lookbook/create')->with('message', 'lookbook data updated successfully!');
    }
    public function destroy_lookbook($id)
    {
        $filetodelete = DB::table('articles')->select('articles.image')->where('id', $id)->pluck('articles.image');
        File::delete(public_path() . 'assets/img/lookbook/large/' . $filetodelete);
        File::delete(public_path() . 'assets/img/lookbook/medium/' . $filetodelete);
        File::delete(public_path() . 'assets/img/lookbook/small/' . $filetodelete);
        Article::find($id)->delete();
        return Redirect::route('create.lookbook')->with('message', 'The lookbook was deleted successfully!');
    }
    public function destroy_inside_lookbook()
    {
        $filetodelete = Input::get('filename');
        File::delete(public_path() . 'assets/img/lookbook/large/' . $filetodelete);
        File::delete(public_path() . 'assets/img/lookbook/medium/' . $filetodelete);
        File::delete(public_path() . 'assets/img/lookbook/small/' . $filetodelete);
        Article::find(Input::get('id'))->delete();
        return Redirect::route('create.lookbook')->with('message', 'The lookbook was deleted successfully!');
    }
}