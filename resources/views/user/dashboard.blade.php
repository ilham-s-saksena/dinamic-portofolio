<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@extends('layouts.sidebar')
@section('main')
    <section>
        <h1 class="text-xl font-bold">Dashboard</h1>

        <div class="py-3">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">Create New Portofolio</button>
        </div>

        <div>
            <h1 class="text-lg font-bold">Summary</h1>
        </div>
    </section>

    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <form method="get" action="/u/form/" class="relative bg-white rounded-lg shadow-sm">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Choosse Your Template of Portofolio
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 space-y-4">

                <ul class="grid w-full gap-6 md:grid-cols-2">
                    @foreach ($template as $tem)
                        
                    <li>
                        <input type="radio" id="{{ $tem->id }}" name="template" value="{{ $tem->id }}" class="hidden peer" required />
                        <label for="{{ $tem->id }}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                            <div class="block">
                                <div class="w-full text-lg font-semibold">{{ $tem->name }} Template</div>
                                <div class="w-full">Code: {{ $tem->id }}</div>
                            </div>
                            <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </label>
                    </li>

                    @endforeach

                </ul>

                </div>
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Chosse Template</button>
                    <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Close</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script src="/dist/flowbite.js"></script>
</body>
</html>

