@extends('masterlayout')
@section('title')
    Home |
@endsection

@section('body')
    <div class="flex flex-col gap-7 items-center selection:bg-green-500 selection:text-white ">
        <h1 class="text-[4rem] text-center font-bold uppercase text-[#022616]">Fetch Your Resume Content into excel</h1>
        <p>In This Project You can save your resume text into the excel file. Wanna Give a Try ;).</p>
        <a href="{{route('pdf.index')}}"><button class="px-10 py-3 rounded-md bg-[#09814A] text-white hover:scale-105 transition-all">Give a Try</button></a>
    </div>
@endsection
