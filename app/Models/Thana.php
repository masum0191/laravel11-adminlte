<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $fillable = [
        'district_id','thana','created_at','bnthana','slug'
     ];



          public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function area()
    {
        return $this->hasMany('App\Models\Area');
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
