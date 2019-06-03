<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\XMLIzlusceniPodatki;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class XMLController extends Controller {

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
						* Display a listing of the resource.
						*
						* @return Response
						*/
					public function index()
					{
									//
					}

					/**
						* Show the form for creating a new resource.
						*
						* @return Response
						*/
					public function create()
					{
								 return Redirect::to('home');
					}

					/**
     * Get a validator for an incoming xml data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'timestamp' => 'required|date',
												'amount' => 'required|numeric|min:0',
												'raw_xml_data' => 'required|binary'
        ]);
    }

					/**
						* Store a newly created resource in storage.
						*
						* @return Response
						*/
					public function store(Request $request)
					{
									$validator = validator($request->all());

									// process the login
									if ($validator->fails()) {
													return Redirect::to('receipts')->withErrors($validator);
									} else {
													// store
													$xmlData = new XMLIzlusceniPodatki;
													$xmlData->user_id      = Auth::id();
													$xmlData->name         = $request->input('name');
													$xmlData->timestamp    = $request->input('timestamp');
													$xmlData->amount       = $request->input('amount');
													$xmlData->raw_xml_data = $request->input('raw_xml_data');
													$xmlData->save();

													// redirect
													Session::flash('message', 'Successfully inserted xml data into database!');
													return Redirect::to('receipts');
								 }
					}

					/**
						* Display the specified resource.
						*
						* @param  int  $id
						* @return Response
						*/
					public function show($id)
					{
									//
					}

					/**
						* Show the form for editing the specified resource.
						*
						* @param  int  $id
						* @return Response
						*/
					public function edit($id)
					{
									//
					}

					/**
						* Update the specified resource in storage.
						*
						* @param  int  $id
						* @return Response
						*/
					public function update($id)
					{
									//
					}

					/**
						* Remove the specified resource from storage.
						*
						* @param  int  $id
						* @return Response
						*/
					public function destroy($id)
					{
									//
					}

	}
