<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Category extends Model
{
    public function getAllLife(){
        return DB::table('categories')->where('category_status','=',1)->get();            
    }
    public function getAll(){
        return DB::table('categories')->get();            
    }

    public function getNameCate($id){
        return DB::table('categories')->where('category_id',$id)->first();            
    }

    public function insert($category_name, $category_status){       
        return DB::table('categories')->insert(['category_name'=> $category_name, 'category_status'=>$category_status]) ;
    }

    public function updatee($id, $category_name, $category_status){
        return DB::table('categories')
        ->where('category_id','=',$id)
        ->update(['category_name'=> $category_name, 'category_status'=>$category_status]);
    }

    public function deleteCategory($id){
        return DB::table('categories')
        ->where('category_id','=',$id)
        ->delete();
    }
}
