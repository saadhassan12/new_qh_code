<?php

use App\Models\ProductType;
use Illuminate\Support\Facades\View;

if (!function_exists('getProductName')) {
    function getProductName($product_id): string
    {
        return match ($product_id) {
            1 => 'Active',
            2 => 'Terminated',
            3 => 'Resigned',
            4 => 'Suspend',
            default => 'Employee Status'
        };
    }
}

if (!function_exists('getConsumerTypeProducts')) {
    function getProductTypes($productTypes)
    {
  

        return ProductType::where('product_category_id', $productTypes)->get();
    }
}
