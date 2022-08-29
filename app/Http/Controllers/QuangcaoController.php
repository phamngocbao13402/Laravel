<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
class QuangcaoController extends Controller
{
    public function getAll(){
        $ads = new Ads();
        $adss = $ads->getAllLife();
        return view('/admin/view_ads', ['adsList' => $adss]);
    }

    public function view_add(){  
        return view('/admin/add_ads');
    }

    public function deleteAds($id){
        $asd = new Ads();
        $asds = $asd->deleteAsd($id);
        return redirect('/admin/ads');
    }

    public function ads_add(){
        $ads_name = $_POST['ads_name'];
        $ads_link = $_POST['ads_link'];
        $imgpath = $_FILES['ads_image']['name'];
        $target_dir = "../public/assets/img/gallery/";
        $target_file = $target_dir.basename($imgpath);
        move_uploaded_file($_FILES['ads_image']['tmp_name'],$target_file);
        $ads_image = $imgpath;
        $ads_location = $_POST['ads_location'];
        $ads_status = $_POST['ads_status'];
        $ads = new Ads();
        $adss = $ads->insertt($ads_name, $ads_link, $ads_image, $ads_location, $ads_status);
        $adsss = $ads->getAllLife();
        return view('/admin/view_ads',  ['adsList' => $adsss]);
    }


    public function showUpdate($id){
        $ads = new Ads();
        $adss = $ads->getById($id);
        return view('/admin/update_ads',['adsList' => $adss]);
    }
    public function ads_update($id){
        $ads_name = $_POST['ads_name'];
        $ads_link = $_POST['ads_link'];
        // $imgpath = $_FILES['ads_image']['name'];
        // $target_dir = "../public/assets/img/gallery/";
        // $target_file = $target_dir.basename($imgpath);
        // move_uploaded_file($_FILES['ads_image']['tmp_name'],$target_file);
        // $ads_image = $imgpath;

        $ads_image = $_FILES['image_new']['name'];
        if($ads_image=='') {
            $ads_image = $_POST['image_old'];
        } else {
            $target_dir = "../public/assets/img/gallery/";
            $target_file =  $target_dir . basename($ads_image);
            move_uploaded_file($_FILES['image_new']['tmp_name'], $target_file);
        }

        $ads_location = $_POST['ads_location'];
        $ads_status = $_POST['ads_status'];
        $ads = new Ads();
        $adss = $ads->updatee($id, $ads_name, $ads_link, $ads_image, $ads_location, $ads_status);
        $adsss = $ads->getAllLife();
        return view('/admin/view_ads', ['adsList' => $adsss]);
    }
}
