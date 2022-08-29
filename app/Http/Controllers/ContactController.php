<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Ads;
use App\Models\Comment;
class ContactController extends Controller
{
    public function contact(){
        $cate = new Category();
        $categories = $cate->getAll();
    
        $tin = new Post();
        $posts = $tin->getAll();
    
        $tinnew = new Post();
        $tinnews = $tinnew->getAll();
    
        $tintop1 = new Post();
        $tintop1s = $tintop1->getTop1();
    
        $tintop2 = new Post();
        $tintop2s = $tintop2->getTop2();
    
        $adsTop = new Ads();
        $adsTops = $adsTop->getTopAds();
    
        $adsFirst = new Ads();
        $adsFirsts = $adsFirst->getFirst();
    
        $adsSecond = new Ads();
        $adsSeconds = $adsSecond->getSecondAds();
        return view('client/contact',['categoryList' => $categories, 'postList' => $posts, 'tinnewList' => $tinnews, 'tintop1List' => $tintop1s, 'tintop2List' => $tintop2s,
        'adsTopList' => $adsTops, 'adsFirstList' => $adsFirsts, 'adsSecondList' => $adsSeconds]);
    }
}
