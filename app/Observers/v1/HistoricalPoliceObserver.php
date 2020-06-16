<?php

namespace App\Observers\v1;

use App\Models\v1\HistoricalPolice;

class HistoricalPoliceObserver
{
    /**
     * Handle the HistoricalPolice "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function retrieved(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function creating(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function created(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function updating(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function updated(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function saving(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function saved(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function deleting(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function deleted(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function restoring(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the HistoricalPolice "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function restored(HistoricalPolice $historicalPolice)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\HistoricalPolice  $historicalPolice
     * @return void
     */
    public function forceDeleted(HistoricalPolice $historicalPolice)
    {
        //
    }
}
