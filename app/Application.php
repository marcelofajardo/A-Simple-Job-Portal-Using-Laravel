<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['user_id','title','description','location'];

    public function user(){
        return $this->belongsTo('App\User','applicant_id');
    }
}
