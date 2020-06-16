<?php

namespace App\Observers\v1;

use App\Models\v1\Cops;

class CopsObserver
{
    /**
     * Handle the Cops "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function retrieved(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function creating(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function created(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function updating(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function updated(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function saving(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function saved(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function deleting(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function deleted(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function restoring(Cops $cops)
    {
        //
    }

    /**
     * Handle the Cops "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function restored(Cops $cops)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Cops  $cops
     * @return void
     */
    public function forceDeleted(Cops $cops)
    {
        //
    }
}
