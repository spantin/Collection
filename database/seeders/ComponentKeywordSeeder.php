<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Component;
use App\Models\ComponentKeyword;

class ComponentKeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ComponentKeyword::create([
            'component_id' => Component::where('name', 'Responsive Design Common Break Points')->value('id'),
            'word' => 'responsive'
        ]);
        ComponentKeyword::create([
            'component_id' => Component::where('name', 'Responsive Design Common Break Points')->value('id'),
            'word' => 'mobile'
        ]);
        ComponentKeyword::create([
            'component_id' => Component::where('name', 'Responsive Design Common Break Points')->value('id'),
            'word' => 'media'
        ]);
    }
}
