<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{



    public function category()
    {
       //return $this->belongsTo(category::class);
      return $this->belongsTo('App\category');
    }

}
