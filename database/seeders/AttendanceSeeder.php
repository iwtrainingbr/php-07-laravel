<?php

namespace Database\Seeders;

use App\Models\Attendance;
use App\Models\Type;
use DateInterval;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');

        $type1 = Type::create([
            'name' => 'Relaxante',
            'description' => 'Relaxante',
        ]);

        $type2 = Type::create([
            'name' => 'Final feliz',
            'description' => 'Relaxante também',
        ]);
        
        for ($i = 1; $i <= 10; $i++) {
            Attendance::create([
                'id_type' => $i % 2 === 0 ? $type1->id : $type2->id,
                'begin_hour' => $faker->datetime->format('Y-m-d H:i'),
                'begin_end' => $faker->datetime->format('Y-m-d H:i'),
                'price' => $faker->randomNumber(3, true),
                'attendant' => $faker->name,
                'customer' => $faker->name,
                'description' => $faker->sentence(),
            ]);
        } //for
    } //run
} //classe