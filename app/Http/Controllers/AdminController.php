<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
use App\Models\User;
class AdminController extends Controller
{
    function index(){
        return view('/admin/index');
    }

    function danhMuc(){
        $cate = new Category();
        $categories = $cate->getAll();
        return view('/admin/view_cate',['categoryList' => $categories]);
    }
    //$category = new CateNew();
        // $category-> category_name = $category_name;
        // $category-> category_status = $category_status;
        // if($category->save()){
        //     return redirect('/admin/category');
        // }
    

    
}
