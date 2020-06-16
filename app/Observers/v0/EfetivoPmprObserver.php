<?php

namespace App\Observers\v0;

use App\Models\v0\EfetivoPmpr;

class EfetivoPmprObserver
{
    /**
     * Handle the EfetivoPmpr "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function retrieved(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function creating(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function created(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function updating(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function updated(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function saving(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function saved(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function deleting(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function deleted(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function restoring(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the EfetivoPmpr "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function restored(EfetivoPmpr $efetivoPmpr)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\EfetivoPmpr  $efetivoPmpr
     * @return void
     */
    public function forceDeleted(EfetivoPmpr $efetivoPmpr)
    {
        //
    }
}


