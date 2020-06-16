<?php

namespace App\Observers\v1;

use App\Models\v1\OpmMeta4;

class OpmMeta4Observer
{
    /**
     * Handle the OpmMeta4 "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function retrieved(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function creating(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function created(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function updating(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function updated(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function saving(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function saved(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function deleting(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function deleted(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function restoring(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the OpmMeta4 "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function restored(OpmMeta4 $opmMeta4)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\OpmMeta4  $opmMeta4
     * @return void
     */
    public function forceDeleted(OpmMeta4 $opmMeta4)
    {
        //
    }
}
