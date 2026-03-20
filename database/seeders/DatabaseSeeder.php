<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        
        Produto::create(['nome' => 'Produto1', 'preco' => 10.1]);
        Produto::create(['nome' => 'Produto1', 'preco' => 20.2]);
        Produto::create(['nome' => 'Produto1', 'preco' => 30.2]);

        Empresa::create(['cnpj' => 123, 'nome' => 'Empresa 1', 'tamanho' => 'pequena']);
        Empresa::create(['cnpj' => 456, 'nome' => 'Empresa 2', 'tamanho' => 'média']);
        Empresa::create(['cnpj' => 789, 'nome' => 'Empresa 3', 'tamanho' => 'grande']);
    }
}
