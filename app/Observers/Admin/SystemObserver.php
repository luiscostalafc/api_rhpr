<?php

namespace App\Observers\Admin;

use App\Models\Admin\System;

class SystemObserver
{
    /**
     * Handle the Admin\System "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function retrieved(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function creating(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function created(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function updating(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function updated(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function saving(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function saved(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function deleting(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function deleted(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function restoring(System $system)
    {
        //
    }

    /**
     * Handle the Admin\System "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function restored(System $system)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\System  $system
     * @return void
     */
    public function forceDeleted(System $system)
    {
        //
    }
}
