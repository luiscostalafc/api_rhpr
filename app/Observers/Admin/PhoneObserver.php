<?php

namespace App\Observers\Admin;

use App\Models\Admin\Phone;

class PhoneObserver
{
    /**
     * Handle the Admin\Phone "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function retrieved(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function creating(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function created(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function updating(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function updated(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function saving(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function saved(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function deleting(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function deleted(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function restoring(Phone $phone)
    {
        //
    }

    /**
     * Handle the Admin\Phone "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function restored(Phone $phone)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\Phone  $phone
     * @return void
     */
    public function forceDeleted(Phone $phone)
    {
        //
    }
}
