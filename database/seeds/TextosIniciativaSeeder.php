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
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_6,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
            ],
            [
                'descritivo' => 'Gerenciar custos e o fluxo de caixa',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '1',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
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
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
            ],
            [
                'descritivo' => 'Promover melhoria de desempenho',
                'descritivo_pai' => 'Reduzir custos e investimentos',
                'numero' => '2',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
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
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Acelerar força de vendas',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '3',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
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
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Precificar para ganho de margem ou share',
                'descritivo_pai' => 'Aumentar receitas e margens',
                'numero' => '4',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
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
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_6,
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_1,
            ],
            [
                'descritivo' => 'Revisitar a estratégia: escolher onde e como vencer',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '5',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
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
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_1,
            ],
            [
                'descritivo' => 'Fidelizar os clientes chave',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '6',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
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
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_5,
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Fortalecer a organização e gestão',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '7',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_4,
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
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_1,
            ],
            [
                'descritivo' => 'Desfazer-se de ativos não core',
                'descritivo_pai' => 'Realocar recursos para as atividades core',
                'numero' => '8',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_2,
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
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_8,
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '3',
                'textos_cubos_id' => $id_cubo_6,
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '1',
                'textos_cubos_id' => $id_cubo_3,
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '2',
                'textos_cubos_id' => $id_cubo_4,
            ],
            [
                'descritivo' => 'Perseguir estratégias de M&A e parcerias',
                'descritivo_pai' => 'Preparar movimentos arrojados',
                'numero' => '9',
                'prioridade' => '3',
                'textos_cubos_id' => $id_cubo_2,
            ],
        ]);
    }
}
