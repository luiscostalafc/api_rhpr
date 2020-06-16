<?php

namespace App\Observers\v0;

use App\Models\v0\FuncoesPrivativas;

class FuncoesPrivativasObserver
{
    /**
     * Handle the FuncoesPrivativas "retrieved" event.
     * after a record has been retrieved
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function retrieved(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "creating" event.
     * before a record has been created
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function creating(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "created" event.
     * after a record has been created
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function created(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "updating" event.
     * before a record is updated
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function updating(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "updated" event.
     * after a record has been updated.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function updated(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "saving" event.
     * before a record is saved (either created or updated)
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function saving(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "saved" event.
     * after a record has been saved (either created or updated).
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function saved(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "deleting" event.
     * before a record is deleted or soft-deleted.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function deleting(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "deleted" event.
     * after a record has been deleted or soft-deleted.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function deleted(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "restoring" event.
     * before a soft-deleted record is going to be restored.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function restoring(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the FuncoesPrivativas "restored" event.
     * after a soft-deleted record has been restored.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function restored(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\v0\FuncoesPrivativas  $funcoesPrivativas
     * @return void
     */
    public function forceDeleted(FuncoesPrivativas $funcoesPrivativas)
    {
        //
    }
}
