<?php
use App\Link;
use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Link::insert([
        	[
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/kamera/baterai/on444-jual-battery-canon-lp-e6?from=&product_owner=normal_seller',
                'catalog_id'=>'1'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/hair-care/jl8v3h-jual-american-crew-fiber-85g-3oz-pomade-terlaris?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=american%20crew',
                'catalog_id'=>'2'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-tubuh-2311/perawatan-rambut-pria/hg9u3-jual-layrite-original-pomade?from=omnisearch&search_source=omnisearch_product&source=navbar',
                'catalog_id'=>'3'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-tubuh-2311/perawatan-rambut-pria/jnw806-jual-toar-roby-pomade-heavy-duty-3-5-oz-free-sisir-unbreakable?from=&product_owner=normal_seller',
                'catalog_id'=>'4'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/hair-care/jxafsk-jual-gillette-shaving-foam-krim-cukur-gillette-195-gr-promo?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=gillette%20shaving',
                'catalog_id'=>'5'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-wanita/hftl40-jual-masker-lumpur-naturgo-no-box-1-pcs?dtm_campaign=fvt_product&dtm_section=detail-2&dtm_source=product_detail&from=&keyword=',
                'catalog_id'=>'6'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/pembersih-wajah-pria/jrtp9q-jual-nivea-man-100ml?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=nivea%20man%20',
                'catalog_id'=>'7'
            ],
            [
                'tag'=> 'bukalapak',
                'link'=> 'https://www.bukalapak.com/p/perawatan-kecantikan/perawatan-wajah/masker-wajah-pria/flz46j-jual-garnier-man-turbo-light-50ml?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=garnier%20man%20turbo%20light',
                'id_catalog'=>'8'
            ]
        ]);
    }
}
