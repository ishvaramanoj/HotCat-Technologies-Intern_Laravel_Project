<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Address;


class CustomerController extends Controller
{
   
    protected $customer;
    public function __construct(){
        $this->customer = new Customer();
        
    }
    


    public function index()
    {
        return $this->customer->all();
        

    }

    
    public function savecustomer(Request $request)
    {
       
    return $this->customer->create($request->all());
        $data = [
            "status"=>200,
            "message"=>'data successufuly added'
        ];
        return response()->json($data,200);
    
    }

    public function insertAddress(Request $request,$id){
        $customer = Customer::find($id);

        $address = new Address;
        $address->address=$request->address;

        $customer = $customer->addresses()->save($address);

        $data = [
            'status' => 200,
            'addresses' => 'Success'
        ];
        return response()->json($data,200);
  
    }


    public function viewAddress(Request $request,$id){

    $customer = Customer::find($id);
    return $addresses = $customer->addresses;
     $data = [
            'status' => 200,
            'addresses' => 'Success'
            ];
        return response()->json($data,200);

    
    }


    


    
    public function show(string $id)
    {
        
       return $customer = $this->customer->find($id);

    }

    
    public function updatecustomer(Request $request, string $id)
    {
        
        $customer = $this->customer->find($id);
        $customer->update($request->all());
        return $customer;
        $data = [
            "status"=>200,
            "message"=>'data updated succuessfully'
        ];
        return response()->json($data,200);

    }

   
    public function deletecustomer(string $id)
    {
        
        $customer = $this->customer->find($id);
        return $customer->delete();
        $data = [
            "status"=>200,
            "message"=>'data deleted succuessfully'
        ];
        return response()->json($data,200); 

    }
}
