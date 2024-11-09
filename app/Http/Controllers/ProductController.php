<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    //show all products
    function productList(){

        $search = request()->query('search');
        $query = Product::query();

         if($search){
             $query->where("product_id","like","%".$search."%")->orWhere("description","like","%".$search."%");
        }

         $products = $query->paginate(10);
        return view('page.index',compact('products','search'));
    }



 //create product
    public function create(Request $request){

        return view('page.create');
    }



//store product on database table
    public function store(Request $request){
        $request->validate([
            'product_id'=>'required|unique:products',
            'name'=>'required',
            'price'=>'required',
        ]);


        $image = $request->file('image');
        $imageName = time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        Product::create([
            'product_id'=>$request->input('product_id'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'stock'=>$request->input('stock'),
            'image'=>$imageName
        ]);
        return redirect()->route('input.route')->with('success','Product created successfully');
    }



    //edit page

    function edit(Request $request){

        $get = Product::findOrFail($request->id);

        return view('page.edit',['data'=>$get]);
    }




    //This function or update data

    public function updateData(Request $request,$id){

        $update = Product::findOrFail($id);

   $request->validate([
        //  'product_id'=>'required|unique:products,product_id,'.$update->id,
            'product_id' => 'required|unique:products,product_id,'.$id,
            'name'=>'required',
            'price'=>'required',
        ]);

       $update->update([
               'product_id'=>$request->input('product_id'),
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                 'price'=>$request->input('price'),
                 'stock'=>$request->input('stock'),
       ]);


        return redirect()->route('product.route')->with('update','Product updated successfully');

    }



    //Delete data from products table

        public function destroy($id)
        {
            $item = Product::findOrFail($id); //
            $item->delete(); //

            return redirect()->back()->with('delete', 'Item deleted successfully');
        }


}
