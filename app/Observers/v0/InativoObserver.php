<?php

namespace App\Observers\v0;

use App\Models\v0\Inativo;

class InativoObserver
{
    /**
     * Handle the Inativo "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function retrieved(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function creating(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function created(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function updating(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function updated(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function saving(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function saved(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function deleting(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function deleted(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function restoring(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the Inativo "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function restored(Inativo $inativo)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\Inativo  $inativo
     * @return void
     */
    public function forceDeleted(Inativo $inativo)
    {
        //
    }
}


