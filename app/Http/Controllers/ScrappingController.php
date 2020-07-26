<?php

namespace App\Http\Controllers;

use App\Scrapping;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{
    public function index()
    {
        return view('scrapping.index', ['scrappings' => Scrapping::all()]);
    }

    public function show($id)
    {
        return view('scrapping.show', ['scrapping' => Scrapping::findOrFail($id)]);
    }

    public function create()
    {
        return view('scrapping.create');
    }

    public function store(Request $request)
    {
        Scrapping::create($request->all());

        return redirect()->route('scrapping.index');
    }

    public function edit($id)
    {
        $scrapping = Scrapping::findOrFail($id);
        return view('scrapping.edit', ['scrapping' => $scrapping]);
    }

    public function update($id, Request $request)
    {
        $scrapping = Scrapping::findOrFail($id);
        $scrapping->update($request->all());

        return redirect()->route('scrapping.index');
    }

    public function delete($id)
    {
        $scrapping = Scrapping::findOrFail($id);
        return view('scrapping.delete', ['scrapping' => $scrapping]);
    }

    public function destroy($id)
    {
        Scrapping::findOrFail($id)->delete();
        return redirect()->route('scrapping.index');
    }
}
