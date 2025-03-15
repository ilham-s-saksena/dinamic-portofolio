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
    $structure = json_decode($template->structure)
    @endphp
@extends('layouts.sidebar')
@section('main')
    <section>
        <h1 class="text-xl font-bold">Create Portofolio</h1>

        <div class="my-3">
            <h1 class="text-lg font-bold">Template: {{ $template->name }}</h1>
        </div>
    </section>

    <section>
        <form action="/u/form/create" method="POST">
            
        </form>
    </section>

    
@endsection

<script src="/dist/flowbite.js"></script>
</body>
</html>

