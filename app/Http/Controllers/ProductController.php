<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;

class ProductController extends Controller
{
     public $database = null;
     public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function index(){
        return view("products.index");
    }

    public function create(){
        return view("products.create");
    }

    public function store(Request $request){
        $product = [
            "name"=> $request->name,
            "price"=> $request->price,
            "description" => $request->description,
            "effective_material" => $request->effective_material,
            "manufacturing_country" => $request->manufacturing_country,
            "skin_types" => $request->skin_types,
            "image" => "image_path",
            "brand" => $request->brand
        ];

        $postRef = $this->database->getReference('products')->push($product);
    }
}
