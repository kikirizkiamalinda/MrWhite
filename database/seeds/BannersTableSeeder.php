<?php
use \App\Banner;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::insert([
        [
			'name'=> 'giveaway',
            'url_gambar'=> 'ca1.jpg',
			'url_link'=> 'https://www.bukalapak.com/u/aghesu/products?blca=SENBR-INDSA&gclid=CjwKCAjwg_fZBRAoEiwAppvp-RC9RghUaVn8YuxPEkvsulPd5A8q8qRmN58dgDMaMZTkGX7FJChgbRoCoOUQAvD_BwE&gclsrc=aw.ds',
			'date_show'=> '2018-07-02',
			'date_off'=> '2018-07-04',
		],
		
        ]);
    }
} 
