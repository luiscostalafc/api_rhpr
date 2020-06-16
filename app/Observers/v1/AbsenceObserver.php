<?php

namespace App\Observers\v1;

use App\Models\v1\Absence;

class AbsenceObserver
{
    /**
     * Handle the Absence "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function retrieved(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function creating(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function created(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function updating(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function updated(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function saving(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function saved(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function deleting(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function deleted(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function restoring(Absence $absence)
    {
        //
    }

    /**
     * Handle the Absence "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function restored(Absence $absence)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Absence  $absence
     * @return void
     */
    public function forceDeleted(Absence $absence)
    {
        //
    }
}
