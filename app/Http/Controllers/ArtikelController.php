<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    public function index()
    {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {

        $artikel = ArtikelModel::save($request->all());
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($id, Request $request)
    {
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect()->route('index');
    }
    public function destroy($id)
    {
        $deleted =  ArtikelModel::destroy($id);
        return redirect()->route('index');
    }

    public function show($id)
    {
        $artikel = ArtikelModel::find_by_id($id);

        return view('artikel.detail', compact('artikel'));
    }
}
