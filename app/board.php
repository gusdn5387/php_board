<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $fillable = [
        'no',
        'uid',
        'user_id',
        'title',
        'content'
    ];

    protected $hidden = [
        'no',
        'user_id',
        'uid'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
