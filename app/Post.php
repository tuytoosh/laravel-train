<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function published() {
        return $this->created_at != null ? "Published" : "Draft";
    }
}
