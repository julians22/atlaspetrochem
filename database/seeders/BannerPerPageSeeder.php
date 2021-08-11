<?php

namespace Database\Seeders;

use App\Models\BannerPerPage;
use Illuminate\Database\Seeder;

class BannerPerPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BannerPerPage::create([
        //     'key' => 'about-banner',
        // ]);
        // BannerPerPage::create([
        //     'key' => 'news-banner',
        // ]);
        // BannerPerPage::create([
        //     'key' => 'news-show-banner',
        // ]);
        // BannerPerPage::create([
        //     'key' => 'galery-banner',
        // ]);
        // BannerPerPage::create([
        //     'key' => 'careers-banner',
        // ]);
        // BannerPerPage::create([
        //     'key' => 'careers-show-banner',
        // ]);

        BannerPerPage::create([
            'key' => 'category-product-banner',
        ]);
    }
}
