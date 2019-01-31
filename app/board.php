<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $fillable = [
        'uid',
        'title',
        'content'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'boards_uid_foreign');
    }
}
