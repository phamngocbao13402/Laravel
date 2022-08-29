<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ads extends Model
{
    public function getTopAds(){
        return DB::table('ads')->where('ads_status', 1)->where('ads_location',0)->orderBy('ads_id','desc')->first();
    }

    public function getFirst(){
        return DB::table('ads')->where('ads_status',1)->where('ads_location',1)->orderBy('ads_id','desc')->first();            
    }

    public function getSecondAds(){
        return DB::table('ads')->where('ads_status', 1)->where('ads_location',2)->orderBy('ads_id','desc')->first();
    }

    public function getAllLife(){
        return DB::table('ads')->where('ads_status','=',1)->get();            
    }
    public function getAll(){
        return DB::table('ads')->get();            
    }

    public function getById($id){
        return DB::table('ads')
        ->where('ads_id','=',$id)
        ->first();
    }

    
    public function insertt($ads_name, $ads_link, $ads_image, $ads_location, $ads_status){
        return DB::table('ads')
        ->insert(['ads_name' => $ads_name, 'ads_link' => $ads_link, 'ads_image' => $ads_image, 'ads_location' => $ads_location, 'ads_status' => $ads_status]);
    }

    public function updatee($id, $ads_name, $ads_link, $ads_image, $ads_location, $ads_status){
        return DB::table('ads')
        ->where('ads_id','=',$id)
        ->update(['ads_name' => $ads_name, 'ads_link' => $ads_link, 'ads_image' => $ads_image, 'ads_location' => $ads_location, 'ads_status' => $ads_status]);
    }

    public function deleteAsd($id){
        return DB::table('ads')
        ->where('ads_id','=',$id)
        ->delete();
    }
}
