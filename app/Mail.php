<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public function sender(){
    	return $this->belongsTo(User::class, 'from_id');
    }
    public function receiver(){
    	return $this->belongsTo(User::class, 'to_id');
    }
}