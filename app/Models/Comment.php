<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getCmtByPost($id){
        return DB::table('comments')
        ->join('posts','posts.post_id','=','comments.post_id')
        ->join('users','users.id','=','comments.user_id')
        ->where('comments.post_id',$id)
        ->get(); 
    }

    public function getAll(){
        return DB::table('comments')
        ->join('posts','posts.post_id','=','comments.post_id')
        ->join('users','users.id','=','comments.user_id')
        ->get(); 
    }

    protected $table = 'comments';
    protected $primaryKey = 'cmt_id';
    protected $dates = ['cmt_date'];
    protected $fillable = [
        'cmt_content',
        'cmt_status',
        'post_id',
        'user_id'
    ];
}
