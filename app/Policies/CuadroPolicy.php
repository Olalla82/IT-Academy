<?php

namespace App\Policies;

use App\Models\Cuadro;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CuadroPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuadro  $cuadro
     * @return mixed
     */
    public function view(User $user, Cuadro $cuadro)
    {
        return $user->id == $cuadro->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuadro  $cuadro
     * @return mixed
     */
    public function update(User $user, Cuadro $cuadro)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuadro  $cuadro
     * @return mixed
     */
    public function delete(User $user, Cuadro $cuadro)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuadro  $cuadro
     * @return mixed
     */
    public function restore(User $user, Cuadro $cuadro)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cuadro  $cuadro
     * @return mixed
     */
    public function forceDelete(User $user, Cuadro $cuadro)
    {
        //
    }
}
