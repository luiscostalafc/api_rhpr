<?php

namespace App\Observers\v0;

use App\Models\v0\EfetivoPracas;

class EfetivoPracasObserver
{
    /**
     * Handle the EfetivoPracas "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function retrieved(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function creating(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function created(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function updating(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function updated(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function saving(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function saved(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function deleting(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function deleted(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function restoring(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the EfetivoPracas "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function restored(EfetivoPracas $efetivoPracas)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\EfetivoPracas  $efetivoPracas
     * @return void
     */
    public function forceDeleted(EfetivoPracas $efetivoPracas)
    {
        //
    }
}

