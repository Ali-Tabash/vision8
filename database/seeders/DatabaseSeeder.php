<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ali;
use App\Models\tag;
use App\Models\post;
use App\Models\student;
use App\Models\subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        post::truncate();
        tag::truncate();
        subject::truncate();
        post::factory(60)->create();
        tag::factory(50)->create();
        subject::factory(20)->create();

        //  الي عملتو لبوست وانشا 10000 قيمة(factory)معنى الكلام انو روح على

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
