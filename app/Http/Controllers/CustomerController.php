<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{

    //     public function __construct(){
    //     $this->middleware(['editeur']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view("back.customers.allCustomers", compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("back.customers.create");
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
            "photo"=>["required"],
            "name"=>["required"],
            "text"=>["required"],
            "rating"=>["required"],
        ]);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->photo = $request->file("photo")->hashName();
        $customer->text = $request->text;
        $customer->rating = $request->rating;
        $customer->save();
        $request->file("photo")->storePublicly("img", "public");
        return redirect()->route("customer.index");
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view("back.customers.edit", compact("customer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            "photo"=>["required"],
            "name"=>["required"],
            "text"=>["required"],
            "rating"=>["required"],
        ]);
        
        Storage::disk("public")->delete("img/" . $customer->photo);
        $customer->photo = $request->file("photo")->hashName();
        $customer->name = $request->name;
        $customer->text = $request->text;        
        $customer->rating = $request->rating;
        $customer->save();
        $request->file("photo")->storePublicly("img", "public");
        return redirect()->route("customer.index"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        Storage::disk("public")->delete("img/" . $customer->photo);
        $customer->delete();
        return redirect()->route("customer.index");
    }
}
