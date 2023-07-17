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
        $lst = Products::where('disabled',0)->get();

        return Response()->json(['data'=>$lst],200);
    }
}
