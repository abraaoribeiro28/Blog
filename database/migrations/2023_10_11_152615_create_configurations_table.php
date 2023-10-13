<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('value')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        // Inforações
        DB::table('configurations')->insert([
            'key' => 'titulo',
            'title' => 'Título do site',
            'description' => 'Especifique o título do seu site.',
            'value' => 'Site exemplo'
        ]);

        DB::table('configurations')->insert([
            'key' => 'descricao',
            'title' => 'Descrição do site',
            'description' => 'Especifique uma descrição para seu site.',
            'value' => 'Descrição de exemplo'
        ]);

        DB::table('configurations')->insert([
            'key' => 'copyright',
            'title' => 'Direitos autorais do site (Copyright)',
            'description' => 'Informações de direitos autorais do seu site.',
            'value' => 'Copyright © 2023 Eu te entendo, eu te quero vivo(a). Todos os direitos reservados.'
        ]);

        DB::table('configurations')->insert([
            'key' => 'email',
            'title' => 'E-mail',
            'description' => 'E-mail para contato.',
            'value' => 'contato@exemplo.com'
        ]);

        DB::table('configurations')->insert([
            'key' => 'telefone',
            'title' => 'Telefone',
            'description' => 'Telefone para contato.',
        ]);

        // SEO //
        DB::table('configurations')->insert([
            'key' => 'incorporacao_cabecalho',
            'title' => 'Incorporação de cabeçalho',
            'description' => 'Adiocione o código de incorporação do cabeçalho (header).',
        ]);

        DB::table('configurations')->insert([
            'key' => 'incorporacao_rodape',
            'title' => 'Incorporação de rodapé',
            'description' => 'Adiocione o código de incorporação do rodapé (footer).',
        ]);

        // Imagens //
        DB::table('configurations')->insert([
            'key' => 'logo',
            'title' => 'Logo',
            'description' => 'Tamanho ideal: 130x40.',
            'value' => 'assets/images/logo.jpg'
        ]);

        DB::table('configurations')->insert([
            'key' => 'favicon',
            'title' => 'Favicon',
            'description' => 'Tamanho ideal: Tamanho ideal: 128x128.',
            'value' => 'assets/images/logo.jpg'
        ]);

        DB::table('configurations')->insert([
            'key' => 'logo_radape',
            'title' => 'Logo Rodapé',
            'description' => 'Tamanho ideal: 130x40.',
            'value' => 'assets/images/logo.jpg'
        ]);

        // Opções
        DB::table('configurations')->insert([
            'key' => 'manutencao',
            'title' => 'Modo de manutenção',
            'description' => 'Ative para tornar o site offline para os visitantes.',
            'value' => false,
        ]);

        DB::table('configurations')->insert([
            'key' => 'exibir_versao',
            'title' => 'Exibir número da versão do site',
            'description' => 'Ative para exibir a versão do site no rodapé.',
            'value' => true,
        ]);

        // Cores
        DB::table('configurations')->insert([
            'key' => 'cor_principal',
            'title' => 'Cor Principal',
            'description' => 'Cor predominante do site, exemplo: cabeçalho e rodapé.',
            'value' => '#000C31'
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_titulos',
            'title' => 'Cor dos títulos',
            'description' => 'Cor dos títulos das seções do site.',
            'value' => '#000C31'
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_botoes',
            'title' => 'Cor dos botões',
            'description' => 'Cor dos botões do site.',
            'value' => '#000C31'
        ]);

        DB::table('configurations')->insert([
            'key' => 'cor_fundo',
            'title' => 'Cor de fundos de títulos',
            'description' => 'Cor de fundo de títulos do site.',
            'value' => '#B4D6ED'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
