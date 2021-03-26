<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ComponentType;

class ComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComponentType::create([
            'name' => 'layout',
        ]);
        ComponentType::create([
            'name' => 'playground',
        ]);
        ComponentType::create([
            'name' => 'tool',
        ]);
        ComponentType::create([
            'name' => 'component',
        ]);
        ComponentType::create([
            'name' => 'pestroutes',
        ]);

    }
}
