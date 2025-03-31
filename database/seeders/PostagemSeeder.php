<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'categoria_id' => 1,
            'titulo' => 'Postagem 1',
            'descricao' => 'Descricao da postagem 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 2,
            'titulo' => 'Postagem 2',
            'descricao' => 'Descricao da postagem 2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('postagens')->insert([
            'categoria_id' => 3,
            'titulo' => 'Postagem 3',
            'descricao' => 'Descricao da postagem 3',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
