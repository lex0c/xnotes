<?php

namespace App\Model\Webapp;

use Illuminate\Database\Eloquent\Model;

class NoteCategory extends Model
{
    protected $fillable = [
        'note_id', 'category_id'
    ];

}
