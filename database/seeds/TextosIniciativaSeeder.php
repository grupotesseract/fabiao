<?php

use Illuminate\Database\Seeder;
use App\Models\TextosCubo;
use App\Models\TextosIniciativa;

class TextosIniciativaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_cubo_1 = TextosCubo::where('descritivo', 'Reabastecer o tanque')->first()->id;
        $id_cubo_2 = TextosCubo::where('descritivo', 'S.O.S')->first()->id;
        $id_cubo_3 = TextosCubo::where('descritivo', 'Ampliar liderança')->first()->id;
        $id_cubo_4 = TextosCubo::where('descritivo', 'Atravessar com cuidado')->first()->id;
        $id_cubo_5 = TextosCubo::where('descritivo', 'Livrar-se do peso extra')->first()->id;
        $id_cubo_6 = TextosCubo::where('descritivo', 'Reencontrar o foco')->first()->id;
        $id_cubo_7 = TextosCubo::where('descritivo', 'Seguir em velocidade máxima')->first()->id;
        $id_cubo_8 = TextosCubo::where('descritivo', 'Ultrapassar os tímidos')->first()->id;

        // Gerenciar custo/fluxo de caixa
        TextosIniciativa::insert([
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_6,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
                'path_pdf' => '',
            ],
        ]);

        // Promover melhoria de desempenho
        TextosIniciativa::insert([
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
                'path_pdf' => '',
            ],
        ]);

        // Acelerar força de vendas
        TextosIniciativa::insert([
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
        ]);

        // Precificar para ganho de margem ou share
        TextosIniciativa::insert([
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
        ]);

        // Revisitar a estratégia: escolher onde e como vencer 
        TextosIniciativa::insert([
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_1,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
        ]);

        // Fidelizar os clientes chave 
        TextosIniciativa::insert([
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_1,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
        ]);

        // Fortalecer a organização e gestão 
        TextosIniciativa::insert([
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
        ]);

        // Desfazer-se de ativos não core 
        TextosIniciativa::insert([
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
                'path_pdf' => '',
            ],
        ]);

        // Perseguir estratégias de M&A e parcerias
        TextosIniciativa::insert([
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_7,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '3',
                'textos_cubos_id' => $id_cubo_6,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
                'path_pdf' => '',
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '3',
                'textos_cubos_id' => $id_cubo_2,
                'path_pdf' => '',
            ],
        ]);
    }
}
