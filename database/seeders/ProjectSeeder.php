<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = 
        [
            [
                'title'=> 'Progetto n1',
                'description'=>'Il mio progetto numero 1 è molto bello'

            ],
            [
                'title'=> 'Progetto n2',
                'description'=>'Il mio progetto numero 2 è molto bello'
            ],
            [
                'title'=> 'Progetto n3',
                'description'=>'Il mio progetto numero 3 è molto bello'
            ]

        ];

        foreach ($projects as $project) {
            $new_project = new Project();

            $new_project->title = $project['title'];
            $new_project->description = $project['description'];

            $new_project->save();

        }
    }
}
