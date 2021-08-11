<?php

namespace Database\Seeders;

use App\Models\MainCategory;
use Illuminate\Database\Seeder;

class MainCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MainCategory::create([
            'name' => 'Automotive Products'
        ]);
        MainCategory::create([
            'name' => 'Industrial Products'
        ]);
    }
}
