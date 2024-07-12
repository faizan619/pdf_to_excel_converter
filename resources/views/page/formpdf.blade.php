@extends('masterlayout')

@section('title')
    Upload |
@endsection

@section('body')
        <div class="shadow-md shadow-black px-5 py-10 rounded-md w-[50%]">
            <h1 class="text-[2rem] uppercase text-center">Upload Your PDf file</h1>
            <form action="{{route('pdf.store')}}" method="POST" enctype="multipart/form-data" class="flex flex-col items-start gap-7 mt-10">
                @csrf
                <input type="file" name="file_name" accept=".pdf" class="p-3 border bg-gray-700 @error('file_name') border-red-600 @enderror text-white w-full rounded-md cursor-alias">
                @if ($errors->any())
                    <p class="text-red-600 px-5">
                        @error('file_name')
                            {{$message}}
                        @enderror
                    </p>
                @endif
                <button type="submit" class="border py-2 px-5 rounded-md bg-gray-700 text-white hover:scale-105 transition-all">Submit</button>
                @if (session('status'))
                <div class="m-1 p-1 text-green-600  rounded-md">{{ session('status') }}</div>
            @endif
            </form>
        </div>
@endsection