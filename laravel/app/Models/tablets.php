<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tablets extends Model
{
    use HasFactory;
    protected $fillable= ['namePicture','sizePicture','type','size','color','price','description'];
    //edame compare
    public function scopePriceMatches($query, $price)
    {
        return $query->where('price', $price);
    }
}
