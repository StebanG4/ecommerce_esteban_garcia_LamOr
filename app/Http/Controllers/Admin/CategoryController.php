<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
        return view ('admin.allcategory');
    }
    
    public function AddCategory(){
        return view ('admin.addcategory');
    }
}
