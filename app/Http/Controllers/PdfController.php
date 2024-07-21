<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("page.formpdf");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             'file_name'=>'required|max:10000|mimes:pdf'
         ]);

         $path = $request->file('file_name')->store('pdf_files', 'public');

         // Parse the PDF file
         $parser = new Parser();
         $pdf = $parser->parseFile(storage_path('app/public/' . $path));
         $text = $pdf->getText();

         // Save the file path and extracted text to the database
         $pdf = Pdf::create([
             'file_name' => $path,
             'extracted_text' => $text,
         ]);

         return redirect()->route('pdf.show', $pdf->id)->with('status', 'File Is Uploaded Successfully!');
     }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'file_name'=>'required|max:10000'
    //     ]);
    //     $path = $request->file('file_name')->store('pdf_files','public');
    //     Pdf::create([
    //         'file_name'=>$path,
    //     ]);
    //     return redirect()->route('pdf.index')->with('status','File Is Uploaded Successfully!');
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pdf = Pdf::findOrFail($id);
        return view('page.showpdf', ['pdf' => $pdf]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdf $pdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        //
    }
}
