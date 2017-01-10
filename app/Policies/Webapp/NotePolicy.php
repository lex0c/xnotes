<?php

namespace App\Policies\Webapp;

use App\User;
use App\Model\Webapp\Note;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function whoSee(User $user, Note $note)
    {
        return $user->id == $note->user_id;
    }

}