<?php

use App\Models\Articles\Galery;
use App\Models\Articles\News;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Product;
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
            // 'banner_per_pages',
            // 'news',
            // 'galeries',
            // 'careers',
            // 'faqs',
            // 'categories',
            // 'products',
            // 'about_contents',
            // 'company_contents',
            // 'web_settings'
        ]);

        // $news = factory(News::class, 5)->create();
        // $galeries= factory(Galery::class, 6)->create();

        // $faqs = factory(Faq::class, 8)->create();

        // $categoryIndustrial = factory(Category::class, 4)
        //                         ->create()
        //                         ->each(function ($category)
        //                         {
        //                             $category->products()->createMany(
        //                                 factory(Product::class, 4)->make()->toArray()
        //                             );
        //                         });

        // $this->call(CareerTableSeeder::class);
        // $this->call(AboutContentSeeder::class);
        // $this->call(CompanyContentSeeder::class);
        // $this->call(WebSettingSeeder::class);

        // $this->call(AuthTableSeeder::class);

        // $this->call(MainCategorySeeder::class);

        $this->call(BannerPerPageSeeder::class);

        Model::reguard();
    }
}
