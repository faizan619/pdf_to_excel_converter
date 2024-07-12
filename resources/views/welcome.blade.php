@extends('masterlayout')
@section('title')
    Home |
@endsection

@section('body')
    <div class="flex flex-col gap-7 items-center selection:bg-green-500 selection:text-white ">
        <h1 class="text-[4rem] font-bold uppercase text-[#022616]">PDF to Excel Converter</h1>
        <p>Here you can convert your pdf file data into a tabular excel sheet file.</p>
        <a href="{{route('pdf.index')}}"><button class="px-10 py-3 rounded-md bg-[#09814A] text-white hover:scale-105 transition-all">Give a Try</button></a>
    </div>
@endsection