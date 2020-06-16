<?php

namespace App\Observers\v1;

use App\Models\v1\PrivateFunctionPeriod;

class PrivateFunctionPeriodObserver
{
    /**
     * Handle the PrivateFunctionPeriod "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function retrieved(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function creating(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function created(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function updating(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function updated(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function saving(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function saved(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function deleting(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function deleted(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function restoring(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the PrivateFunctionPeriod "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function restored(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\PrivateFunctionPeriod  $PrivateFunctionPeriod
     * @return void
     */
    public function forceDeleted(PrivateFunctionPeriod $PrivateFunctionPeriod)
    {
        //
    }
}
