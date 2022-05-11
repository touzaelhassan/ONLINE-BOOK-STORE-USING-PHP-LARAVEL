<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create(['name' => 'كريم ناجي']);
        Author::create(['name' => 'إبراهيم دارس']);
        Author::create(['name' => 'كريم أحمد']);
        Author::create(['name' => 'سفيان مادر']);
        Author::create(['name' => 'ياسين ويسر']);
        Author::create(['name' => 'أمين يسار']);
    }
}
