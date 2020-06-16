<?php

namespace App\Observers\v1;

use App\Models\v1\ActiveDependents;

class ActiveDependentsObserver
{
    /**
     * Handle the ActiveDependents "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function retrieved(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function creating(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function created(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function updating(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function updated(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function saving(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function saved(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function deleting(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function deleted(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function restoring(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the ActiveDependents "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function restored(ActiveDependents $activeDependents)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\ActiveDependents  $activeDependents
     * @return void
     */
    public function forceDeleted(ActiveDependents $activeDependents)
    {
        //
    }
}
