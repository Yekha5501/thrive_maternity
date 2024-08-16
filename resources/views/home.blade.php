@extends('layouts.app')

@section('content')

<head>
    <!-- Other head content -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
            body {
    padding-top: 4rem; /* Adjust this value based on the height of your fixed navbar */
}
    </style>


</head>

<body class="">
<div class="mx-auto bg-gray-200 p-4 px-12">
    <div class="row mb-4">
        <div class="col-md-4">@livewire('total-patients-card')</div>
        <div class="col-md-4">@livewire('total-staffs-card')</div>
        <div class="col-md-4">
            @livewire('upcoming-appointments-card')
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">@livewire('recent-patients-table')</div>
       
    </div>
</div>

</body>

@endsection