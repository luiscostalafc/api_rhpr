<?php

namespace App\Observers\v1;

use App\Models\v1\Reservation;

class ReservationObserver
{
    /**
     * Handle the Reservation "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function retrieved(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function creating(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function created(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function updating(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function updated(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function saving(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function saved(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function deleting(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function deleted(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function restoring(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the Reservation "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function restored(Reservation $Reservation)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v1\Reservation  $Reservation
     * @return void
     */
    public function forceDeleted(Reservation $Reservation)
    {
        //
    }
}
