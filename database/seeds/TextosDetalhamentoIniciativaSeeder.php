<?php

use Illuminate\Database\Seeder;
use App\Models\TextosIniciativa;
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
        $id_texto_iniciativa_1 = TextosIniciativa::where('descritivo', 'Acelerar força de vendas')->first()->id;
        $id_texto_iniciativa_2 = TextosIniciativa::where('descritivo', 'Desfazer-se de ativos não core')->first()->id;
        $id_texto_iniciativa_3 = TextosIniciativa::where('descritivo', 'Fidelizar os clientes chave')->first()->id;
        $id_texto_iniciativa_4 = TextosIniciativa::where('descritivo', 'Fortalecer a organização e gestão')->first()->id;
        $id_texto_iniciativa_5 = TextosIniciativa::where('descritivo', 'Gerenciar custos e o fluxo de caixa')->first()->id;
        $id_texto_iniciativa_6 = TextosIniciativa::where('descritivo', 'Perseguir estratégias de M&A e parcerias')->first()->id;
        $id_texto_iniciativa_7 = TextosIniciativa::where('descritivo', 'Precificar para ganho de margem ou share')->first()->id;
        $id_texto_iniciativa_8 = TextosIniciativa::where('descritivo', 'Promover melhoria de desempenho')->first()->id;
        $id_texto_iniciativa_9 = TextosIniciativa::where('descritivo', 'Revisitar a estratégia: escolher onde e como vencer')->first()->id;

        // Gerenciar custos e o fluxo de caixa
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Planejamento de Caixa Futuro',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Análise do Ponto de Equilíbrio',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Aporte de Capital',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Empréstimos e Financiamentos',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Venda de Imobilizados',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Vendas à Vista / Prazos Reduzidos',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Juros Recebidos de Clientes',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Rendimento de Aplicações',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Processo de Cobrança otimizado',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Estoques Mínimos',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
            [
                'descritivo' => 'Prazos de Pagto. renegociados ',
                'texto_iniciativa_id' => $id_texto_iniciativa_5
            ],
        ]);

        // Desfazer-se de ativos não core
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Análise da Produtividade dos Ativos',
                'texto_iniciativa_id' => $id_texto_iniciativa_2
            ],
            [
                'descritivo' => 'Venda de Ativos não-core',
                'texto_iniciativa_id' => $id_texto_iniciativa_2
            ],
        ]);

        // Fidelizar os clientes chave
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Gestão de Contas-chave',
                'texto_iniciativa_id' => $id_texto_iniciativa_3
            ],
            [
                'descritivo' => 'Valor para o Cliente',
                'texto_iniciativa_id' => $id_texto_iniciativa_3
            ],
            [
                'descritivo' => 'Programas de Fidelização',
                'texto_iniciativa_id' => $id_texto_iniciativa_3
            ],
            [
                'descritivo' => 'Parcerias Estratégicas',
                'texto_iniciativa_id' => $id_texto_iniciativa_3
            ],
            [
                'descritivo' => 'Inovação',
                'texto_iniciativa_id' => $id_texto_iniciativa_3
            ],
        ]);

        // Fortalecer a organização e gestão
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Balanced Scorecard - BSC',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Desdobramento Metas do BSC',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Business Intelligence / Mgt. Cockpit',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Gestão por Processos',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Gestão de Projetos',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Governança Corporativa',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Gestão de Riscos do Negócio',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
            [
                'descritivo' => 'Gestão Orçamentária',
                'texto_iniciativa_id' => $id_texto_iniciativa_4
            ],
        ]);

        // Acelerar força de vendas
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Aumentar a Força de Vendas',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Desenvolver Novos Canais',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Exportar / Aumentar Exportação ',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Desenvolver Novos Produtos',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Explorar o E-Commerce ',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Explorar Novos Mercados/ Nichos',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Venda Direta',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
            [
                'descritivo' => 'Otimizar Processos de Venda',
                'texto_iniciativa_id' => $id_texto_iniciativa_1
            ],
        ]);

        // Perseguir estratégias de M&A e parcerias
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Alianças Complementares',
                'texto_iniciativa_id' => $id_texto_iniciativa_6
            ],
            [
                'descritivo' => 'Shared Services',
                'texto_iniciativa_id' => $id_texto_iniciativa_6
            ],
            [
                'descritivo' => 'Joint Venture',
                'texto_iniciativa_id' => $id_texto_iniciativa_6
            ],
            [
                'descritivo' => 'Aquisição / Fusão / Venda',
                'texto_iniciativa_id' => $id_texto_iniciativa_6
            ],
            [
                'descritivo' => 'Abertura de Capital ',
                'texto_iniciativa_id' => $id_texto_iniciativa_6
            ],
        ]);

        // Precificar para ganho de margem ou share
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Inteligência Competitiva',
                'texto_iniciativa_id' => $id_texto_iniciativa_7
            ],
            [
                'descritivo' => 'Posicionam. Produtos/Serviços',
                'texto_iniciativa_id' => $id_texto_iniciativa_7
            ],
            [
                'descritivo' => 'Processo de Precificação otimizado',
                'texto_iniciativa_id' => $id_texto_iniciativa_7
            ],
            [
                'descritivo' => 'Promoções eficazes',
                'texto_iniciativa_id' => $id_texto_iniciativa_7
            ],
        ]);

        // Promover melhoria de desempenho
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Processos Produtivos otimizados',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Red. do Custo da Não-Qualidade',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Engenharia e Análise do Valor',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Sistema de Custeio otimizado',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Gestão Eficaz dos Estoques',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Eficácia em Suprimentos',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Lean Manufacturing / 6 SIGMA',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Lean Office (Produt. Administrativa',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Custeio Baseado em Atividades',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Prazos de Pagamento renegociados',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Padronização da Engenharia',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Programas Participativos / CCQ',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Polivalência',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
            [
                'descritivo' => 'Downsizing / Red. da Estrutura',
                'texto_iniciativa_id' => $id_texto_iniciativa_8
            ],
        ]);

        // Revisitar a estratégia: escolher onde e como vencer
        TextosDetalhamentoIniciativa::insert([
            [
                'descritivo' => 'Revisão Estratégica / Redirec. Neg.',
                'texto_iniciativa_id' => $id_texto_iniciativa_9
            ],
            [
                'descritivo' => 'Downscoping/ Foco Estratégico',
                'texto_iniciativa_id' => $id_texto_iniciativa_9
            ],
        ]);
    }
}
