<?php

namespace App\Observers\Admin;

use App\Models\Admin\User;

class UserObserver
{
    /**
     * Handle the Admin\User "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function retrieved(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function creating(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function updating(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function saving(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function saved(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function restoring(User $user)
    {
        //
    }

    /**
     * Handle the Admin\User "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
