@extends('layouts.main')
 
@section('title', 'Dashboard')
 
@section('content')
<section class="mt-6 w-full grid gap-x-3 md:grid-cols-2 lg:grid-cols-4">
    <div class="w-full mx-2 group">
        <div class="flex w-full flex-col card-dash-content">
            <div class="p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-md text-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                  
            </div>
        </div>
        <div class="card-dash-accent"></div>
    </div>

    <div class="w-full mx-auto group">
        <div class="flex w-full flex-col card-dash-content">
            <div class="p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-md text-info">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                  
            </div>
        </div>
        <div class="card-dash-accent"></div>
    </div>

    <div class="w-full mx-auto group">
        <div class="flex w-full flex-col card-dash-content">
            <div class="p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-md text-danger">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                  
            </div>
        </div>
        <div class="card-dash-accent"></div>
    </div>

    <div class="w-full mx-auto group">
        <div class="flex w-full flex-col card-dash-content">
            <div class="p-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon icon-md text-danger">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                  
            </div>
        </div>
        <div class="card-dash-accent"></div>
    </div>
</section>
@endsection