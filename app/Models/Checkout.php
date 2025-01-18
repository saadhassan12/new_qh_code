<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'email', 'first_name', 'last_name', 'address', 'city',
        'postal_code', 'phone', 'country', 'payment_method',
    ];
}
