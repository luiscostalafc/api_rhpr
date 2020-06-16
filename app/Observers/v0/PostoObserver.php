<?php

namespace App\Observers\v0;

use App\Models\v0\Posto;

class PostoObserver
{
    /**
     * Handle the Posto "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function retrieved(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function creating(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function created(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function updating(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function updated(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function saving(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function saved(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function deleting(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function deleted(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function restoring(Posto $posto)
    {
        //
    }

    /**
     * Handle the Posto "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function restored(Posto $posto)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\Posto  $posto
     * @return void
     */
    public function forceDeleted(Posto $posto)
    {
        //
    }
}
