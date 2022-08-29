<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class BinhluanController extends Controller
{
    public function binhLuan(){
        $t = new Comment;
        $t->cmt_content = $_POST['cmt_content'];
        $t->cmt_status = $_POST['cmt_status'];
        $t->post_id = $_POST['post_id'];
        $t->user_id = $_POST['user_id'];
        $t->cmt_date = now();
        $t->save();
        return redirect('http://localhost:8000/chi-tiet/'.$_POST['post_id']);
    }

    public function getAll(){
        $cmt = new Comment;
        $cmts = $cmt->getAll();
        return view('/admin/view_cmt', ['cmtsList' => $cmts]);
    }
}
