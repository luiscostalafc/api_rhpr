<?php

namespace App\Observers\v0;

use App\Models\v0\DependentesInativo;

class DependentesInativoObserver
{
    /**
     * Handle the DependentesInativo "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function retrieved(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function creating(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function created(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function updating(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function updated(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function saving(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function saved(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function deleting(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function deleted(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function restoring(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the DependentesInativo "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function restored(DependentesInativo $dependentesInativo)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\DependentesInativo  $dependentesInativo
     * @return void
     */
    public function forceDeleted(DependentesInativo $dependentesInativo)
    {
        //
    }
}

