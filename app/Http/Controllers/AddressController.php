<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    
    protected $address;

    public function __construct(){
    $this->address = new Address();
        
    }

    public function index()

    {
       return $this->address->all(); 
    }

   
    public function saveaddress(Request $request)
    {
        return $this->address->create($request->all());
    }

   
    public function show(string $id)
    {
       return $address = $this->address->find($id);
    }

    
    public function updateaddress(Request $request, string $id)
    {
        $address = $this->address->find($id);
        $address->update($request->all());
        return $address;
    }

    
    public function deleteaddress(string $id)
    {
        $address = $this->address->find($id);
        return $address->delete(); 
    }
}
