<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
class Products extends Model
{
    use HasFactory;


    protected $table = 'products';

    protected $guarded = [
        // 'category_id',
        // 'name',
        // 'price',
        // 'slug'
      
    ];
  
       public function category(){
        return $this->belongsTo(Categories::class, 'category_id', 'id');
       }

}
