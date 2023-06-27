<?php

namespace App\Policies;

use App\Models\Instructor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class InstructorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Instructor $instructor)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Instructor $instructor)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Instructor $instructor)
    {
        $has = $instructor->courses()->count();
        if($has){
            return Response::deny('Cannot Remove Instructor becouse Exist Courses');
        }else{
            return Response::allow();
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Instructor $instructor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Instructor $instructor)
    {
        //
    }
}
