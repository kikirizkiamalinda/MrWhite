<?php

use \App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
        	[
			'jenis'=> 'category',
			'isi'=> 'category-list',
            'position'=>'1'
        	],
        	[
			'jenis'=> 'brand',
			'isi'=> 'brand-category',
            'position'=>'2'
        	],
        	[
			'jenis'=> 'sale',
			'isi'=> 'sale-product',
            'position'=>'3'
        	],
        	[
			'jenis'=> 'banner',
			'isi'=> 'banner',
            'position'=>'4'
        	],
        	[
			'jenis'=> 'catalog',
			'isi'=> 'product-catalog',
            'position'=>'5'
        	],
        ]);
    }
}
