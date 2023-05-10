<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estoques')->insert([
            [
            'nome' => 'Bermuda',
            'quantidade' => 30,
            ],
            [
            'nome' => 'Camiseta',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Bola de Volei',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Bola de Fut',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Monitor',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Mouse',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Xablau',
            'quantidade' => 50,
            ],
            [
            'nome' => 'Xablu',
            'quantidade' => 80,
            ],
            [
            'nome' => 'Aipim',
            'quantidade' => 15,
            ],
            [
            'nome' => 'Moletom',
            'quantidade' => 10,
            ],
            [
            'nome' => 'Tênis',
            'quantidade' => 20,
            ],
           ]);
    }
}
