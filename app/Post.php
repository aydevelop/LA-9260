<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getExcerpt(){
        return str_limit($this->content, 40);
    }
}
