<?php

namespace App\Http\Controllers;

use App\Products_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products_model::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
        $this->validate($request, [
            'pro_name' => 'required',
            'pro_code' => 'required',
            'pro_price' => 'required',
            'pro_info' => 'required',
            'spl_price' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        $image = $request->image;
        if ($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('images', $imageName);
            $formInput['image'] = $imageName;
        }
        Products_model::create($formInput);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */


    public function destroy($id)
    {
        $product = Products_model::findOrFail($id);

        if (file_exists('images/' . $product->image)) {
            unlink('images/' . $product->image);

        }
        $product->delete();

        return back();


    }

}
