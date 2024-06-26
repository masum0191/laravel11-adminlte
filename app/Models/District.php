<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'id','division_id','district','slug','bndistrict'
     ];

     public function division()
     {
         return $this->belongsTo('App\Models\Division');
     }
          public function thana()
    {
        return $this->hasMany('App\Models\Thana');
    }

    public function customer()
    {
        return $this->hasMany('App\Models\Customer');
    }
    public function bikesale()
    {
        return $this->hasMany('App\Models\Bikesale');
    } 

}
