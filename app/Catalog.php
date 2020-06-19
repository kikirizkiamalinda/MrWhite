<?php

namespace App;
use App\Category;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    protected $fillable = ['id', 'nama', 'barcode', 'harga', 'deskripsi', 'url_gambar'];
    public $timestamps = false;
    public function presentPrice(){
    	return number_format($this->harga, 0, '', '.');
    }

	use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'catalogs.nama' => 10,
            'catalogs.deskripsi' => 10,
            'categories.jenis' => 10,
            'categories.name' => 10,
        ],
        'joins' => [
            'catalog_category' => ['catalog_category.catalog_id','catalogs.id'],
            'categories' => ['categories.id','catalog_category.category_id'],
        ],
    ];



  public function links(){
    return $this->hasMany(Link::class);
  }
  public function categories(){
    return $this->belongsToMany(Category::class);
  }
  public function cata_cate(){
    return $this->belongsToMany(cata_cate::class);
  }
}
