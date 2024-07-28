<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{

    public function run()
    {
        Project::factory(9)->count(9)->create([
            'image' => 'https://www.shanti.cz/Shanti/media/static-media/9b6523ce-6ccc-437c-8428-bc4b0921ae24@w1920.webp', // Default image path
        ]);
    }
}
