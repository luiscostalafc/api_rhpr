<?php

namespace App\Observers\v0;

use App\Models\v0\Policial;

class PolicialObserver
{
    /**
     * Handle the Policial "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function retrieved(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function creating(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function created(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function updating(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function updated(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function saving(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function saved(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function deleting(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function deleted(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function restoring(Policial $policial)
    {
        //
    }

    /**
     * Handle the Policial "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function restored(Policial $policial)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\Policial  $policial
     * @return void
     */
    public function forceDeleted(Policial $policial)
    {
        //
    }
}

