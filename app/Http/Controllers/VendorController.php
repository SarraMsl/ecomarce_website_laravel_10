<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function VendorDashboard(){

        return view('Vendor.Vendor_dashboard');
        
        }}