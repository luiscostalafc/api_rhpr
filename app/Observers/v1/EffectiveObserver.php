<?php

namespace App\Observers\v1;

use App\Models\v1\Effective;

class EffectiveObserver
{
    /**
     * Handle the Effective "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function retrieved(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function creating(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function created(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function updating(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function updated(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function saving(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function saved(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function deleting(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function deleted(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function restoring(Effective $effective)
    {
        //
    }

    /**
     * Handle the Effective "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function restored(Effective $effective)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Effective  $effective
     * @return void
     */
    public function forceDeleted(Effective $effective)
    {
        //
    }
}
