<?php

use Illuminate\Database\Seeder;
use App\Models\Conta;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Conta::create([
            'cpf' => '12345678910',
            'nome' => 'Conta 1',
            'saldo' => 0
        ]);

        Conta::create([
            'cpf' => '10987654321',
            'nome' => 'Conta 2',
            'saldo' => 0
        ]);
    }
}
