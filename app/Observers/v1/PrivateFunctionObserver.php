<?php

namespace App\Observers\v1;

use App\Models\v1\PrivateFunction;

class PrivateFunctionObserver
{
    /**
     * Handle the PrivateFunction "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function retrieved(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function creating(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function created(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function updating(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function updated(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function saving(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function saved(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function deleting(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function deleted(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function restoring(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the PrivateFunction "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function restored(PrivateFunction $PrivateFunction)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\PrivateFunction  $PrivateFunction
     * @return void
     */
    public function forceDeleted(PrivateFunction $PrivateFunction)
    {
        //
    }
}
