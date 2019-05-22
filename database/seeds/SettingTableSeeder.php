<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            App\Setting::create([


            'site_name'=>'book_store',
            'contact_number'=>'123456789',
            'contact_email'=>'bookstore@info.com',
            'address'=>'cairo',

        ]);
    }
}
