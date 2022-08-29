<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CateNew extends Model
{
    public function getAll(){
        return DB::table('categories')->get();            
    }

    public function getNameCate($id){
        return DB::table('categories')->where('category_id',$id)->first();            
    }
    protected $table = 'categories';
    public $timestamps = false;
}
