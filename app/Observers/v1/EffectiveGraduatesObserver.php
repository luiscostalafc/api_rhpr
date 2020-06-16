<?php

namespace App\Observers\v1;

use App\Models\v1\EffectiveGraduates;

class EffectiveGraduatesObserver
{
    /**
     * Handle the EffectiveGraduates "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function retrieved(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function creating(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function created(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function updating(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function updated(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function saving(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function saved(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function deleting(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function deleted(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function restoring(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the EffectiveGraduates "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function restored(EffectiveGraduates $effectiveGraduates)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\EffectiveGraduates  $effectiveGraduates
     * @return void
     */
    public function forceDeleted(EffectiveGraduates $effectiveGraduates)
    {
        //
    }
}
