<?php

use App\Models\Articles\Galery;
use App\Models\Articles\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'failed_jobs',
            'ledgers',
            'jobs',
            'sessions',
            'news',
            'galeries',
            'careers'
        ]);

        $news = factory(News::class, 5)->create();
        $galeries= factory(Galery::class, 6)->create();

        $this->call(CareerTableSeeder::class);

        // $this->call(AuthTableSeeder::class);

        Model::reguard();
    }
}
