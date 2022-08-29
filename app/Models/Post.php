<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        public function getAllLife(){
            return DB::table('posts')->where('post_status','=',1) ->join('categories','categories.category_id','=','posts.category_id')
            ->join('users','users.id','=','posts.user_id')->get();            
        }
        public function getAll(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')
            ->join('users','users.id','=','posts.user_id')
            ->get();            
        }

        public function getNew(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')
            -> orderBy('post_date','desc') 
            ->get();
        }

        public function getNew1(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')
            -> orderBy('post_date','desc')->limit(4) 
            ->get();
        }

        public function getNew2(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')->where('categories.category_id',2)
            -> orderBy('post_date','desc')->limit(4) 
            ->get();
        }

        public function getNew3(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')->where('categories.category_id',3)
            -> orderBy('post_date','desc')->limit(4) 
            ->get();
        }

        public function getNew4(){
            return DB::table('posts')
            ->join('categories','categories.category_id','=','posts.category_id')->where('categories.category_id',1)
            -> orderBy('post_date','desc')->limit(4) 
            ->get();
        }

        public function getTop1(){
            return DB::table('posts')->where('post_status','=',1)
            ->join('categories','categories.category_id','=','posts.category_id')
            -> orderBy('post_view','desc')
            ->first();
        }

        public function getTop2(){
            return DB::table('posts')->where('post_status','=',1)
            ->join('categories','categories.category_id','=','posts.category_id')
            -> orderBy('post_view','desc')
            ->skip(1)->take(3)
            ->get();
        }

        public function getNewById($id){
            $this->tangView($id);
            return DB::table('posts')
            ->where('post_id','=',$id)->join('users','users.id','=','posts.user_id')
            ->first();
           
        }

        public function getpostByLoai($id){
            return DB::table('posts')->join('categories','categories.category_id','=','posts.category_id')->where('posts.category_id','=',$id)->get();
        }

        public function getPrevPost($id){
            return DB::table('posts')->where('post_id',$id-1)->first();
        }

        public function getNextPost($id){
            return DB::table('posts')->where('post_id',$id+1)->first();
        }

        public function timKiem($kyw){
            return DB::table('posts')->join('categories','categories.category_id','=','posts.category_id')->where('post_title','LIKE','%'.$kyw.'%')->get();
        }

        public function tangView($id){
            $views = DB::table('posts')->where('post_id',$id)->value('post_view');
            return DB::table('posts')->where('post_id',$id)->update(['post_view' => $views +1]);
        }
        

        public function updatee($id,$post_title, $post_summary, $post_content, $post_image, $post_date, $post_status, $post_view, $post_tag, $category_id, $user_id){
            return DB::table('posts')
            ->where('post_id','=',$id)
            ->update(['post_title'=> $post_title, 'post_summary'=>$post_summary, 'post_content'=>$post_content, 'post_image'=>$post_image, 'post_date'=>$post_date, 'post_status'=>$post_status, 'post_view'=>$post_view, 'post_tag'=>$post_tag, 'category_id'=>$category_id, 'user_id'=>$user_id]);
        }

        public function insertt($post_title, $post_summary, $post_content, $post_image, $post_date, $post_status, $post_view, $post_tag, $category_id, $user_id){       
            return DB::table('posts')->insert(['post_title'=> $post_title, 'post_summary'=>$post_summary, 'post_content'=>$post_content, 'post_image'=>$post_image, 'post_date'=>$post_date, 'post_status'=>$post_status, 'post_view'=>$post_view, 'post_tag'=>$post_tag, 'category_id'=>$category_id, 'user_id'=>$user_id]) ;
        }

        public function deletePost($id){
            return DB::table('posts')
            ->where('post_id','=',$id)
            ->delete();
        }
    

}
