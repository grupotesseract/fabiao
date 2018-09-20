<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(TextosSeeder::class);
        $this->call(TextosIniciativaSeeder::class);
        $this->call(TextosDetalhamentoIniciativaSeeder::class);
    }
}
