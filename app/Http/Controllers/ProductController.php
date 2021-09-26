<?php

namespace App\Http\Controllers;

use App;
use App\Product;
use App\Stock;
use App\Cart;
use Illuminate\Http\Request;
use DB;

use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $desc = Product::select('desc')->groupBy('desc')->get();
        $maxPrice = Product::select('price')->max('price');
        $minPrice = Product::select('price')->min('price');
        return view('products.index',compact(['desc','maxPrice','minPrice','products']));
        
    }

    public function filter(Request $request)
    {
        if($request->ajax())
        {
            $products= Product::where('quantity','>',0);
            $query = json_decode($request->get('query'));
            $price = json_decode($request->get('price'));
            $desc = json_decode($request->get('desc'));
            
            if(!empty($query))
            {
                $products= $products->where('name','like','%'.$query.'%');        
            }
            if(!empty($price))
            {
                $products= $products->where('price','<=',$price);
            }
            if(!empty($desc))
            {
                $products= $products->whereIn('desc',$desc);
            }
            $products=$products->get();
            

            $total_row = $products->count();
            if($total_row>0)
            {
                $output ='';
                foreach($products as $product)
                {
                    $output .='
                    <div class="col-lg-4 col-md-6 col-sm-12 pt-3">
                        <div class="card">
                            <a href="product/'.$product->id.'">
                                <div class="card-body ">
                                    <div class="product-info">
                                    <div class="info-1"><img src="'.asset('/storage/'.$product->image).'" alt="Gambar Produk"></div>
                                    <div class="info-4"><h4>'.$product->name.'</h4></div>
                                    <div class="info-2"><h4>'.$product->desc.'</h4></div>
                                    <div class="info-3"><h4>Rp. '.$product->price.'</h4></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    ';
                }
            }
            else
            {
                $output='
                <div class="col-lg-4 col-md-6 col-sm-6 pt-3">
                    <h4>Produk Kosong</h4>
                </div>
                ';
            }
            $data = array(
                'table_data'    =>$output
            );
            echo json_encode($data);
        
        }
    }

    public function show(Product $product)
    {   
        $sizes = Stock::where('product_id','=',$product->id)
                     ->get([
                            'quantity',
                        ]);

        return view('products.show', compact ('product'));
    }

    public function form()
    {
        return view('admin.addproduct');
    }

    public function create(Request $request)
    {
        $this->validate(request(),[
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'name'=>'required|string',
            'price'=>'required|integer',
            'desc'=>'required|string',
        ]);

        $imagepath = $request->image->store('products','public');
        
        $product = new Product();
        $product->name=request('name');
        $product->price=request('price');
        $product->desc=request('desc');
        $product->image=$imagepath;

        

        $product->save();
        // DB:: table('products')->insert($product);
        return redirect()->route('admin.product')->with('success','Berhasil Menambahkan produk');
    }
    
    public function editform($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.editproduct',compact('product'));
    }

    public function edit(Request $request,$id)
    {
        $this->validate(request(),[
            'image'=>'',
            'name'=>'required|string',
            'price'=>'required|integer',
            'desc'=>'required|string',
        ]);
        if(request('image'))
        {
            $imagepath = $request->image->store('products','public');
            $product = Product::findOrFail($id);
            
            $product->name=request('name');
            $product->price=request('price');
            $product->desc=request('desc');
            $product->image=$imagepath;
            $product->save();
        }
        else
        {
            $product = Product::findOrFail($id);
            $product->name=request('name');
            $product->price=request('price');
            $product->desc=request('desc');
            $product->save();
        }
        return redirect()->route('admin.product')->with('success','Berhasil Mengedit produk!');
        
    }
    
    public function remove($id)
    {
        Product::where('id',$id)->delete();
        Stock::where('product_id',$id)->delete();

        return redirect()->route('admin.product')->with('success','Berhasil menghapus produk!');
    }

    public function list()
    {
        $products = Product::orderBy('id')->get();
        //dd($products);
        return view('admin.product', compact ('products'));
    }


}