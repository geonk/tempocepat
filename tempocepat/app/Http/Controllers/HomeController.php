<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use URL;

use Auth;
use Entrust;
use App\User;
use App\Comment;
use App\Article;
use App\Like;
use App\Product;
use App\Musician;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

use Njasm\Soundcloud\SoundcloudFacade;
use Soundcloud;

use Response;
use Session;
use Illuminate\Support\Facades\Input;

use PDO;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }



        public function laravelfilemanager()
    {
        return view('vendor.laravel-filemanager.index')
        ->with('title', 'File Manager');
    }


    //--------------------------------
        public function list_musicians(Request $request){
        // $products=Product::paginate(4);
            // $products=Musician::paginate(100);
            $products=Musician::orderBy('name', 'asc')->paginate(12);
            // $products=Musician::orderBy(DB::raw('RAND()'))->take(12)->get();
            // $products=Musician::orderBy(DB::raw('RAND()'))->paginate(12);
            // $products=DB::table('musicians')->paginate(4);
        $html='';
        foreach ($products as $product) {
            // $html.='<li>'.$product->id.' <strong>'.$product->name.'</strong> : '.$product->genre.'</li>';
            // details
            $html.='<div class="musician-item">
            <div class="musician-img-cover"><img src="'.url('/').'/tempocepat/public/assets/img/garage/musician/cover/small/'.$product->image_cover.'"/></div>
            <div class="musician-content">
              <div class="musician-img-wrapper"><img src="'.url('/').'/tempocepat/public/assets/img/garage/musician/logo/small/' .$product->image. '"/></div>
              <div class="musician-caption-wrapper"><a href="/musician/profile/' .$product->slug. '">
                  <h3 class="musician-name">'.$product->name.'</h3></a><span class="musician-genre">'.$product->genre.'</span></div>
            </div>
          </div>';
        }
        if ($request->ajax()) {
            return $html;
        }
        // return view('files.loadmore',compact('products'));

        return view('main-pages.list-musicians',compact('products'))->with('title', 'List of Musicians - Tempo Cepat');
    }
    //--------------------------------


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

        public function scapi(SoundcloudFacade $soundcloud)
    {
        echo $soundcloud->getAuthUrl();
    }


    // public function soundcloud(SoundcloudFacade $soundcloud)
    public function soundcloud()
    {
        // echo $soundcloud->getAuthUrl();
                echo Soundcloud::getAuthUrl();

                // return Response::json([
                //     //array of data
                // ]);
    }

    public function dashboard()
    {
        if(Entrust::hasRole('admin') || Entrust::hasRole('developer') || Entrust::hasRole('superadmin')){
            return view('dashboard.dashboard')
            ->with('articlecount', DB::table('articles')->count())
            ->with('storecount', DB::table('stores')->count())
            ->with('musiciancount', DB::table('musicians')->count())
            ->with('usercount', DB::table('users')->count())
            ->with('logs', DB::table('activity_log')
                ->join('users', 'activity_log.user_id', '=', 'users.id')
                    ->select('activity_log.*', 'users.name', 'users.image')
                ->orderBy('created_at', 'desc')->paginate(5));
        }else{
            $soundcloud = app(\Njasm\Soundcloud\SoundcloudFacade::class);
            return view('home')
            ->with('soundcloud', $soundcloud);
        }
    }


    //-------------------------------------------

    // if(!isset(Session::has(user)){
    //     die('0');
    // }

    public function submit_comment()
    {
        // $id = Auth::id();
        //insert-----
        // if($_POST['type'] == 'insert'){
            // $komentar     = mysqli_real_escape_string($link, $_POST['isi_komentar']);
            // $query        = "INSERT INTO comments (comment, users_id) VALUES ('$komentar', 1)";
            // // if(mysqli_query($link, $query)){
            //     // $last_id = mysqli_insert_id($link);
            //     echo "<div class='komentar_item' data-id='".$last_id."'><p class='komentar_text' id='komentar_".$last_id."' data-id='".$last_id."'>".$komentar."</p><button type='button' class='edit_komentar' data-id='".$last_id."'>Ubah</button><button type='button' class='hapus_komentar' data-id='".$last_id."'>Hapus</button><div>";
            // }else{
            //     echo "error";
            // }
        // }

        // $comment = $_POST['comment'];

        // $data = "<div class='komentar_item' data-id='".$last_id."'><p class='komentar_text' id='komentar_".$last_id."' data-id='".$last_id."'>".$komentar."</p><button type='button' class='edit_komentar' data-id='".$last_id."'>Ubah</button><button type='button' class='hapus_komentar' data-id='".$last_id."'>Hapus</button><div>";

        $comment = $_POST['comment'];
        $itemid = $_POST['item_id'];
        $userid = $_POST['user_id'];

        $comment_insert                       = new Comment();
        $comment_insert->comment              = Input::get('comment');
        $comment_insert->related_table        = 'events';//Input::get('related_table');
        $comment_insert->related_table_id     = $itemid;//Input::get('related_table_id');
        $comment_insert->users_id             = $userid;//Input::get('users_id');
        $comment_insert->users_role_id        = 1;//::get('users_role_id');
        $comment_insert->save();

        $data = "
                <div class='comment-item' data-id='{{  }}'>
                  <div class='comment-thumbnail'><a src='#' class='circle-thumbnail-a'>
                      <div class='circle-thumbnail'><img src='assets/img/avatar3.png'/></div></a></div><span class='vertical-line'></span>
                  <div class='comment-content'>
                    <div class='comment-data'>
                      <h5 class='comment-author'>Ian Santono</h5><span class='comment-timestamp'>March 24, 2016 <span class='orange-color'>-</span> 03:18 AM</span>
                    </div>
                    <div class='comment-text-wrapper'>
                        <span class='baloon-triangle'></span>
                      <p id='comment_{{  }}' class='comment-text'>".$comment."</p>
                      <div class='dropdown comment-setting' data-id='{{  }}'>
                        <!--<a href='#'  class='dropbtn'>
                            <span class='trile-dots'>...</span>
                        </a>-->
                        <div id='storedropdown' class='dropdown-content'>
                            <a class='edit_comment' data-id='{{  }}'>Edit</a>
                            <a class='delete_comment' data-id='{{  }}'>Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        ";

        // if(Request::ajax()){
                return Response::json($data);
        // }

    }

    public function delete_comment()
    {
        $comment_id = $_POST['comment_id'];

        Comment::find($comment_id)->delete();

        return Response::json($comment_id);

    }

    public function update_comment()
    {
        $comment_id = $_POST['comment_id'];
        $comment_value = $_POST['comment_value'];

        $comment_insert                     = Comment::find($comment_id);
        $comment_insert->comment              = $comment_value;//Input::get('comment');
        $comment_insert->related_table        = 'events';//Input::get('related_table');
        $comment_insert->related_table_id     = 1;//Input::get('related_table_id');
        $comment_insert->users_id             = 1;//Input::get('users_id');
        $comment_insert->users_role_id        = 1;//::get('users_role_id');
        $comment_insert->save();

        return Response::json($comment_id);

    }

    public function add()
    {
        return view('main-pages.home')
            ->with('title', 'Tempo Cepat');
    }

    public function create()
    {
        if(Session::token()!==Input::get('_token')){
            return Response::json(array('msg'=>'ERROR CUY'));
        }
        $comment = Input::get('comment');
        $response = array(
                'status'    => 'success',
                'msg'       => 'sukses tercipta'
            );
        // return Response::json($response);
        return $comment;
    }

    //-------------------------------------------
    public function dashboard_data_member()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-data-member')
        ->with('user', User::find($id));
    }
    public function dashboard_data_member_update()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-data-member')
        ->with('user', User::find($id));
    }
    public function dashboard_list_store()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-store')
        ->with('liststore', DB::table('stores')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_product()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-product')
        ->with('listproduct', DB::table('products')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_musician()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-musician')
        ->with('listmusician', DB::table('musicians')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_music()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-music')
        ->with('listmusic', DB::table('musics')
                ->join('musicians', 'musics.musician_id', '=', 'musicians.id')
                    ->select('musics.*','musics.created_at as musics_created','musicians.name', 'musicians.image')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_event()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-event')
        ->with('listevent', DB::table('events')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_article()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-article')
        ->with('listarticle', DB::table('articles')->get())
        ->with('user', User::find($id));
    }
    public function dashboard_list_user()
    {
        $id = Auth::id();
        return view('dashboard.dashboard-list-user')
        ->with('listuser', DB::table('users')->get())
        ->with('user', User::find($id));
    }
    //-------------------------------------------
    public function index()
    {
        // DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
        $articlesQuery = DB::select(DB::raw("
                SELECT
                events.id,
                events.title,
                events.image,
                COUNT(likes.id) AS likes,
                GROUP_CONCAT(users.name SEPARATOR '|') AS liked_by

                FROM events

                LEFT JOIN likes
                ON events.id = likes.related_table_id

                LEFT JOIN users
                ON likes.users_id = users.id
                GROUP BY events.id
                ORDER BY events.created_at DESC
                -- LIMIT 2
            "));

            // $articlesQuery = $articlesQuery->toArray();

            // $articlesQuery = json_decode(json_encode($articlesQuery),true);
            // $articlesQuery = $articlesQuery->toArray();
            // while ($row = $articlesQuery->fetch_object()) {
            // // while ($row = $articlesQuery) {
            //     // $row = $articlesQuery->;
            //     $row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
            //     $articles[] = $row;
            // }

            // $articlesQuery->liked_by = $articlesQuery->liked_by ? explode('|', $articlesQuery->liked_by) : [];
                // $articles[] = $articlesQuery->liked_by;

        // $article = $articlesQuery ? $articlesQuery[0]->title;

            // $col = collect($articlesQuery);
            // $articlesQueryArray = $col->toArray();

            // $articlesQuery = (object)$articlesQuery;
            // $articlesQuery = json_decode(json_encode($articlesQuery),true);
            foreach ($articlesQuery as $row) {
                $row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
                $articles[] = $row;
            }

            // $perPage = 1;
            // $currentPage = Input::get('page',1)-1;
            // $pageData = array_slice($articlesQuery, $currentPage * $perPage , $perPage);
            // $articlesQuery = Paginator::make($pageData,count($articlesQuery),$perPage);


            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $currentPage = $currentPage - 1;
            // $currentPage = LengthAwarePaginator::setCurrentPage(1);
            $collection = new Collection($articles);
            $perPage = 10;
            $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();
            $paginatedSearchResults = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);

            $articlesQuery = $paginatedSearchResults;

            // $articlesQuery = $articlesQuery->paginate(5);

            // $articlesQuery = new Paginator($articlesQuery, $perPage, $currentPage = null);
            // $articlesArray = $articlesQuery->toArray();
            // $articlesQuery = new Paginator($articlesQuery,2);


            // dd(get_class($articlesQuery));

            // $articlesQuery = collect($articles);
            // $articlesQuery = $articlesQuery->paginate(2);

            // $articlesQuery = Paginator::($articlesQuery, count($articlesQuery), 2);

        return view('main-pages.home')
            ->with('title', 'Tempo Cepat')
            // ->with('listevents', DB::table('events')->select(DB::raw('WEEKOFYEAR(created_at)=WEEKOFYEAR(NOW())'))->get())
            ->with('listevents', DB::table('events')->select(DB::raw('DATE(created_at)=DATE(NOW())'))->select('events.*')->orderBy('created_at', 'asc')->paginate(5))
            ->with('events', $articlesQuery)
            ->with('comments', DB::table('comments')->join('users', 'comments.users_id', '=', 'users.id')
                    ->select('comments.*', 'users.name', 'users.image')->orderBy('created_at', 'asc')->get())
            ->with('latest_blog', DB::table('articles')->orderBy('created_at', 'desc')->first())
            ->with('second_latest_blog', DB::table('articles')->orderBy('created_at', 'desc')->paginate(2))
            // ->with('latest_music', DB::table('musics')->orderBy('created_at', 'desc')->first())
            ->with('latest_music', DB::table('musics')
            ->join('music_categories', 'musics.music_categories_id', '=', 'music_categories.id')
            ->join('musicians', 'musics.musician_id', '=', 'musicians.id')
            ->select('musics.*','musics.created_at as musics_created','musicians.name', 'musicians.slug as musicians_slug', 'musicians.image','music_categories.name as music_categories_name')
            ->orderBy('created_at', 'desc')
            ->first())
            ->with('latest_products', DB::table('products')
            ->join('product_categories', 'products.product_categories_id', '=', 'product_categories.id')
            ->select('products.*','products.created_at as products_created','product_categories.name as product_categories_name')
            ->orderBy('products_created', 'desc')
            ->paginate(6));


            //***************************************************************


        // return $articlesQuery;

        // $e=DB::table('events')->paginate(2);
        // // return Response::json($e);
        // return Response::json($articlesQuery);
    }

    public function like()
    {





            // $id_item =(int)$_POST['id'];

        // $articlesQuery = DB::select(DB::raw("
        //         SELECT
        //         COUNT(likes.id) AS likes
        //         FROM likes
        //         WHERE related_table_id={$id_item}
        //     "));
        // foreach ($articlesQuery as $row) {
        //         $row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
        //         $articles[] = $row;
        //     }

        // if(isset($_POST['type'], $_POST['id'])){
            $type =$_POST['type'];
            $id =(int)$_POST['id'];
            $user_active_id = Auth::id();




$count = DB::select(DB::raw("
                        SELECT
                        COUNT(likes.id) AS likes
                        FROM likes
                        WHERE users_id={$user_active_id}
                        AND related_table_id = {$id}
                        "));



                    // $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();

            switch ($type) {
                case 'event':
                    $sql = "
                        INSERT INTO likes (users_id, related_table_id)
                                SELECT {$user_active_id}, {$id}
                                FROM events
                                WHERE EXISTS(
                                    SELECT id
                                    FROM events
                                    WHERE id={$id})
                                AND NOT EXISTS(
                                    SELECT id
                                    FROM likes
                                    WHERE users_id = {$user_active_id}
                                    AND related_table_id = {$id})
                                LIMIT 1;
                                ";
                    // $data = DB::select(DB::raw($sql));
                    // $data = DB::insert(DB::raw($sql));

                    // $sql = "INSERT INTO likes (users_id, related_table_id)
                    //             SELECT :user_active_id,:id
                    //             FROM articles
                    //             WHERE EXISTS(
                    //                 SELECT id
                    //                 FROM articles
                    //                 WHERE id=:id)
                    //             AND NOT EXISTS(
                    //                 SELECT id
                    //                 FROM likes
                    //                 WHERE users_id = :user_active_id
                    //                 AND related_table_id = :id)
                    //             LIMIT 1";


                                //  $sql = "INSERT INTO likes (users_id, related_table_id)
                                // SELECT ?,?
                                // FROM articles
                                // WHERE EXISTS(
                                //     SELECT id
                                //     FROM articles
                                //     WHERE id=?)
                                // AND NOT EXISTS(
                                //     SELECT id
                                //     FROM likes
                                //     WHERE users_id = ?
                                //     AND related_table_id = ?)
                                // LIMIT 1;";


                    // $data = DB::statement($sql, array($user_active_id,$id,$id,$user_active_id,$id));

                                $data = DB::statement($sql);

                                // $data = DB::raw($sql);

                                // $data = DB::connection()->getPdo()->exec($sql);

                    // Like::update_latest();
                    // if($data){
                    //     $resp="sukses";
                    // $count = DB::select(DB::raw("
                    //     SELECT
                    //     COUNT(likes.id) AS likes
                    //     FROM likes
                    //     WHERE users_id={$user_active_id}
                    //     AND related_table_id = {$id}
                    //     "));

                    // $datas = var_dump($data);
// $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();
                    // function update_latest(){
                    // if($count[0]->likes<1){
                    //     // $datas = $count[0]->likes;
                    //     $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();
                    //     $like = Like::find($last_id->id);
                    //     $like->related_table = 'articles';
                    //     $like->users_role_id = 1;
                    //     $like->save();
                    // }
                    // }

                // }else{

                //         $resp="gagal";
                // }

                    break;

            }





        // }

// $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();

            // $last_id = DB::select(DB::raw("
            //     SELECT id
            //     FROM likes
            //     WHERE users_id = {$user_active_id}
            //     AND related_table_id={$id}
            //     ORDER BY created_at DESC
            // "));



            $last_id = DB::select(DB::raw("
                                SELECT id
                                FROM likes
                                WHERE users_id = {$user_active_id}
                                AND related_table_id={$id}
                                ORDER BY created_at DESC
                            "));

            if((int)$count[0]->likes<1){

                        $like = Like::find((int)$last_id[0]->id);
                        $like->related_table = 'events';
                        $like->users_role_id = 1;
                        // $like->created_at = $like->updated_at;
                        $like->save();

                    }

            // $aq = $articlesQuery->id()

            $articlesQuery = DB::select(DB::raw("
                SELECT
                COUNT(likes.id) AS likes
                FROM likes
                WHERE related_table_id={$id}
            "));

        $res = "<span id='like_counter_".$id."'>".$articlesQuery[0]->likes."</span>";
            // $res = $resp;

        // $sql = ("
        //                     INSERT INTO likes (users_id, related_table_id)
        //                         SELECT {$user_active_id},{$id}
        //                         FROM articles
        //                         WHERE EXISTS(
        //                             SELECT id
        //                             FROM articles
        //                             WHERE id={$id})
        //                         AND NOT EXISTS(
        //                             SELECT id
        //                             FROM likes
        //                             WHERE users_id = {$user_active_id}
        //                             AND related_table_id = {$id})
        //                         LIMIT 1
        //                 ");
// $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();
// $count=$count->toArray();

        // $this->update_latest();

        return Response::json($res);

        // return $data;

    }

    // public function update_latest(){
    //                     $last_id = DB::table('likes')->select('id')->orderBy('created_at', 'desc')->first();
    //                     $like = Like::find($last_id->id);
    //                     $like->related_table = 'articles';
    //                     $like->users_role_id = 1;
    //                     $like->save();

    //             }

    public function events()
    {




        // DB::connection()->setFetchMode(PDO::FETCH_ASSOC);
        $articlesQuery = DB::select(DB::raw("
                SELECT
                events.id,
                events.title,
                events.image,
                COUNT(likes.id) AS likes,
                GROUP_CONCAT(users.name SEPARATOR '|') AS liked_by

                FROM events

                LEFT JOIN likes
                ON events.id = likes.related_table_id

                LEFT JOIN users
                ON likes.users_id = users.id
                GROUP BY events.id
                ORDER BY events.created_at DESC
                -- LIMIT 2
            "));

            // $articlesQuery = $articlesQuery->toArray();

            // $articlesQuery = json_decode(json_encode($articlesQuery),true);
            // $articlesQuery = $articlesQuery->toArray();
            // while ($row = $articlesQuery->fetch_object()) {
            // // while ($row = $articlesQuery) {
            //     // $row = $articlesQuery->;
            //     $row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
            //     $articles[] = $row;
            // }

            // $articlesQuery->liked_by = $articlesQuery->liked_by ? explode('|', $articlesQuery->liked_by) : [];
                // $articles[] = $articlesQuery->liked_by;

        // $article = $articlesQuery ? $articlesQuery[0]->title;

            // $col = collect($articlesQuery);
            // $articlesQueryArray = $col->toArray();

            // $articlesQuery = (object)$articlesQuery;
            // $articlesQuery = json_decode(json_encode($articlesQuery),true);
            foreach ($articlesQuery as $row) {
                $row->liked_by = $row->liked_by ? explode('|', $row->liked_by) : [];
                $articles[] = $row;
            }

            // $perPage = 1;
            // $currentPage = Input::get('page',1)-1;
            // $pageData = array_slice($articlesQuery, $currentPage * $perPage , $perPage);
            // $articlesQuery = Paginator::make($pageData,count($articlesQuery),$perPage);


            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $currentPage = $currentPage - 1;
            // $currentPage = LengthAwarePaginator::setCurrentPage(1);
            $collection = new Collection($articles);
            $perPage = 10;
            $currentPageSearchResults = $collection->slice($currentPage * $perPage, $perPage)->all();
            $paginatedSearchResults = new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);

            $articlesQuery = $paginatedSearchResults;

            // $articlesQuery = $articlesQuery->paginate(5);

            // $articlesQuery = new Paginator($articlesQuery, $perPage, $currentPage = null);
            // $articlesArray = $articlesQuery->toArray();
            // $articlesQuery = new Paginator($articlesQuery,2);


            // dd(get_class($articlesQuery));

            // $articlesQuery = collect($articles);
            // $articlesQuery = $articlesQuery->paginate(2);

            // $articlesQuery = Paginator::($articlesQuery, count($articlesQuery), 2);

        return view('main-pages.events')
            ->with('title', 'Events - Tempo Cepat')
            // ->with('listevents', DB::table('events')->select(DB::raw('WEEKOFYEAR(created_at)=WEEKOFYEAR(NOW())'))->get())
            ->with('listevents', DB::table('events')->select(DB::raw('DATE(created_at)=DATE(NOW())'))->select('events.*')->orderBy('created_at', 'asc')->paginate(5))
            ->with('events', $articlesQuery)
            ->with('comments', DB::table('comments')->join('users', 'comments.users_id', '=', 'users.id')
                    ->select('comments.*', 'users.name', 'users.image')->orderBy('created_at', 'asc')->get());


        // return $articlesQuery;

        // $e=DB::table('events')->paginate(2);
        // // return Response::json($e);
        // return Response::json($articlesQuery);


        // return view('main-pages.events')
            // ->with('title', 'Events - Tempo Cepat');
    }
    public function events_details($id)
    {
        return view('main-pages.events-details')
            ->with('title', 'Events Details - Tempo Cepat')

            ->with('postsrecom', DB::table('events')->orderBy(DB::raw('RAND()'))->take(10)->get())

            ->with('event', DB::table('events')->find($id));
    }

    public function market()
    {

        return view('main-pages.market')
            // ->with('products', DB::table('products')->orderBy('created_at', 'desc')->paginate(30))
         ->with('products', DB::table('products')
            ->join('product_categories', 'products.product_categories_id', '=', 'product_categories.id')
            ->select('products.*','products.created_at as products_created','product_categories.name as product_categories_name')
            ->orderBy('products_created', 'desc')
            ->paginate(30))
            ->with('title', 'Market - Tempo Cepat');
    }
    public function product_details($id)
    {
        // return view('main-pages.product-details')
        //     ->with('title', 'Product Details - Tempo Cepat');

        $store_id=DB::table('products')->select('stores_id')->where('id', $id)->pluck('stores_id');

        $pr=DB::table('products')->where('id', $id)->first();
        $response['img']=$pr->image;
        // $response['type']=$pr->image;
        return view('main-pages.product-details',compact('response'))
        ->with('title', 'Product Details - Tempo Cepat')
        // ->with('num', $store_id)

         ->with('postsrecom', DB::table('products')->orderBy(DB::raw('RAND()'))->take(5)->get())

        ->with('product', Product::find($id))
        ->with('store', DB::table('stores')->where('id',$store_id)->first());
        // ->with('product', DB::table('products')
        // ->join('stores', 'products.stores_id', '=', 'stores.id')
        //     ->select('products.*','products.created_at as product_created',
        //         'products.name as product_name',
        //         'stores.name as store_name', 'stores.slug as store_slug')->where('products.id',$id));
    }

    public function garage()
    {
        return view('main-pages.garage')
        ->with('musics', DB::table('musics')
            ->join('music_categories', 'musics.music_categories_id', '=', 'music_categories.id')
            ->join('musicians', 'musics.musician_id', '=', 'musicians.id')
            ->select('musics.*','musics.created_at as musics_created','musicians.name', 'musicians.slug as musicians_slug', 'musicians.image','music_categories.name as music_categories_name')
            ->orderBy('created_at', 'desc')
            ->paginate(40))
            ->with('title', 'Indie Music Garage - Tempo Cepat');
    }
    // public function list_musicians()
    // {
    //     return view('main-pages.list-musicians')
    //         ->with('musicians', DB::table('musicians')->orderBy('id', 'desc')->paginate(40))
    //         ->with('title', 'List of Musicians - Tempo Cepat');
    // }
    public function song_musicians()
    {
        return view('users.musician_songs')
            ->with('musics', DB::table('musics')->orderBy('id', 'desc')->paginate(20))
            ->with('title', 'Musician Songs - Tempo Cepat');
    }
    public function profile_musicians($slug)
    {
        $slugs = DB::table('musicians')->where('slug', '=', $slug)->first();
        return view('users.musician_profile')
            ->with('musician', $slugs)
            ->with('title', 'Musician Profile - Tempo Cepat');
            // ->with('musician', DB::table('musicians')->find($id));
    }

    public function blog()
    {
        return view('main-pages.blog')
        ->with('blogs', DB::table('articles')->orderBy('created_at', 'desc')->paginate(10))
            ->with('postsrecom', DB::table('articles')->orderBy(DB::raw('RAND()'))->take(5)->get())
            ->with('title', 'Blog - Tempo Cepat');
    }
    public function blog_details($slug)
    {
        $slugs = DB::table('articles')->where('slug', '=', $slug)->first();
        return view('main-pages.blog-details')
            ->with('blog', $slugs)
            ->with('postsrecom', DB::table('articles')->orderBy(DB::raw('RAND()'))->take(5)->get())
            ->with('title', 'Blog Details - Tempo Cepat');
            // ->with('blog', DB::table('articles')->find($id));
    }

    public function store($id)
    {
        return view('main-pages.store')
            ->with('title', 'Store - Tempo Cepat')
            ->with('products', DB::table('products')->where('stores_id', $id)->orderBy('created_at', 'desc')->paginate(30))
            ->with('store', DB::table('stores')->find($id));
    }
    public function list_stores()
    {
        return view('main-pages.list-stores')
            ->with('stores', DB::table('stores')->orderBy('created_at', 'desc')->paginate(40))
            ->with('title', 'List of Stores - Tempo Cepat');
    }

}
