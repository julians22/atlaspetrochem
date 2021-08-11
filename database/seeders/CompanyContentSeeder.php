<?php

namespace Database\Seeders;

use App\Models\Company\CompanyContent;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Seeder;

class CompanyContentSeeder extends Seeder
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

        $company_contents = array(
            array(
                "id" => 1,
                "key" => "vision",
                "type" => "text",
                "value" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, incidunt dolores laboriosam nostrum voluptates vel, iusto eveniet sequi modi hic autem, earum recusandae. Officia, quibusdam?",
                "created_at" => "2021-04-05 13:25:32",
                "updated_at" => "2021-04-05 13:25:32",
            ),
            array(
                "id" => 2,
                "key" => "mission",
                "type" => "text",
                "value" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, incidunt dolores laboriosam nostrum voluptates vel, iusto eveniet sequi modi hic autem, earum recusandae. Officia, quibusdam?",
                "created_at" => "2021-04-05 14:38:26",
                "updated_at" => "2021-04-05 14:38:27",
            ),
            array(
                "id" => 3,
                "key" => "workplace",
                "type" => "array-text",
                "value" => "[\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.\",\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.\",\"Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quam inventore illum illo quidem? Vero saepe distinctio quia? Harum, quisquam.\"]",
                "created_at" => "2021-04-05 14:47:02",
                "updated_at" => "2021-04-05 14:47:02",
            ),
            array(
                "id" => 4,
                "key" => "brand",
                "type" => "text",
                "value" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum esse atque officiis dolor id ut perspiciatis earum hic, dolorum tenetur rerum sequi laudantium ipsum facilis, asperiores porro beatae consequuntur doloribus deleniti quaerat. Tempore quaerat unde nemo ab, optio rem nisi.",
                "created_at" => "2021-04-05 15:01:09",
                "updated_at" => "2021-04-05 15:01:11",
            ),
        );

        foreach ($company_contents as $company) {
            CompanyContent::create($company);
        }

        $this->enableForeignKeys();

    }
}
