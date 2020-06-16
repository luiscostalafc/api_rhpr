<?php

namespace App\Observers\v0;

use App\Models\v0\DependentesAtiva;

class DependentesAtivaObserver
{
    /**
     * Handle the DependentesAtiva "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function retrieved(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function creating(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function created(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function updating(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function updated(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function saving(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function saved(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function deleting(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function deleted(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function restoring(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the DependentesAtiva "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function restored(DependentesAtiva $dependentesAtiva)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\DependentesAtiva  $dependentesAtiva
     * @return void
     */
    public function forceDeleted(DependentesAtiva $dependentesAtiva)
    {
        //
    }
}
