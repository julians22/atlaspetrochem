<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About\AboutContent;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;

class AboutContentSeeder extends Seeder
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
        $about_contents = array(
                array(
                    "key" => "key-1",
                    "title" => "Sejarah Perusahaan",
                    "thumb_location" => NULL,
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis est laboriosam, non ipsam, praesentium provident nihil repudiandae temporibus eius ab dicta voluptates quidem eaque quia dolorum laudantium. Delectus, vero.",
                    "created_at" => "2021-04-05 17:10:41",
                    "updated_at" => "2021-04-05 17:10:42",
                    "thumb_text" => NULL,
                ),
                array(
                    "key" => "key-3",
                    "title" => "System Perusahaan",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis est laboriosam, non ipsam, praesentium provident nihil repudiandae temporibus eius ab dicta voluptates quidem eaque quia dolorum laudantium. Delectus, vero.",
                    "created_at" => "2021-04-05 17:20:01",
                    "updated_at" => "2021-04-05 17:20:02",
                ),
                array(
                    "key" => "key-2",
                    "title" => "Culture Perusahan",
                    "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis est laboriosam, non ipsam, praesentium provident nihil repudiandae temporibus eius ab dicta voluptates quidem eaque quia dolorum laudantium. Delectus, vero.",
                    "created_at" => "2021-04-05 17:30:59",
                    "updated_at" => "2021-04-05 17:30:59",
                ),
            );

            foreach ($about_contents as $about) {
                AboutContent::create($about);
            }

        $this->enableForeignKeys();
    }
}
