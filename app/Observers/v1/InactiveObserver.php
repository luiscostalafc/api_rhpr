<?php

namespace App\Observers\v1;

use App\Models\v1\Inactive;

class InactiveObserver
{
    /**
     * Handle the Inactive "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function retrieved(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function creating(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function created(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function updating(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function updated(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function saving(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function saved(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function deleting(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function deleted(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function restoring(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the Inactive "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function restored(Inactive $inactive)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Inactive  $inactive
     * @return void
     */
    public function forceDeleted(Inactive $inactive)
    {
        //
    }
}
