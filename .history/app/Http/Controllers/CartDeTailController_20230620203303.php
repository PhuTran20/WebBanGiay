<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class CartDeTailController extends Controller
{
    public function index(){
        $product = DB::table('product')->join('size','size.id_product','=','product.id')->join('color','color.id_product','=','product.id')->get();
        // dd($product);
    }
}