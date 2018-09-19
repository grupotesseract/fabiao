<?php

use Illuminate\Database\Seeder;
use App\Models\TextoEntrada;
use App\Models\TextoExposicaoACrise;
use App\Models\TextoPosicaoFinanceira;
use App\Models\TextoPosicionamentoEstrategico;
use App\Models\TextosCubo;
use App\Models\TextosIniciativa;
use App\Models\TextosDetalhamentoIniciativa;

class TextosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TextoEntrada::create([
            'cabecalho' => 'Descubra através de uma rapida análise, em apenas 3 perguntas, qual o posicionamento estratégico da sua empresa e o momento em que ela se encontra',
            'rodape' => 'Após este estudo voce poderá conhecer as ações e iniciativas específicas e recomendadas para cada ponto estratégico.',
        ]);

        TextoExposicaoACrise::create([
            'texto_pergunta' => 'Considerando o Setor de atuação da sua empresa, qual o grau de exposição dela frente a crises?',
            'texto_resposta_1' => 'Maior',
            'texto_resposta_2' => 'Menor',
            'descritivo_resposta_1' => 'A definir',
            'descritivo_resposta_2' => 'A definir'
        ]);

        TextoPosicaoFinanceira::create([
            'texto_pergunta' => 'Qual a situação financeira da sua Empresa?',
            'texto_resposta_1' => 'Forte',
            'texto_resposta_2' => 'Fraca',
            'descritivo_resposta_1' => 'A definir',
            'descritivo_resposta_2' => 'A definir'
        ]);

        TextoPosicionamentoEstrategico::create([
            'texto_pergunta' => 'Como você considera o posicionamento estratégico da sua empresa no mercado ?',
            'texto_resposta_1' => 'Forte',
            'texto_resposta_2' => 'Fraco',
            'descritivo_resposta_1' => 'A definir',
            'descritivo_resposta_2' => 'A definir'
        ]);

        TextosCubo::create([
            [
                'descritivo' => 'Reabastecer o tanque',
                'resposta_ec' => 'Maior',
                'resposta_pe' => 'Forte',
                'resposta_pf' => 'Fraca',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'S.O.S',
                'resposta_ec' => 'Maior',
                'resposta_pe' => 'Fraco',
                'resposta_pf' => 'Fraca',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Ampliar liderança',
                'resposta_ec' => 'Maior',
                'resposta_pe' => 'Forte',
                'resposta_pf' => 'Forte',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Atravessar com cuidado',
                'resposta_ec' => 'Maior',
                'resposta_pe' => 'Fraco',
                'resposta_pf' => 'Forte',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Livrar-se do peso extra',
                'resposta_ec' => 'Menor',
                'resposta_pe' => 'Forte',
                'resposta_pf' => 'Fraca',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Reencontrar o foco',
                'resposta_ec' => 'Menor',
                'resposta_pe' => 'Fraco',
                'resposta_pf' => 'Fraca',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Seguir em velocidade máxima',
                'resposta_ec' => 'Menor',
                'resposta_pe' => 'Forte',
                'resposta_pf' => 'Forte',
                'valor_compra' => '9'
            ],
            [
                'descritivo' => 'Ultrapassar os tímidos',
                'resposta_ec' => 'Menor',
                'resposta_pe' => 'Fraco',
                'resposta_pf' => 'Forte',
                'valor_compra' => '9'
            ],
        ]);

        /* TextosIniciativa::create([]); */

        /* TextosDetalhamentoIniciativa::create([]); */
    }
}
