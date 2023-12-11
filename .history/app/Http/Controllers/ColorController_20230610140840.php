<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    public function create()
    {
        $Product= Product::all();
        
        return view('admin.color.addColor',compact('Product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =array();
        $data['id_color']=$request->id_color; 
        $data['name_color']=$request->name_color;
        $data['id_product']=$request->id_product;    
           
        DB::table('color')->insert($data);
  
        return redirect('/admin/color/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Size = Size::join('product','product.id','=','size.id_product')
        ->select(
            'product.*',
            'size.*',
        )
        ->get();
        
        return view('admin.size.index',['Size'=>$Size]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $Product= Product::all();
        $Size=Size::find($id);
        return view('admin.size.edit',['data'=>$Size],compact('Product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_size =array();
        $data_size['number_size']=$request->number_size;
        $data_size['id_product']=$request->id_product;
        DB::table('size')->where('id_size',$request->id_size)->update($data_size);
        return Redirect('/admin/size/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Size = Size::find($id);
        $Size->delete();
        return redirect('/admin/size/');
    }
}