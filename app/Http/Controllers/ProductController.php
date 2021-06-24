<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'     => 'required',
            'price'     => 'required',
            'image'     => 'required',
            'display'   => 'required',

        ]);
        // dd($request->all());
        $product = new Product();


        $product->title = $request->title;

        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/vendor/images');
            $file->move($path, $filename);
            $product->image = 'assets/vendor/images/' . $filename;
        }

        $product->price = $request->price;
        $product->size = $request->size;
        $product->dispay = $request->display;
        $product->gps_cellular = $request->gps_cellelur;
        $product->ecg_measurer = $request->ecg_measurer;
        $product->blood_oxigen_measurer  = $request->blood_oxigen_measurer;
        $product->heart_rate_measurer = $request->heart_rate_measurer;
        $product->family_setup = $request->family_setup;
        $product->water_resistance = $request->water_resistance;

        
        $product->save();

        return redirect()->route('products.index')->with('message','Product Created Successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product){
            $product->delete();

            return redirect()->route('products.index')->with('message','Product Deleted Successfully');
        }
    }
}
