<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'status'
    ];

    // public $primaryKey = 'post_id';
    public function published() {
        return $this->status == 1 ? "Published" : "Draft";
    }
}
