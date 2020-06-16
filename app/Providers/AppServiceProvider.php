<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\v0\Ausencia;
use App\Observers\v0\AusenciaObserver;
use App\Models\v0\DependentesAtiva;
use App\Observers\v0\DependentesAtivaObserver;
use App\Models\v0\DependentesInativo;
use App\Observers\v0\DependentesInativoObserver;
use App\Models\v0\EfetivoPmpr;
use App\Observers\v0\EfetivoPmprObserver;
use App\Models\v0\EfetivoPracas;
use App\Observers\v0\EfetivoPracasObserver;
use App\Models\v0\FuncoesPrivativas;
use App\Observers\v0\FuncoesPrivativasObserver;
use App\Models\v0\FuncPriv;
use App\Observers\v0\FuncPrivObserver;
use App\Models\v0\Inativo;
use App\Observers\v0\InativoObserver;
use App\Models\v0\OpmImpMeta4;
use App\Observers\v0\OpmImpMeta4Observer;
use App\Models\v0\OpmPmpr;
use App\Observers\v0\OpmPmprObserver;
use App\Models\v0\PmCm;
use App\Observers\v0\PmCmObserver;
use App\Models\v0\PolicialHistorico;
use App\Observers\v0\PolicialHistoricoObserver;
use App\Models\v0\Policial;
use App\Observers\v0\PolicialObserver;
use App\Models\v0\Posto;
use App\Observers\v0\PostoObserver;
use App\Models\v0\Reserva;
use App\Observers\v0\ReservaObserver;

use App\Models\v1\Absence;
use App\Observers\v1\AbsenceObserver;
use App\Models\v1\ActiveDependents;
use App\Observers\v1\ActiveDependentsObserver;
use App\Models\v1\Cops;
use App\Observers\v1\CopsObserver;
use App\Models\v1\EffectiveGraduates;
use App\Observers\v1\EffectiveGraduatesObserver;
use App\Models\v1\Effective;
use App\Observers\v1\EffectiveObserver;
use App\Models\v1\FullCops;
use App\Observers\v1\FullCopsObserver;
use App\Models\v1\HistoricalPolice;
use App\Observers\v1\HistoricalPoliceObserver;
use App\Models\v1\InactiveDependents;
use App\Observers\v1\InactiveDependentsObserver;
use App\Models\v1\Inactive;
use App\Observers\v1\InactiveObserver;
use App\Models\v1\OpmMeta4;
use App\Observers\v1\OpmMeta4Observer;
use App\Models\v1\Opm;
use App\Observers\v1\OpmObserver;
use App\Models\v1\Position;
use App\Observers\v1\PositionObserver;
use App\Models\v1\PrivateFunction;
use App\Observers\v1\PrivateFunctionObserver;
use App\Models\v1\PrivateFunctionPeriod;
use App\Observers\v1\PrivateFunctionPeriodObserver;
use App\Models\v1\Reservation;
use App\Observers\v1\ReservationObserver;

use App\Models\Admin\Email;
use App\Observers\Admin\EmailObserver;
// use App\Models\Admin\Log;
// use App\Observers\Admin\LogObserver;
use App\Models\Admin\Permission;
use App\Observers\Admin\PermissionObserver;
use App\Models\Admin\Phone;
use App\Observers\Admin\PhoneObserver;
// use App\Models\Admin\User;
// use App\Observers\Admin\UserObserver;
use App\Models\Admin\System;
use App\Observers\Admin\SystemObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Ausencia::observe(AusenciaObserver::class);
        DependentesAtiva::observe(DependentesAtivaObserver::class);
        DependentesInativo::observe(DependentesInativoObserver::class);
        EfetivoPmpr::observe(EfetivoPmprObserver::class);
        EfetivoPracas::observe(EfetivoPracasObserver::class);
        FuncoesPrivativas::observe(FuncoesPrivativasObserver::class);
        FuncPriv::observe(FuncPrivObserver::class);
        Inativo::observe(InativoObserver::class);
        OpmImpMeta4::observe(OpmImpMeta4Observer::class);
        OpmPmpr::observe(OpmPmprObserver::class);
        PmCm::observe(PmCmObserver::class);
        PolicialHistorico::observe(PolicialHistoricoObserver::class);
        Policial::observe(PolicialObserver::class);
        Posto::observe(PostoObserver::class);
        Reserva::observe(ReservaObserver::class);

        Absence::observe(AbsenceObserver::class);
        ActiveDependents::observe(ActiveDependentsObserver::class);
        Cops::observe(CopsObserver::class);
        EffectiveGraduates::observe(EffectiveGraduatesObserver::class);
        Effective::observe(EffectiveObserver::class);
        FullCops::observe(FullCopsObserver::class);
        HistoricalPolice::observe(HistoricalPoliceObserver::class);
        InactiveDependents::observe(InactiveDependentsObserver::class);
        Inactive::observe(InactiveObserver::class);
        OpmMeta4::observe(OpmMeta4Observer::class);
        Opm::observe(OpmObserver::class);
        Position::observe(PositionObserver::class);
        PrivateFunction::observe(PrivateFunctionObserver::class);
        PrivateFunctionPeriod::observe(PrivateFunctionPeriodObserver::class);
        Reservation::observe(ReservationObserver::class);

        Email::observe(EmailObserver::class);
        // Log::observe(LogObserver::class);
        Permission::observe(PermissionObserver::class);
        Phone::observe(PhoneObserver::class);
        // User::observe(UserObserver::class);
        System::observe(SystemObserver::class);
    }
}
