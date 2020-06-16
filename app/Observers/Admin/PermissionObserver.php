<?php

namespace App\Observers\Admin;

use App\Models\Admin\Permission;

class PermissionObserver
{
    /**
     * Handle the Admin\Permission "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function retrieved(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function creating(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "created" event.
     * after a record has been created
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function created(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function updating(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function updated(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function saving(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function saved(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function deleting(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function deleted(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function restoring(Permission $permission)
    {
        //
    }

    /**
     * Handle the Admin\Permission "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function restored(Permission $permission)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Admin\Permission  $permission
     * @return void
     */
    public function forceDeleted(Permission $permission)
    {
        //
    }
}
