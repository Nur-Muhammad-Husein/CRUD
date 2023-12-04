<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Data;

class DataController extends Controller
{
    public function index(): View
	{
		$data = Data::all();
		
		return view('table', ['data' => $data]);
	}
	
	public function store(Request $request): RedirectResponse
	{
		$data = new Data;
		
		$data->nama = $request->nama;
		$data->deskripsi = $request->deskripsi;
		
		$data->save();
		
		return redirect('/');
	}
	
	public function get(Request $request): View
	{
		$datum = Data::find($request->id);
		
		return view('edit', ['datum' => $datum]);
	}
	
	public function update(Request $request): RedirectResponse
	{
		$data = Data::find($request->id);
		
		$data->nama = $request->nama;
		$data->deskripsi = $request->deskripsi;
		
		$data->save();
		
		return redirect('/');
	}
	
	public function getDestroy(Request $request): View
	{
		$datum = Data::find($request->id);
		
		return view('deleteConfirm', ['datum' => $datum]);
	}
	
	public function destroy(Request $request): RedirectResponse
	{
		$datum = Data::find($request->id);
		
		$datum->delete();
		
		return redirect('/');
	}
}
