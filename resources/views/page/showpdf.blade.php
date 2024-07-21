@extends('masterlayout')

@section('title')
    PDF Content |
@endsection

@section('body')
    <div class="shadow-md shadow-black px-5 py-10 rounded-md w-[50%]">
        <h1 class="text-[2rem] uppercase text-center">Extracted PDF Content</h1>
        <p class="mt-5 text-justify">{!! nl2br(e($pdf->extracted_text)) !!}</p>
    </div>
@endsection


{{-- @extends('masterlayout')

@section('title')
    PDF Content |
@endsection

@section('body')
    <div class="shadow-md shadow-black px-5 py-10 rounded-md w-[50%]">
        <h1 class="text-[2rem] uppercase text-center">Extracted PDF Content</h1>
        <p contenteditable="true" class="mt-5 text-justify">{{ $pdf->extracted_text }}</p>
    </div>
@endsection --}}
