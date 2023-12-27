<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Index', [
            'product' => [
                "name" => "ยำยำ",
                "price" => 7,
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profile()
    {
        return Inertia::render('Profile', [
            'items' => [
               ["name" => "พริกไทย",
               "price" => 7,] ,
               ["name" => "ปลากระป๋อง",
               "price" => 500,]
            ]
        ]);
    }


}
