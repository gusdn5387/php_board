<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $fillable = [
        'no',
        'uid',
        'title',
        'content'
    ];

    protected $hidden = [
        'no',
        'uid'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
