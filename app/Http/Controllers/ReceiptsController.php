<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\XMLIzlusceniPodatki;

class ReceiptsController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
								$xmlData  = XMLIzlusceniPodatki::where('user_id', Auth::id())->get();
        return View::make('receipts')->with('xmls', $xmlData);
				}

				/**
     * Create a new XML data instance.
     *
     * @param  array  $data
     * @return \App\XMLIzlusceniPodatki
     */
    protected function create(array $data)
    {
					   Log::alert($data);
        XMLIzlusceniPodatki::create([
												'name' => $data['name'],
												'timestamp' => $data['timestamp'],
												'amount' => $data['amount'],
												'raw_xml_data' => $data['xml']
								]);

								return index();
    }
}
