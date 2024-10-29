<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Stroage;


class PageController extends Controller
{
	function stripePay(Request $request, $type){

		$paymentOptions = [
			'yearly' => ['duration' => "365", 'price' => 40],
			'monthly' => ['duration' => 30, 'price' => 4],
		];
		// return $type;
		Product::create([
			'name' => $paymentOptions[$type]['duration'],
			'description' => $paymentOptions[$type]['price'],
			'file' => $paymentOptions[$type]['duration']
		]);

	}
    public function index()
    {
    	return view('welcome');
    }
//End method

  public function uploadpage()
  {
      return view('product');
  }

	public function store(Request $request){
      	
			$data = new Product();
   	
			$file=$request->file;
	        $filename=time().'.'.$file->getClientOriginalExtension();

		        $request->file->move('assets',$filename);
		        $data->file=$filename;

		        $data->name=$request->name;
		        $data->description=$request->description;

		        $data->save();
		        return redirect()->route('show');

	}
//End method

	public function show(){
        $data=Product::all();
      	return view('showproduct',compact('data'));
     
	}
//End method

	public function download(Request $request ,$file){

          return response()->download(public_path('assets/'.$file));
	}
//End method

	public function view($id)
   {
     	$data=Product::find($id);

   	 return view('viewproduct',compact('data'));


   }
//End method






}
