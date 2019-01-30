<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $fillable = [
        'id',
        'uid',
        'user_id',
        'title',
        'content'
    ];

    protected $hidden = [
        'id',
        'user_id',
        'uid'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
