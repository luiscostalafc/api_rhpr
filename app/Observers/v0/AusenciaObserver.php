<?php

namespace App\Observers\v0;

use App\Models\v0\Ausencia;

class AusenciaObserver
{
    /**
     * Handle the Ausencia "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function retrieved(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function creating(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function created(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function updating(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function updated(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function saving(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function saved(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function deleting(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function deleted(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function restoring(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the Ausencia "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function restored(Ausencia $ausencia)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\Ausencia  $ausencia
     * @return void
     */
    public function forceDeleted(Ausencia $ausencia)
    {
        //
    }
}

