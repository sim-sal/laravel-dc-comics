<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view("home", compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view("show", compact('comic'));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        // $data = $request->all();

        $data = $request->validate(
            $this->getValidationRules(),
            $this->getValidationMessages()
        );

        $comic = Comic::create($data);

        return redirect()->route('show', $comic->id);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('edit', compact('comic'));
    }
    public function update(Request $request, $id)
    {
        // $data = $request->all();

        $data = $request->validate(
            $this->getValidationRules(),
            $this->getValidationMessages()
        );

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('show', $comic->id);
    }

    public function delete($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('index');
    }

    private function getValidationRules()
    {
        return [
            "title" => "required|min:5|max:255",
            "description" => "nullable|max:65536",
            "thumb" => "nullable|max:65536",
            "price" => "required|starts_with:$",
            "series" => "required|max:255",
            "sale_date" => "required|date_format:d-m-Y",
            "type" => "required|max:50"
        ];
    }
    private function getValidationMessages()
    {
        return [
            "title.required" => "Inserisci il TITOLO del Comic Book!",
            "title.min" => "Il titolo deve contenere almeno 5 caratteri!",
            "title.max" => "Il titolo non può contenere più di 255 caratteri!",
            "price.required" => "Inserisci il PREZZO!",
            "price.starts_with" => "Il Prezzo deve iniziare con il '$' !",
            "series.required" => "Inserisci la SERIE del Comic Book!",
            "series.max" => "La Serie non può contenere più di 255 caratteri!",
            "sale_date.required" => "Inserisci la DATA del Comic Book!",
            "sale_date.date_format" => "ERRORE! Inserisci la DATA nel seguente formato: d-m-Y",
            "type.required" => "Inserisci la TYPE!"
        ];
    }
}
