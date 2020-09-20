<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class MainController extends Controller
{
    public function index()
    {

    	return view('index');
    }


    public function insertData(Request $req)
    {
    	$data = $req->all();
    	$res = DB::table('master')->insert([
    		'name_of_party'=>$data['customer_name'],
    		'g_particular'=>$data['partical'],
    		'matirial'=>$data['matirial'],
    		'size'=>$data['size'],
    		'quantity'=>$data['quantity'],
    		'rate'=>$data['rate'],
    		't_amount'=>$data['total_amount'],
    		'credit_amount'=>$data['credit'],
    		'debit_amount'=>$data['debit'],

    	]);

    	return redirect('GeetaGraphic');
    }


    public function showData()
    {
    	$datas = DB::table('master')->get();
    	return view('GeetaGraphic')->with('datas', $datas);
    }

    public function editData($id)
    {
    	$data = DB::table('master')->where('g_id', $id)->get();
	   	return view('eidt', compact('data'));
    }

    public function updateData(Request $req)
    {

    	$data = $req->all();
    	$res = DB::table('master')->where('g_id', $data['g_id'])->update([
    		'name_of_party'=>$data['customer_name'],
    		'g_particular'=>$data['partical'],
    		'matirial'=>$data['matirial'],
    		'size'=>$data['size'],
    		'quantity'=>$data['quantity'],
    		'rate'=>$data['rate'],
    		't_amount'=>$data['total_amount'],
    		'credit_amount'=>$data['credit'],
    		'debit_amount'=>$data['debit'],

    	]);
		return redirect('GeetaGraphic');
    }
}
