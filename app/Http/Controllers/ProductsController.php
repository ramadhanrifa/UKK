<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request\UploadedFile;


class ProductsController extends Controller
{
    public function index(){
        $products = products::orderBy('created_at', 'desc')->get();
        return view('admin.product.Product', 
        ['products' => $products]);
    }

    public function create(){
        return view('admin.product.addProduct');
    }

    public function store(Request $request)
    {
       $validator = [
           'name' => 'required',
           'price' => 'required',
           'stock' => 'required',
           'image' => 'required'
       ];
       $validate = Validator::make($request->all(), $validator);


       if ($validate->fails()){
           return redirect()->back()->withErrors($validate)->withInput();
       }

       $product = products::create([
           'name' => $request->name,
           'price' => $request->price,
           'stock' => $request->stock,
           'image' => $request->image
       ]);

          if ($request->image != ""){

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;
            $image->move( public_path('/uploads'), $imageName);

            $product->image=$imageName;
            $product->save();
          }

        return redirect()->route('product.index')->with("success", "Product created successfully");
    }

    public function edit($id){
        $product = products::find($id);
        return view('admin.editproduct', ['products' => $product]);
    }

    public function update(Request $request, $id){  
        $validator = [
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required'
        ];

        if($validate = Validator::make($request->all(), $validator)){
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $product = products::find($id);

        if ($request->image != ""){

            // delete image
            File::delete(public_path('uploads/'.$product->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtenstsion();
            $imageName = time().'.'.$ext;
            $image->move(public_path('uploads'), $imageName);

            $product->image=$imageName;
            $product->save();

        }

        Products::where('id', $id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->route('product.index')->with("success", "Product updated successfully");
    }

    public function destroy($id){
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function updateStock($id, Request $request)
    {   
        $product = products::findOrFail($id);

        $validate = [
            'stock' => 'required',
        ];

        $validator = Validator::make($request->all(), $validate);
        
        products::where("id", $id)->update([
            'stock' => $request->stock,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image
        ]);
        return redirect()->route('product.index');
    }

    public function search(Request $request){
        $search = $request->search;
        $products = products::where('name', 'like', '%' . $search . '%')->get();
        return view('admin.product.Product', ['products' => $products]);
    }



}
