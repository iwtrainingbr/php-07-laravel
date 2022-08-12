<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run()
    {
        Type::create([
            'name' => 'Tantrica',
            'description' => 'A massagem tântrica é uma modalidade de massagem que tem como objetivo redistribuir as energias sexuais do corpo, expandindo a sensibilidade e proporcionado vivências mais intensas.',
        ]);

        Type::create([
            'name' => '4 mãos',
            'description' => 'A massagem a 4 mãos é realizada por duas atendentes simultaneamente, aplicada nos lados direito e esquerdo do corpo, proporcionando ao paciente duplo relaxamento..',
        ]);

        Type::create([
            'name' => 'Nuru',
            'description' => 'A massagem Nuru, também conhecida como massagem corpo-a-corpo é uma massagem muito sensual e o seu principal objetivo é proporcionar o relaxamento',
        ]);
    } //run
} //classe