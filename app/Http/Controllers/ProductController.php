<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function index()
    {
        $data['all'] = Product::all();
        $data['page'] = "product";
        return view('product',$data);
    }

    public function product()
    {
        $data['all'] = Product::all();
        $data['page'] = "product";
        return view('product',$data);
    }

    public function productUp(Request $request)
    {
        // echo "Delete Product ID: ".$request->pid;
        if($request->id!=""){
            $data['chk'] = "update";
            $data['prod'] = Product::find($request->id);
            $data['page'] = "";
            $data['cate'] = Category::all();
        }else{
            $data['chk'] = "add";
            $data['page'] = "productup";
            $data['cate'] = Category::all();
        }
        return view('productup',$data);
    }

    public function productsave(Request $request)
    {
        if($request['prodid']=="0"){
            $obj = new Product();
            // $obj->description = str_random(20);
            if(Input::hasFile('file')){
            // echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            $obj->picture = "uploads/".$file->getClientOriginalName();
            }else{
                $obj->picture = "https://lorempixel.com/200/200/?62961";
            }
        }else{
            $obj = Product::find($request['prodid']);
            if(Input::hasFile('file')){
            // echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            $obj->picture = "uploads/".$file->getClientOriginalName();
            }
        }
        $obj->prodname = $request['prodname'];
        $obj->description = $request['proddescription'];
        $obj->cateid = $request['cateid'];
        $obj->price = $request['price'];
        $obj->save();
        return redirect('product');
    }

    public function productDel(Request $request)
    {
        // echo "Delete Product ID: ".$request->pid;
        $obj = Product::find($request->id);
        $obj->delete();
        return redirect('product');
    }

    public function category(Request $request)
    {
        if($request->id!=""){
            $data['chk'] = "update";
            $data['all'] = Category::all();
            $data['editcate'] = Category::find($request->id);
        }else{
            $data['chk'] = "add";
            $data['all'] = Category::all();
        }
        $data['page'] = "category";
        return view('category',$data);
    }

    public function catesave(Request $request)
    {

        // echo $request->input('catename');

        if($request['cateid']=="0"){
            // echo "Add";
            $obj = new Category();
        }else{
            // echo "Update";
            $obj = Category::find($request['cateid']);
        }
        $obj->catename = $request['catename'];
        $obj->save();
        return redirect('category');

    }

    public function cateDel(Request $request)
    {
        // echo "Delete Product ID: ".$request->pid;
        $obj = Category::find($request->id);
        $obj->delete();
        return redirect('category');
    }

    public function upload(Request $request){

        if(Input::hasFile('file')){

            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            echo "File Name:".$file->getClientOriginalName()."<br>";
            echo '<img src="uploads/'.$file->getClientOriginalName().'">';
        }else{
            echo "Failed";
        }

    }
}
