<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory , Notifiable;
  
  // protected $fillable = ['name','description','file'];
  protected $fillable = ['name','product_code'];


}
