<?php

namespace Database\Seeders;

use App\Models\Career;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CareerTableSeeder extends Seeder
{

    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        $faker = Faker::create();

        for ($i=0; $i < 4; $i++) {
            Career::create([
                'position' => $faker->jobTitle,
                'job_desk' => $faker->sentence(50),
                'requirements' => $faker->realText(),
                'active' => true
            ]);
        }

        $this->enableForeignKeys();
    }
}
