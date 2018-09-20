<?php

use Illuminate\Database\Seeder;
use App\Models\TextosDetalhamentoIniciativa;

class TextosDetalhamentoIniciativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TextosDetalhamentoIniciativa::create([
            'descritivo' => '',
            'texto_iniciativa_id' => ''
        ]);
    }
}
