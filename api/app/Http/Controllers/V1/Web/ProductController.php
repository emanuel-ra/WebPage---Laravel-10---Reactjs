<?php

namespace App\Http\Controllers\V1\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function Get()
    {        
        $query = Products::query();

        $query = $query->where('disabled',0);    
        
        $query->with('brand', function($query){ $query->select(['id','name']); });
        $query->with('categories', function($query){ $query->select(['categories.name']); });

        $lst = $query->paginate(20); 
        
        return Response()->json($lst,200);
    }
}
