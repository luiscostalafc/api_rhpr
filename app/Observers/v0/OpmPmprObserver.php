<?php

namespace App\Observers\v0;

use App\Models\v0\OpmPmpr;

class OpmPmprObserver
{
    /**
     * Handle the OpmPmpr "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function retrieved(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function creating(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function created(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function updating(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function updated(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function saving(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function saved(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function deleting(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function deleted(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function restoring(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the OpmPmpr "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function restored(OpmPmpr $opmPmpr)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\OpmPmpr  $opmPmpr
     * @return void
     */
    public function forceDeleted(OpmPmpr $opmPmpr)
    {
        //
    }
}

