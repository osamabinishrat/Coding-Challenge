<?php

namespace App\Http\Controllers;

use App\AssetObject;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display asset objects listing.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $assetObjects = AssetObject::paginate(6);
        return view('assets.listing')->with(['assetObjects'=>$assetObjects]);
    }

    /**
     * Display asset details
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function details($id)
    {
        $assetObject = AssetObject::find($id);
        return view('assets.details')->with(['assetObject'=>$assetObject]);
    }
}
