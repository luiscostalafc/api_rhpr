<?php

namespace App\Observers\v1;

use App\Models\v1\Position;

class PositionObserver
{
    /**
     * Handle the Position "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function retrieved(Position $position)
    {
        //
    }

    /**
     * Handle the Position "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function creating(Position $position)
    {
        //
    }

    /**
     * Handle the Position "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function created(Position $position)
    {
        //
    }

    /**
     * Handle the Position "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function updating(Position $position)
    {
        //
    }

    /**
     * Handle the Position "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function updated(Position $position)
    {
        //
    }

    /**
     * Handle the Position "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function saving(Position $position)
    {
        //
    }

    /**
     * Handle the Position "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function saved(Position $position)
    {
        //
    }

    /**
     * Handle the Position "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function deleting(Position $position)
    {
        //
    }

    /**
     * Handle the Position "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function deleted(Position $position)
    {
        //
    }

    /**
     * Handle the Position "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function restoring(Position $position)
    {
        //
    }

    /**
     * Handle the Position "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function restored(Position $position)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Position  $position
     * @return void
     */
    public function forceDeleted(Position $position)
    {
        //
    }
}
