@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                href="/blog"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div> 

    @foreach ($posts as $post)
        <div class="sm:grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div class="m-auto sm:m-auto text-left w-4/5 block">
                <h2>{{ $post->title }}<h2>
                <img src="{{ 'image/'.$post->image_path }}" alt="Image" width="100"> 
            </div>
        </div> 
    @endforeach

    @endsection