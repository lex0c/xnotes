<?php

namespace App\Model\Webapp;

use App\Model\Webapp\Note;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
