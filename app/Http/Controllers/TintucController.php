<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
class TintucController extends Controller
{

    public function index(){
        $cate = new Category();
        $categories = $cate->getAllLife();

        $tin = new Post();
        $posts = $tin->getAllLife();
        $tinnews = $tin->getAllLife();
        $tintop1s = $tin->getTop1();
        $tintop2s = $tin->getTop2();
        $getNew1 = $tin->getNew1();
        $getNew2 = $tin->getNew2();
        $getNew3 = $tin->getNew3();
        $getNew4 = $tin->getNew4();

        $adsTop = new Ads();
        $adsTops = $adsTop->getTopAds();
        $adsFirsts = $adsTop->getFirst();
        $adsSeconds = $adsTop->getSecondAds();
        
        return view('client/index',['categoryList' => $categories, 'postList' => $posts, 'tinnewList' => $tinnews, 'tintop1List' => $tintop1s, 'tintop2List' => $tintop2s,
        'adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds, 'getNew1' => $getNew1, 'getNew2' => $getNew2, 'getNew3' => $getNew3,'getNew4' => $getNew4]);
    }

    public function chiTiet($id){
        $cate = new Category();
        $categories = $cate->getAllLife();

        $tin = new Post();
        $posts = $tin->getNewById($id);

        $tinnew = new Post();
        $tinnews = $tinnew->getAllLife();

        // $views = new Post();
        // $viewss = $views->tangView($id);

        $adsTop = new Ads();
        $adsTops = $adsTop->getTopAds();

        $adsFirst = new Ads();
        $adsFirsts = $adsFirst->getFirst();

        $adsSecond = new Ads();
        $adsSeconds = $adsSecond->getSecondAds();
        
        $prevNew = new Post();
        $prevNews = $prevNew->getPrevPost($id);
        $nextNew = new Post();
        $nextNews = $nextNew->getNextPost($id);

        $cmt = new Comment();
        $cmts = $cmt->getCmtByPost($id);

        // $chitiet = new Post();
        // $chitiets = $chitiet->tangView($id);
        return view('client/chi-tiet',['adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds,
        'categoryList' => $categories, 'postList' => $posts, 'tinnewList' => $tinnews, 'prevNew' => $prevNews, 'nextNew' => $nextNews, 'cmtsList' =>$cmts]);
    }

    public function danhMuc($id){
        $cate = new Category();
        $categories = $cate->getAllLife();
        $tinnew = new Post();
        $tinnews = $tinnew->getAllLife();

        $tinByDanhMuc = new Post();
        $tinByDanhMucs = $tinByDanhMuc -> getpostByLoai($id);

        $nameCate = new Category();
        $nameCates = $nameCate->getNameCate($id);

        $adsTop = new Ads();
        $adsTops = $adsTop->getTopAds();

        $adsFirst = new Ads();
        $adsFirsts = $adsFirst->getFirst();

        $adsSecond = new Ads();
        $adsSeconds = $adsSecond->getSecondAds();
        return view('client/danhmuc',['adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds,
            'categoryList' => $categories, 'tinnewList' => $tinnews, 'tinByDanhMucList' => $tinByDanhMucs, 'nameCate' => $nameCates]);
    }


    public function timKiem(){
            $kyw = $_GET['keyword'];
            $tin = new Post();
            $tinByDanhMucs = $tin->timKiem($kyw);

            $message = count($tinByDanhMucs) == 0 ? "Không có kết quả tìm kiếm phù hợp" : "";

            $cate = new Category();
            $categories = $cate->getAllLife();
            $tinnew = new Post();
            $tinnews = $tinnew->getAllLife();

            // $tinByDanhMuc = new Post();
            // $tinByDanhMucs = $tinByDanhMuc -> getpostByLoai($id);

            // $nameCate = new Category();
            // $nameCates = $nameCate->getNameCate($id);

            $adsTop = new Ads();
            $adsTops = $adsTop->getTopAds();

            $adsFirst = new Ads();
            $adsFirsts = $adsFirst->getFirst();

            $adsSecond = new Ads();
            $adsSeconds = $adsSecond->getSecondAds();
            return view('client/timkiem',['adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds,
            'categoryList' => $categories, 'tinnewList' => $tinnews, 'tinByDanhMucList' => $tinByDanhMucs, 'message' => $message]);
    }

    public function dsTin(){

        $cate = new Category();
        $categories = $cate->getAllLife();
        $tinnew = new Post();
        $tinnews = $tinnew->getAllLife();


        $adsTop = new Ads();
        $adsTops = $adsTop->getTopAds();

        $adsFirst = new Ads();
        $adsFirsts = $adsFirst->getFirst();

        $adsSecond = new Ads();
        $adsSeconds = $adsSecond->getSecondAds();
        return view('client/tin',['adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds,
        'categoryList' => $categories, 'tinnewList' => $tinnews]);
}

    // public function chiTietBydanhMuc($id){
    //     $cate = new Category();
    //     $categories = $cate->getAll();
    //     $tinnew = new Post();
    //     $tinnews = $tinnew->getAll();
    //     return view('danhmuc',['categoryList' => $categories, 'tinnewList' => $tinnews]);
    // }

    public function getAll(){
        $post = new Post();
        $posts = $post->getAll();
        return view('/admin/view_post', ['postList' => $posts]);
    }

    public function view_add(){
        $cate = new Category();
        $categories = $cate->getAllLife();
        return view('/admin/add_post',['categoryList' => $categories]);
    }

    public function deletePost($id){
        $post = new Post();
        $posts = $post->deletePost($id);
        return redirect('/admin/post');
    }

    public function post_add(){
        $post_title = $_POST['post_title'];
        $post_summary = $_POST['post_summary'];
        $post_content = $_POST['post_content'];

        $imgpath = $_FILES['post_image']['name'];
        $target_dir = "../public/assets/img/news/";
        $target_file = $target_dir.basename($imgpath);
        move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file);
        $post_image = $imgpath;
        // $post_image = $_POST['post_image'];
        $post_date = $_POST['post_date'];
        $post_status = $_POST['post_status'];
        $post_view = $_POST['post_view'];
        $post_tag = $_POST['post_tag'];
        $category_id = $_POST['category_id'];
        $user_id = $_POST['user_id'];
        $post = new Post();
        $posts = $post->insertt($post_title, $post_summary, $post_content, $post_image, $post_date, $post_status, $post_view, $post_tag, $category_id, $user_id);
        // var_dump($post_title,  $post_summary, $post_image, $post_date, (int)$post_status, $post_content, (int)$user_id, (int)$category_id, (int)$post_view);

        $cate = new Category();
        $categories = $cate->getAllLife();
        $postt = new Post();
        $postts = $postt->getAll();
        return view('/admin/view_post', ['categoryList' => $categories, 'postList' => $postts]);
    }


    public function showUpdate($id){
        $post = new Post();
        $posts = $post->getNewById($id);
        $cate = new Category();
        $categories = $cate->getAllLife();
        return view('/admin/update_post',['postList' => $posts, 'categoryList' => $categories]);
    }
    public function post_update($id){
        $post_title = $_POST['post_title'];
        $post_summary = $_POST['post_summary'];
        $post_content = $_POST['post_content'];

        $post_image = $_FILES['image_new']['name'];
        if($post_image=='') {
            $post_image = $_POST['image_old'];
        } else {
            $target_dir = "../public/assets/img/news/";
            $target_file =  $target_dir . basename($post_image);
            move_uploaded_file($_FILES['image_new']['tmp_name'], $target_file);
        }
        $post_date = $_POST['post_date'];
        $post_status = $_POST['post_status'];
        $post_view = $_POST['post_view'];
        $post_tag = $_POST['post_tag'];
        $category_id = $_POST['category_id'];
        $user_id = $_POST['user_id'];
        $postt = new Post();
        $postts = $postt->getAll();
        $cate = new Category();
        $categories = $cate->getAllLife();
        $post = new Post();
        $posts = $post->updatee($id,$post_title, $post_summary, $post_content, $post_image, $post_date, $post_status, $post_view, $post_tag, $category_id, $user_id);
        return view('/admin/view_post', ['categoryList' => $categories, 'postList' => $postts]);
    }
}
