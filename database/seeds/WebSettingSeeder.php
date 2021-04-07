<?php

use App\Models\WebSetting;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $website_settings = [
            [
                'config' => 'head office',
                'type' => 'address',
                'value' => 'Jl. Danau Indah Raya No.5 Blok C2 RT.12/RW.13, Sunter Jaya, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14360'
            ],
            [
                'config' => 'mobile phone',
                'type' => 'phone',
                'value' => '+6221 220 650 68'
            ],
            [
                'config' => 'phone',
                'type' => 'phone',
                'value' => '+6221 220 650 68'
            ],
            [
                'config' => 'whatsapp url',
                'type' => 'url',
                'value' => 'www.web.whatsapp.com'
            ],
            [
                'config' => 'helpdesk email',
                'type' => 'email',
                'value' => 'helpdesk@atlaspetrochem.com'
            ],
            [
                'config' => 'marketplace blibli',
                'type' => 'url',
                'value' => 'www.blibli.com'
            ],
            [
                'config' => 'marketplace lazada',
                'type' => 'url',
                'value' => 'www.lazada.com'
            ]
        ];

        foreach ($website_settings as $setting) {
            WebSetting::create($setting);
        }
    }
}
