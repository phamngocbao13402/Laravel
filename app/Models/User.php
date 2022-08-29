<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Passwords\CanResetPassword;
use App\NotifiCations\CustomResetPasswordNotification;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }

    public function getAll(){
        return DB::table('users')
        ->get();            
    }

    public function getIdUser($id){
        return DB::table('users')->where('id',$id)->first();            
    }

    public function insert($name, $email, $password, $user_status, $user_role){       
        return DB::table('users')->insert(['name'=> $name, 'email'=>$email, 'password'=>$password, 'user_status'=>$user_status, 'user_role'=>$user_role]) ;
    }

    public function updatee($id, $name, $email, $password, $user_status, $user_role){
        return DB::table('users')
        ->where('id','=',$id)
        ->update(['name'=> $name, 'email'=>$email, 'password'=>$password, 'user_status'=>$user_status, 'user_role'=>$user_role]);
    }

    public function deleteUser($id){
        return DB::table('users')
        ->where('id','=',$id)
        ->delete();
    }
}
