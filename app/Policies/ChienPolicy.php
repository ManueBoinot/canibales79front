<?php

namespace App\Policies;

use App\Models\Chien;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ChienPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function before(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Chien $chien)
    {
        return $chien->user_id === $user->id
            ? Response::allow()
            : Response::denyWithStatus(403);
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function store(User $user, Chien $chien)
    {
        return $chien->user_id === $user->id
            ? Response::allow()
            : Response::denyWithStatus(403);
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function edit(User $user)
    {
        return true;
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Chien $chien)
    {
        return $chien->user_id === $user->id
            ? Response::allow()
            : Response::denyWithStatus(403);
    }

    // ____________________________________________________________________________
    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Chien  $chien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Chien $chien)
    {
        return $chien->user_id === $user->id
            ? Response::allow()
            : Response::denyWithStatus(403);
    }
}
