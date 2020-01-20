<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function action(){
        $textAction = "Action";
        return view('action', compact('textAction'));
    }

    public function about(){
        $text = "About";
        return view('about', compact('text'));
    }

    public function contact(){
        $textContact = "Contact";
        return view('contact', compact('textContact'));
    }

    public function showCustomer(){
        $titleCusstomer = "Customer";
        $customers = array ("Chandaraty", "Maly", "Samphas", "Donat");
        return view('customer', compact('titleCusstomer','customers'));
    }

    public function listCustomer(){
        $titleCusstomers = "2DArray";
        $listCustomers = array(
        '0'=>array('id' => 1,'name' => 'Chandaraty','email' => 'chandaraty@example.org'),

        '1'=>array('id' => 2,'name' => 'Maly','email' => 'maly@example.org'),
        
        '2'=>array('id' => 3,'name' => 'Samphas','email' =>'samphas@example.org'),
        
        '3'=>array('id' => 4,'name' => 'Donat','email' => 'donat@example.org'));
        return view('2DArray', compact('titleCusstomers','listCustomers'));
    }
}
