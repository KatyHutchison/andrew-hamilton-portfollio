<?php

namespace App\Policies;

use App\User;
use App\Page;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class PagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the page.
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return mixed
     */
    public function view(User $user, Page $page)
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can create pages.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the page.
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return mixed
     */
    public function update(User $user, Page $page)
    {
        return Auth::check();
    }

    /**
     * Determine whether the user can delete the page.
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return mixed
     */
    public function delete(User $user, Page $page)
    {
        //
    }

    /**
     * Determine whether the user can restore the page.
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return mixed
     */
    public function restore(User $user, Page $page)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the page.
     *
     * @param  \App\User  $user
     * @param  \App\Page  $page
     * @return mixed
     */
    public function forceDelete(User $user, Page $page)
    {
        //
    }
}