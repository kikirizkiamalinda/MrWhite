<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
			['jenis'=> 'perawatan','name'=> 'Hair', 'parent_id'=> '0',],
            ['jenis'=> 'perawatan', 'name'=> 'Face', 'parent_id'=> '0',],
            ['jenis'=> 'brand','name'=> 'baxter','parent_id'=> '1',],
            ['jenis'=> 'brand','name'=> 'american crew','parent_id'=> '1',],
            ['jenis'=> 'brand','name'=> 'layrite','parent_id'=> '1',],
            ['jenis'=> 'bahan','name'=> 'waterbased','parent_id'=> '1',],
            ['jenis'=> 'bahan','name'=> 'wax','parent_id'=> '1',],
            ['jenis'=> 'bahan','name'=> 'oilbased','parent_id'=> '1',],
            ['jenis'=> 'brand','name'=> 'nivea','parent_id'=> '2',],
            ['jenis'=> 'brand','name'=> 'gillette','parent_id'=> '2',],
            ['jenis'=> 'brand','name'=> 'edge','parent_id'=> '2',],
            ['jenis'=> 'brand','name'=> 'garnier','parent_id'=> '2',],
            ['jenis'=> 'bahan','name'=> 'soap','parent_id'=> '2',],
            ['jenis'=> 'bahan','name'=> 'lotion','parent_id'=> '2',],
            ['jenis'=> 'bahan','name'=> 'oil','parent_id'=> '2',],
            ['jenis'=> 'bahan','name'=> 'gel','parent_id'=> '2',],
            ['jenis'=> 'bahan','name'=> 'foam','parent_id'=> '2',],
        ]);
    }
}
