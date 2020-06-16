<?php

namespace App\Observers\v1;

use App\Models\v1\Opm;

class OpmObserver
{
    /**
     * Handle the Opm "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function retrieved(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function creating(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function created(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function updating(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function updated(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function saving(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function saved(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function deleting(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function deleted(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function restoring(Opm $opm)
    {
        //
    }

    /**
     * Handle the Opm "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function restored(Opm $opm)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Opm  $opm
     * @return void
     */
    public function forceDeleted(Opm $opm)
    {
        //
    }
}
