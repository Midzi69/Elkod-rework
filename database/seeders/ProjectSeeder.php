<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'name' => 'Sample Project 1',
            'description' => 'This is a sample project description.',
        ]);

        Project::create([
            'name' => 'Sample Project 2',
            'description' => 'This is another sample project description.',
        ]);
    }
}