<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login',['as' =>'login','uses'=>'Admin\AuthController@login']);
Route::group(['middleware' => 'jwt.verify','prefix' =>'v0'],function(){
    Route::group(['as'=>'ausencia.','prefix' =>'ausencia'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\AusenciaController@search','middleware' => ['permission:show-absense']]);
    });
    Route::group(['as'=>'dependentes_ativa.','prefix' =>'dependentes_ativa'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\DependentesAtivaController@search','middleware' => ['permission:show-active-dependents']]);
    });
    Route::group(['as'=>'dependentes_inativo.','prefix' =>'dependentes_inativo'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\DependentesInativoController@search','middleware' => ['permission:show-inactive-dependents']]);
    });
    Route::group(['as'=>'efetivo_pmpr.','prefix' =>'efetivo_pmpr'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\EfetivoPmprController@search','middleware' => ['permission:show-effective']]);
    });
    Route::group(['as'=>'efetivo_pracas.','prefix' =>'efetivo_pracas'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\EfetivoPracasController@search','middleware' => ['permission:show-efective-graduates']]);
    });
    Route::group(['as'=>'funcoes_privativas.','prefix' =>'funcoes_privativas'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\FuncoesPrivativasController@search','middleware' => ['permission:show-private-function']]); 
    });
    Route::group(['as'=>'func_priv.','prefix' =>'func_priv'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\FuncPrivController@search','middleware' => ['permission:show-private-functions-period']]);
    });
    Route::group(['as'=>'inativos.','prefix' =>'inativos'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\InativoController@search','middleware' => ['permission:show-inactive']]);
    });
    Route::group(['as'=>'opm_imp_meta4.','prefix' =>'opm_imp_meta4'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\OpmImpMeta4Controller@search','middleware' => ['permission:show-opm-meta4']]);
    });
    Route::group(['as'=>'policial.','prefix' =>'policial'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PolicialController@search','middleware' => ['permission:show-cops']]); 
    });
    Route::group(['as'=>'policial_historico.','prefix' =>'policial_historico'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PolicialHistoricoController@search','middleware' => ['permission:show-historical-police']]);
    });
    Route::group(['as'=>'reserva.','prefix' =>'reserva'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\ReservaController@search','middleware' => ['permission:show-reservation']]);
    });
    Route::group(['as'=>'opm_pmpr.','prefix' =>'opm_pmpr'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\OpmPmprController@search','middleware' => ['permission:show-opm']]);
    });
    Route::group(['as'=>'pm_cm.','prefix' =>'pm_cm'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PmCmController@search','middleware' => ['permission:show-full-cops']]);
    });
    Route::group(['as'=>'posto.','prefix' =>'posto'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v0\PostoController@search','middleware' => ['permission:show-position']]);
    });
});
Route::group(['middleware' => 'jwt.verify','prefix' =>'v1'],function(){
    Route::group(['as'=>'absence.','prefix' =>'absence'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\AbsenceController@search','middleware' => ['permission:show-absense']]);
    });
    Route::group(['as'=>'active_dependents.','prefix' =>'active_dependents'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\ActiveDependentsController@search','middleware' => ['permission:show-active-dependents']]);
    });
    Route::group(['as'=>'inactive_dependents.','prefix' =>'inactive_dependents'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\InactiveDependentsController@search','middleware' => ['permission:show-inactive-dependents']]);
    });
    Route::group(['as'=>'effective.','prefix' =>'effective'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\EffectiveController@search','middleware' => ['permission:show-effective']]);
    });
    Route::group(['as'=>'effective_graduates.','prefix' =>'effective_graduates'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\EffectiveGraduatesController@search','middleware' => ['permission:show-efective-graduates']]);
    });
    Route::group(['as'=>'private_functions.','prefix' =>'private_functions'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PrivateFunctionController@search','middleware' => ['permission:show-private-function']]);
    });
    Route::group(['as'=>'private_function_periods.','prefix' =>'private_function_periods'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PrivateFunctionPeriodController@search','middleware' => ['permission:show-private-functions-period']]);
    });
    Route::group(['as'=>'inactive.','prefix' =>'inactive'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\InactiveController@search','middleware' => ['permission:show-inactive']]);
    });
    Route::group(['as'=>'opm_meta4.','prefix' =>'opm_meta4'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\OpmMeta4Controller@search','middleware' => ['permission:show-opm-meta4']]);
    });
    Route::group(['as'=>'cops.','prefix' =>'cops'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\CopsController@search','middleware' => ['permission:show-cops']]);
    });
    Route::group(['as'=>'historical_police.','prefix' =>'historical_police'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\HistoricalPoliceController@search','middleware' => ['permission:show-historical-police']]);
    });
    Route::group(['as'=>'reservations.','prefix' =>'reservations'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\ReservationController@search','middleware' => ['permission:show-reservation']]);
    });
    Route::group(['as'=>'opm.','prefix' =>'opm'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\OpmController@search','middleware' => ['permission:show-opm']]);
    });
    Route::group(['as'=>'full_cops.','prefix' =>'full_cops'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\FullCopsController@search','middleware' => ['permission:show-full-cops']]);
    });
    Route::group(['as'=>'positions.','prefix' =>'positions'],function(){
        Route::match(['get', 'post'],'',['as' =>'search','uses'=>'v1\PositionController@search','middleware' => ['permission:show-position']]);
    });
});
Route::group(['middleware' => 'jwt.verify','prefix' =>'admin'],function(){
    Route::group(['as'=>'email.','prefix' =>'email'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\EmailController@index','middleware' => ['permission:show-email']]);
        Route::post('',['as' =>'store','uses'=>'Admin\EmailController@store','middleware' => ['permission:create-email']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\EmailController@show','middleware' => ['permission:show-email']]);
        Route::put('/{id}',['as' =>'update','uses'=>'Admin\EmailController@update','middleware' => ['permission:edit-email']]);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'Admin\EmailController@destroy','middleware' => ['permission:delete-email']]);
    });
    Route::group(['as'=>'log.','prefix' =>'log'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\LogController@index','middleware' => ['permission:show-log']]);
        Route::post('',['as' =>'store','uses'=>'Admin\LogController@store','middleware' => ['permission:create-log']]);
        Route::get('/{key}/{value}',['as' =>'show','uses'=>'Admin\LogController@getByPair','middleware' => ['permission:show-log']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\LogController@show','middleware' => ['permission:show-log']]);
    });
    Route::group(['as'=>'permission.','prefix' =>'permission'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\PermissionController@index','middleware' => ['permission:show-permission']]);
        Route::post('',['as' =>'store','uses'=>'Admin\PermissionController@store','middleware' => ['permission:create-permission']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\PermissionController@show','middleware' => ['permission:show-permission']]);
        Route::put('/{id}',['as' =>'update','uses'=>'Admin\PermissionController@update','middleware' => ['permission:edit-permission']]);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'Admin\PermissionController@destroy','middleware' => ['permission:delete-permission']]);
    });
    Route::group(['as'=>'phone.','prefix' =>'phone'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\PhoneController@index','middleware' => ['permission:show-phone']]);
        Route::post('',['as' =>'store','uses'=>'Admin\PhoneController@store','middleware' => ['permission:create-phone']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\PhoneController@show','middleware' => ['permission:show-phone']]);
        Route::put('/{id}',['as' =>'update','uses'=>'Admin\PhoneController@update','middleware' => ['permission:edit-phone']]);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'Admin\PhoneController@destroy','middleware' => ['permission:delete-phone']]);
    });
    Route::group(['as'=>'system.','prefix' =>'system'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\SystemController@index','middleware' => ['permission:show-system']]);
        Route::post('',['as' =>'store','uses'=>'Admin\SystemController@store','middleware' => ['permission:create-system']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\SystemController@show','middleware' => ['permission:show-system']]);
        Route::put('/{id}',['as' =>'update','uses'=>'Admin\SystemController@update','middleware' => ['permission:edit-system']]);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'Admin\SystemController@destroy','middleware' => ['permission:delete-system']]);
    });
    Route::group(['as'=>'user.','prefix' =>'user'],function(){
        Route::get('',['as' =>'index','uses'=>'Admin\UserController@index','middleware' => ['permission:show-user']]);
        Route::post('',['as' =>'store','uses'=>'Admin\UserController@store','middleware' => ['permission:create-user']]);
        Route::get('/{id}',['as' =>'show','uses'=>'Admin\UserController@show','middleware' => ['permission:show-user']]);
        Route::put('/{id}',['as' =>'update','uses'=>'Admin\UserController@update','middleware' => ['permission:edit-user']]);
        Route::delete('/{id}',['as' =>'destroy','uses'=>'Admin\UserController@destroy','middleware' => ['permission:delete-user']]);
        Route::delete('/{id}/restore',['as' =>'destroy','uses'=>'Admin\UserController@destroy','middleware' => ['permission:restore-user']]);
        Route::delete('/{id}/forcedelete',['as' =>'destroy','uses'=>'Admin\UserController@destroy','middleware' => ['permission:forcedelete-user']]);
    });
});