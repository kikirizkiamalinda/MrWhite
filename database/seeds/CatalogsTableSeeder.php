<?php

use \App\Catalog;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Catalog::insert([
            [
                'nama'=> 'baxter pomade',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'baxter.jpg'
            ],
            [
                'nama'=> 'american crew pomade',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'crew.jpeg'
            ],
            [
                'nama'=> 'layrite pomade',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'layrite.jpg'
            ],
            [
                'nama'=> 'toar roby pomade',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'oilbased.jpg'
            ],
            [
                'nama'=> 'gillette shaving gel',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'shave.jpg'
            ],
            [
                'nama'=> 'edge shaving gel',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'shave2.jpg'
            ],
            [
                'nama'=> 'nivea man facial foam',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'foam.jpg'
            ],
            [
                'nama'=> 'garnier man turbolight',
                'barcode'=> rand(1111,4444),
                'harga'=>rand(30000, 300000),
                'deskripsi'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                'url_gambar'=> 'moisturiser.jpg'
            ],
        ]);
        $product = Catalog::find(1);
        $product->categories()->attach(1);
        $product->categories()->attach(3);
        $product->categories()->attach(6);

        $product = Catalog::find(2);
        $product->categories()->attach(1);
        $product->categories()->attach(4);
        $product->categories()->attach(7);

        $product = Catalog::find(3);
        $product->categories()->attach(1);
        $product->categories()->attach(5);
        $product->categories()->attach(7);

        $product = Catalog::find(4);
        $product->categories()->attach(1);
        $product->categories()->attach(5);
        $product->categories()->attach(8);

        $product = Catalog::find(5);
        $product->categories()->attach(2);
        $product->categories()->attach(10);
        $product->categories()->attach(16);

        $product = Catalog::find(6);
        $product->categories()->attach(2);
        $product->categories()->attach(11);
        $product->categories()->attach(16);

        $product = Catalog::find(7);
        $product->categories()->attach(2);
        $product->categories()->attach(9);
        $product->categories()->attach(17);

        $product = Catalog::find(8);
        $product->categories()->attach(2);
        $product->categories()->attach(12);
        $product->categories()->attach(13);
    }
}
