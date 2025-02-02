<?php

namespace App\Models;



use Flasher\Prime\Storage\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'quantity', 'description', 'specifications_type', 'cap_type','ip_address'];
}
