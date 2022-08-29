<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
use App\Models\User;
class NguoidungController extends Controller
{
    function nguoiDung(){
        $user = new User();
        $users = $user->getAll();
        return view('/admin/view_user',['usersList' => $users]);
    }
    function user_add(){
        $name = $_POST['name'];
        $email = $_POST['email'];     
        $password = $_POST['password']; 
        $user_status = $_POST['user_status'];    
        $user_role = $_POST['user_role']; 
        $user = new User();
        $users = $user->insert($name, $email, $password, $user_status, $user_role);
        return redirect('/admin/user');
    }
    public function showUpdate($id){
        $user = new User();
        $users = $user->getIdUser($id);
        return view('/admin/update_user ',['users' => $users]);
    }
    public function user_update($id){
        $name = $_POST['name'];
        $email = $_POST['email'];     
        $password = $_POST['password']; 
        $user_status = $_POST['user_status'];    
        $user_role = $_POST['user_role']; 
        $user = new User();
        $users = $user->updatee($id, $name, $email, $password, $user_status, $user_role);
        return redirect('/admin/user');
    }
    public function user_delete($id){
        $user = new User();
        $users = $user->deleteUser($id);
        return redirect('/admin/user');
    }
}
