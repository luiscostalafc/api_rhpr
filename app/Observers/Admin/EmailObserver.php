<?php

namespace App\Observers\Admin;

use App\Models\Admin\Email;

class EmailObserver
{
    /**
     * Handle the Admin\Email "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function retrieved(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function creating(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function created(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function updating(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function updated(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function saving(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function saved(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function deleting(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function deleted(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function restoring(Email $email)
    {
        //
    }

    /**
     * Handle the Admin\Email "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function restored(Email $email)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\Email  $email
     * @return void
     */
    public function forceDeleted(Email $email)
    {
        //
    }
}
