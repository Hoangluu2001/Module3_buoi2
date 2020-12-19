<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
//        dd($customers);
        return view('index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
//        $customer->name = $request->name;
        $customer->fill($request->all());
//        $customer->save();
//        return redirect()->route('customer.index');


        $imageName = 'uploads/' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $imageName);
        $customer->img = $imageName;
        $customer ->save();
        return redirect()->route('customer.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }


    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('edit',compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->fill($request->all());

        $imageName = 'uploads/' . time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $imageName);
        $customer->img = $imageName;
        $customer ->save();
//       $message = "Tạo customer $request->inputTitle thành công!";
//       Session::flash('create-success', $message);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.index');

    }
}
