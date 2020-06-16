<?php

namespace App\Observers\v1;

use App\Models\v1\FullCops;

class FullCopsObserver
{
    /**
     * Handle the FullCops "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function retrieved(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function creating(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function created(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function updating(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function updated(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function saving(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function saved(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function deleting(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function deleted(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function restoring(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the FullCops "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function restored(FullCops $fullCops)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\FullCops  $fullCops
     * @return void
     */
    public function forceDeleted(FullCops $fullCops)
    {
        //
    }
}
