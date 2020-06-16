<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AusenciaTableSeeder::class,
            DependentesAtivaTableSeeder::class,
            DependentesInativoTableSeeder::class,
            EfetivoPmprTableSeeder::class,
            EfetivoPracasTableSeeder::class,
            FuncoesPrivativasTableSeeder::class,
            FuncPrivTableSeeder::class,
            InativoTableSeeder::class,
            OpmPmprTableSeeder::class,
            OpmImpMeta4TableSeeder::class,
            PolicialTableSeeder::class,
            PmCmTableSeeder::class,
            PolicialHistoricoTableSeeder::class,
            PostoTableSeeder::class,
            ReservaTableSeeder::class,
            SystemTableSeeder::class,
            LogTableSeeder::class,
            PermissionTableSeeder::class,
            UserTableSeeder::class,
            PhoneTableSeeder::class,
            EmailTableSeeder::class,
        ]);
    }
}
