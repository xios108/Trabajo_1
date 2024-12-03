<?php

namespace App\services;
use App\Models\categories;

class CategoryService
{
    public function getcategory()
    {
        return categories::all();
    }
}
?>