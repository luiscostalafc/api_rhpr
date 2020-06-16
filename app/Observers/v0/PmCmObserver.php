<?php

namespace App\Observers\v0;

use App\Models\v0\PmCm;

class PmCmObserver
{
    /**
     * Handle the PmCm "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function retrieved(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function creating(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function created(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function updating(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function updated(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function saving(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function saved(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function deleting(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function deleted(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function restoring(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the PmCm "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function restored(PmCm $pmCm)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\PmCm  $pmCm
     * @return void
     */
    public function forceDeleted(PmCm $pmCm)
    {
        //
    }
}

