<?php

use Illuminate\Database\Events\StatementPrepared;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable(['rol','permiso']);
        $this->call(table_rol_seeder::class);
        $this->call(TablaPermisoSeeder::class);
        // $this->call(UserSeeder::class);
    }
    protected function truncateTable(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
