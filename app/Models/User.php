<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $fillable = ['admin_id','name','type',
    'username','phone','email','photo','remember_token','status','password','otp','fullname','accounttpe','membertype','salertype','package_id','birthdate','division_id','district_id','thana_id','area_id','shop','shoptitle','shopdescripiton','googleloaction','saturday','sunday','monday','tuesday','wednesday','thuresday','friday','profilephoto','coverphoto','shopexpirydate','path','email_verified_at','salepost' ];


public function gender(){
    return $this->belongsTo('App\Gender');
}
 public function admin(){
    return $this->belongsTo('App\Models\Admin','admin_id','id');
}
public function bikeshop()
{
    return $this->hasOne('App\Models\Bikeshop');
}


public function status(){
    return $this->belongsTo('App\Models\Status');
}

public function accounttype()
{
    return $this->belongsTo('App\Models\Accounttype');
}

public function userreview(){
    return $this->hasOne('App\Models\Userreview');
    }
       public function todotaskuser(){
    return $this->hasOne('App\Models\Todotaskuser');
    }

     public function bikesale(){
    return $this->hasMany('App\Models\Bikesale');
    }
    public function package(){
        return $this->belongsTo('App\Models\Package');
    }
    public function chat(){
        return $this->hasMany('App\Models\Chat');
        }
         public function chatuserid(){
        return $this->hasMany('App\Models\Chat');
        }
protected $casts = [
'email_verified_at' => 'datetime',
'created_at' => 'datetime:M d Y',
];

public function bikesalechat(){
return $this->hasMany('App\Models\Bikesalechat');

}
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    
}



