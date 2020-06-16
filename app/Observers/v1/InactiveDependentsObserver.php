<?php

namespace App\Observers\v1;

use App\Models\v1\InactiveDependents;

class InactiveDependentsObserver
{
    /**
     * Handle the InactiveDependents "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function retrieved(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function creating(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function created(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function updating(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function updated(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function saving(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function saved(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function deleting(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function deleted(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function restoring(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the InactiveDependents "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function restored(InactiveDependents $inactiveDependents)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\InactiveDependents  $inactiveDependents
     * @return void
     */
    public function forceDeleted(InactiveDependents $inactiveDependents)
    {
        //
    }
}
