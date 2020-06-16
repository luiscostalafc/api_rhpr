<?php

namespace App\Observers\v0;

use App\Models\v0\PolicialHistorico;

class PolicialHistoricoObserver
{
    /**
     * Handle the PolicialHistorico "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function retrieved(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function creating(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function created(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function updating(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function updated(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function saving(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function saved(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function deleting(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function deleted(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function restoring(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the PolicialHistorico "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function restored(PolicialHistorico $policialHistorico)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\PolicialHistorico  $policialHistorico
     * @return void
     */
    public function forceDeleted(PolicialHistorico $policialHistorico)
    {
        //
    }
}

