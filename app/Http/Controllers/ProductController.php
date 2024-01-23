<?php

namespace App\Http\Controllers;

use App\Bundle;
use App\Category;
use App\Product;
use App\Supplier;
use App\Damage;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Image;
use File;
// use Illuminate\Contracts\Session\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::where('is_deleted', 0)->with('category')->latest()->get();
        $products = Product::join('suppliers', 'products.supplier_id', 'suppliers.id')
            ->select('products.*', 'suppliers.name as supplier')
            ->where('products.is_deleted', 0)
            ->with('category')
            // ->latest()
            ->get();
        return view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.create', ['categories' => $categories, 'suppliers' => $suppliers]);
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
            'title' => 'bail|required|max:255',
            'description' => 'max:5000',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'art_no' => 'required',
            'origin' => 'required',
            'price' => 'required',
            'customFile' => 'bail|mimes:png,jpg,jpeg|max:2048',
        ]);
        if ($request->hasFile('customFile')) {
            $image           = $request->file('customFile');
            $name            = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file_path       = 'uploads/' . $name;
            $image->move($destinationPath, $name);
        }

        // $is_in_service = 0;
        $product = new Product();
        $product->title       = $request->title;
        $product->description = $request->description;
        $product->category_id    = $request->category_id;
        $product->supplier_id    = $request->supplier_id;
        $product->stock       = $request->quantity;
        $product->case       = $request->case;
        $product->art_no      = $request->art_no;
        $product->origin      = $request->origin;
        $product->unit_price  = $request->price;
        $product->trading_price  = $request->trading_price;
        $product->mrp  = $request->mrp;
        $product->stk  = $request->stk;


        // return $product;
        // if ($request->is_in_service) {
        //     $is_in_service = $request->is_in_service;
        // }
        // $product->is_in_service  = $is_in_service;

        if (isset($file_path)) {
            $product->image_path  = $file_path;
        } else {
            $product->image_path  = 'uploads/default.png';
        }
        if ($product->save()) {
            Session::flash('product_add_message', 'Product Added Successfully!');
        } else {
            Session::flash('product_add_message', 'Product Adding Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return back();
        // return redirect('edit_url_slug')->with('success','Profile Updated Successfully');
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
        $product = Product::findOrFail($id);
        // dd($product);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('product.edit', ['product' => $product, 'categories' => $categories, 'suppliers' => $suppliers]);
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
        $request->validate([
            'title' => 'bail|required|max:255',
            'description' => 'max:1000',
            'quantity' => 'required',
            'art_no' => 'required',
            'origin' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'customFile' => 'bail|mimes:png,jpg,jpeg|max:2048',
        ]);

        // $is_in_service = 0;
        $product = Product::findOrFail($id);
        if ($request->hasFile('customFile')) {
            $image           = $request->file('customFile');
            $name            = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file_path       = 'uploads/' . $name;
            $image->move($destinationPath, $name);
            // unlink($product->image_path);

            $product->image_path  = $file_path;


            // if (isset($file_path)) {
            //     $product->image_path  = $file_path;

            // } else {
            //     $product->image_path  = 'uploads/default.png';
            // }
        }

        $product->title       = $request->title;
        $product->description = $request->description;
        // $product->category    = json_encode($request->category);
        $product->category_id = $request->category_id;
        $product->supplier_id = $request->supplier_id;
        $product->origin = $request->origin;
        $product->stock       = $request->quantity;
        $product->case       = $request->case;
        $product->art_no      = $request->art_no;
        $product->unit_price  = $request->price;
        $product->trading_price  = $request->trading_price;
        $product->mrp  = $request->mrp;
        $product->stk  = $request->stk;
        // if ($request->is_in_service) {
        //     $is_in_service = $request->is_in_service;
        // }
        // $product->is_in_service  = $is_in_service;

        if ($product->save()) {
            Session::flash('product_update_message', 'Product Update Successfully!');
        } else {
            Session::flash('product_update_message', 'Product Updating Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::where('is_deleted', 0)->latest()->get();
        return view('product.index', ['products' => $products]);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->is_deleted = 1;
        if ($product->save()) {
            Session::flash('product_delete_message', 'Product Deleted Successfully!');
        } else {
            Session::flash('product_delete_message', 'Product Deleted Failed!');
            Session::flash('alert-class', 'alert-danger');
        }
        // dd($product);
        $products = Product::where('is_deleted', 0)->latest()->get();
        return redirect()->route('products.index', ['products' => $products]);
    }

    public function showProduct(Product $product)
    {
        return view('ecommerce.product-details')->with('product', $product);
    }

    public function showBundle(Bundle $bundle)
    {
        return view('ecommerce.bundle-details')->with('bundle', $bundle);
    }

    public function createCategory()
    {
        $categories = Category::all();
        return view('product.category', ['categories' => $categories]);
    }

    public function categoryCreate(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        if ($category->save()) {
            return redirect()->back()->with('message', 'Category Added Successfully');
        }
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('product.edit_category', ['category' => $category]);
    }

    public function categoryUpdate(Request $request,  $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        if ($category->save()) {
            return redirect()->to('admin/create/category')->with('message', 'Category Updated Successfully');
        }
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return redirect()->to('admin/create/category')->with('message', 'Category deleted Successfully');
        }
    }

    public function stock()
    {
        $products = Product::join('suppliers', 'products.supplier_id', 'suppliers.id')
            ->select('products.*', 'suppliers.name as supplier')
            ->where('products.is_deleted', 0)
            ->with('category')
            ->latest()
            ->get();
        return view('report.stock', ['products' => $products]);
    }

    public function damageProduct()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('report.damages', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function getAutocompleteData(Request $request)
    {
        if ($request->has('term')) {
            return Product::where('art_no', 'like', '%' . $request->input('term') . '%')->get();
        }
    }

    public function damageProductStore(Request $request)
    {
        $damage = new Damage();
        $damage->product_name = $request->product_name;
        $damage->category_id = $request->category_id;
        $damage->quantity = $request->quantity;
        $damage->sku = $request->sku;
        $damage->loss_amount = $request->loss_amount;
        $damage->damage_note = $request->damage_note;
        $damage->save();
        return redirect()->back()->with('message', 'Damage Product Added Successfully');
    }

    public function allDamageProduct()
    {
        $products = Damage::join('categories', 'damages.category_id', 'categories.id')
            ->select('damages.*', 'categories.name as category')
            ->get();
        return view('report.damage_index', ['products' => $products]);
    }
}
