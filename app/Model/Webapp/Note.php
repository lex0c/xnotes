<?php

namespace App\Model\Webapp;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'category_id', 'color', 'access', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id'
    ];

    /**
     * @var array
     */
    private static $colors = [
        'primary' => '#337ab7',
        'success' => '#d6e9c6',
        'info'    => '#bce8f1',
        'warning' => '#faebcc',
        'danger'  => '#ebccd1'
    ];

    /**
     * @var array
     */
    private static $access = [
        'private' => 'Privado',
        'public'  => 'Publico'
    ];

    /**
     * @return array $colors
     */
    public static function getColors()
    {
        return self::$colors;
    }

    /**
     * @return array $access
     */
    public static function getAccess()
    {
        return self::$access;
    }

}