<?php

namespace App\Policies\Webapp;

use App\Model\Webapp\Category;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function whoSee(User $user, Category $category)
    {
        return $user->id == $category->user_id;
    }

}