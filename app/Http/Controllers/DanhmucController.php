<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
use App\Models\User;

class DanhmucController extends Controller
{
    function category_add(){
        $category_name = $_POST['category_name'];
        $category_status = $_POST['category_status'];       
        $cate = new Category();
        $categories = $cate->insert($category_name, $category_status);
        return redirect('/admin/category');
    }

    // function getCateByPost($id)

    public function showUpdate($id){
        $cate = new Category();
        $categories = $cate->getNameCate($id);
        return view('/admin/update_cate ',['categories' => $categories]);
    }
    public function category_update($id){
        $category_name = $_POST['category_name'];
        $category_status = $_POST['category_status'];       
        $cate = new Category();
        $categories = $cate->updatee($id, $category_name, $category_status);
        return redirect('/admin/category');
    }
    public function category_delete($id){
        $cate = new Category();
        $categories = $cate->deleteCategory($id);
        return redirect('/admin/category');
    }
}
