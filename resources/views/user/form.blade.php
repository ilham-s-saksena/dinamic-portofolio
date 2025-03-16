<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @php
    $structure = json_decode($template->structure, true)
    @endphp
@extends('layouts.sidebar')
@section('main')
    <section>
        <h1 class="text-xl font-bold">Create Portofolio</h1>

        <div class="my-3 pb-3">
            <h1 class="text-lg font-bold">Template Name: <span class="px-5 py-2 bg-green-200 rounded-lg"> {{ $template->name }} </span></h1>
        </div>
    </section>
    <div class="font-bold mb-3"></div>
    <section>
        <form action="/u/form/create" method="POST">

        <div class="py-2 space-y-2 w-full max-w-md border-b py-3 mb-3">
            <div>
                <div class="grid grid-cols-3 mb-2">
                    <label for="fullName" class="col-span-2 rounded-lg">Full Name</label>
                    <input type="text" name="fullName" class="col-span-2 rounded-lg">
                </div>
                <div class="grid grid-cols-3 mb-2">
                    <label for="position" class="col-span-2 rounded-lg">Position</label>
                    <input type="text" name="position" class="col-span-2 rounded-lg">
                </div>
                <div class="grid grid-cols-3 mb-2">
                    <label for="photo" class="col-span-2 rounded-lg">Photo</label>
                    <input type="file" name="photo" class="col-span-2 rounded-lg">
                </div>
                <div class="grid grid-cols-3 mb-2">
                    <label for="description" class="col-span-2 rounded-lg">Description</label>
                    <textarea name="description" class="col-span-2 rounded-lg"></textarea>
                </div>
                <div class="grid grid-cols-3 mb-2">
                    <label for="contact" class="col-span-2 rounded-lg">Contact / Phone</label>
                    <input type="number" name="contact" class="col-span-2 rounded-lg">
                </div>
            </div>
        </div>

        @foreach ($structure as $key => $fields)

        <div class="border-b border-gray-400 my-5"></div>
            <!-- DropDown Colors -->
            @if (is_array($fields) && isset($fields['option']) && $key == 'color')
                <div class="">
                    <label for="{{ $key }}" class="">{{ ucfirst($key) }}</label>
                    <select name="{{ $key }}" id="{{ $key }}" class="rounded-lg">
                        @foreach ($fields['option'] as $option)
                            <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                        @endforeach
                    </select>
                </div>

            
            <!-- Social Media Form -->
            @elseif ($key === 'social_media')
                <div class="bg-blue-100 p-4 rounded-lg">
                    <label class="font-bold underline">{{ str_replace("_", " ", ucfirst($key)) }}</label>
                    <div id="{{ $key }}-container">
                        <div class="py-2 space-y-2 w-full max-w-md border-b py-3" data-index="0">

                            <div class="grid grid-cols-3">
                                <label class="">Platform</label>
                                <select name="{{ $key }}[0][name]" class="col-span-2 rounded-lg">
                                    @foreach ($fields['option'] as $option)
                                        <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="grid grid-cols-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="{{ $key }}[0][username]" class="col-span-2 rounded-lg">
                            </div>

                            <div class="grid grid-cols-3">
                                <label class="">Link</label>
                                <input type="text" name="{{ $key }}[0][link]" class="col-span-2 rounded-lg">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-4 py-1.5 rounded" onclick="addItem('{{ $key }}')">Tambah {{ str_replace("_", " ", ucfirst($key)) }}</button>
                </div>

            <!-- Fields Lainnya -->
            @elseif (is_array($fields))
                <div class="bg-blue-100 p-4 rounded-lg">
                    <label class="font-bold underline">{{ str_replace("_", " ", ucfirst($key)) }}</label>
                    <div id="{{ $key }}-container" class="py-2 space-y-2 w-full max-w-md border-b py-3 mb-3">
                        <div class="" data-index="0">
                            @foreach ($fields as $field => $type)
                                <div class="grid grid-cols-3 mb-2">
                                    <label for="{{ $key }}_{{ $field }}" class="col-span-2 rounded-lg">{{ ucfirst($field) }}</label>

                                    @if ($type == 'textarea')
                                        <textarea name="{{ $key }}[0][{{ $field }}]" class="col-span-2 rounded-lg"></textarea>
                                    @elseif ($type == 'file')
                                        <input type="file" name="{{ $key }}[0][{{ $field }}]" class="col-span-2 rounded-lg">
                                    @else
                                        <input type="{{ $type }}" name="{{ $key }}[0][{{ $field }}]" class="col-span-2 rounded-lg">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="bg-blue-600 text-white px-4 py-1.5 rounded cursor-pointer hover:bg-blue-500" onclick="addItem('{{ $key }}')">Tambah {{ str_replace("_", " ", ucfirst($key)) }}</button>
                </div>
            @endif
            @endforeach

            
        </form>
    </section>

    
@endsection

<script>
    function addItem(section) {
        let container = document.getElementById(section + "-container");
        let index = container.getElementsByClassName('item').length;

        let firstItem = container.children[0];
        let newItem = firstItem.cloneNode(true);
        newItem.dataset.index = index;

        let inputs = newItem.querySelectorAll("input, textarea, select");
        inputs.forEach(input => {
            let oldName = input.getAttribute("name");
            if (oldName) {
                let newName = oldName.replace(/\[\d+\]/, '[' + index + ']'); 
                input.setAttribute("name", newName);
                input.value = '';
            }
        });

        container.appendChild(newItem);
    }
</script>

<script src="/dist/flowbite.js"></script>
</body>
</html>

