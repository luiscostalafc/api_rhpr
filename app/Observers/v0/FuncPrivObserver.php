<?php

namespace App\Observers\v0;

use App\Models\v0\FuncPriv;

class FuncPrivObserver
{
    /**
     * Handle the FuncPriv "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function retrieved(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function creating(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function created(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function updating(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function updated(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function saving(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function saved(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function deleting(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function deleted(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function restoring(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the FuncPriv "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function restored(FuncPriv $funcPriv)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\FuncPriv  $funcPriv
     * @return void
     */
    public function forceDeleted(FuncPriv $funcPriv)
    {
        //
    }
}
