<?php

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
	     $this->call(CatalogsTableSeeder::class);
	     $this->call(CategoriesTableSeeder::class);
         $this->call(LinksTableSeeder::class);
         $this->call(BannersTableSeeder::class);
         $this->call(SettingsTableSeeder::class);
         $this->call(seeder_users::class);
    }
}
