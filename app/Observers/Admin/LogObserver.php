<?php

namespace App\Observers\Admin;

use App\Models\Admin\Log;

class LogObserver
{
    /**
     * Handle the Admin\Log "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function retrieved(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function creating(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function created(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function updating(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function updated(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function saving(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function saved(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function deleting(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function deleted(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function restoring(Log $log)
    {
        //
    }

    /**
     * Handle the Admin\Log "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function restored(Log $log)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\Log  $log
     * @return void
     */
    public function forceDeleted(Log $log)
    {
        //
    }
}
