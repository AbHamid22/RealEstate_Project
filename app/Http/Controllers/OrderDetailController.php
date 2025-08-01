<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Property;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class OrderDetailController extends Controller{
	public function index(){
		$orderdetails = OrderDetail::with('Order','Property')->paginate(5);
		return view("pages.orderdetail.index",["orderdetails"=>$orderdetails]);
	}
	public function create(){
		return view("pages.orderdetail.create",["orders"=>Order::all(),"propertys"=>Property::all()]);
	}
	public function store(Request $request){
		//OrderDetail::create($request->all());
		$orderdetail = new OrderDetail;
		$orderdetail->order_id=$request->order_id;
		$orderdetail->property_id=$request->property_id;
		$orderdetail->flat_no=$request->flat_no;
		$orderdetail->amount=$request->amount;
date_default_timezone_set("Asia/Dhaka");
		$orderdetail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$orderdetail->updated_at=date('Y-m-d H:i:s');

		$orderdetail->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$orderdetail = OrderDetail::find($id);
		return view("pages.orderdetail.show",["orderdetail"=>$orderdetail]);
	}
	public function edit(OrderDetail $orderdetail){
		return view("pages.orderdetail.edit",["orderdetail"=>$orderdetail,"orders"=>Order::all(),"propertys"=>Property::all()]);
	}
	public function update(Request $request,OrderDetail $orderdetail){
		//OrderDetail::update($request->all());
		$orderdetail = OrderDetail::find($orderdetail->id);
		$orderdetail->order_id=$request->order_id;
		$orderdetail->property_id=$request->property_id;
		$orderdetail->flat_no=$request->flat_no;
		$orderdetail->amount=$request->amount;
date_default_timezone_set("Asia/Dhaka");
		$orderdetail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$orderdetail->updated_at=date('Y-m-d H:i:s');

		$orderdetail->save();

		return redirect()->route("orderdetails.index")->with('success','Updated Successfully.');
	}
	public function destroy(OrderDetail $orderdetail){
		$orderdetail->delete();
		return redirect()->route("orderdetails.index")->with('success', 'Deleted Successfully.');
	}
}
?>
