@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stepper Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
</head>
<body class="bg-gray-100 pt-12">
    <div class="max-w-xl mx-auto p-6 bg-white border-2 border-green-500 shadow-lg rounded-lg mt-10">
       <!-- Stepper -->
<ol class="flex items-center w-full mb-4 sm:mb-5">
    <!-- Step 1 -->
    <li class="flex w-full items-center step" id="step-icon-1">
        <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0 step-icon">
            <i class="fas fa-user lg:text-lg"></i>
        </div>
        <span class="after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700"></span>
    </li>
    <!-- Step 2 -->
    <li class="flex w-full items-center step" id="step-icon-2">
        <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0 step-icon">
            <i class="fas fa-credit-card lg:text-lg"></i>
        </div>
        <span class="after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700"></span>
    </li>
    <!-- Step 3 -->
    <li class="flex w-full items-center step" id="step-icon-3">
        <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0 step-icon">
            <i class="fas fa-file-alt lg:text-lg"></i>
        </div>
        <span class="after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700"></span>
    </li>
    <!-- Step 4 -->
    <li class="flex items-center w-full step" id="step-icon-4">
        <div class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 shrink-0 step-icon">
            <i class="fas fa-check-circle lg:text-lg"></i>
        </div>
    </li>
</ol>

<!-- Form -->
<form action="#" class="">
    <!-- Step 1: Personal Info -->
      <!-- Step 1: Basic Patient Information and General Health -->
              @livewire('multistepform.step-one')
    <!-- Step 2: Payment Info -->
    <div id="step-2" class="step-content hidden">
         @livewire('multistepform.step-two')
    </div>

    <!-- Step 3: Document Upload -->
    <div id="step-3" class="step-content hidden">
          @livewire('multistepform.step-three')
    </div>

    <!-- Step 4: Confirmation -->
    <div id="step-4" class="step-content hidden">
        <h3 class="mb-4 text-lg font-medium leading-none text-gray-900 dark:text-white">Confirmation</h3>
        <p class="text-gray-600 dark:text-gray-400">Please review the information you have provided and click "Submit" to complete the process.</p>
        <div class="flex justify-between">
            <button type="button" class="text-gray-700 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-900" onclick="previousStep(3)">
                Back
            </button>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Submit
            </button>
        </div>
    </div>
</form>


    </div>

	
<script>
    // Handle Step Navigation
    function nextStep(step) {
        document.querySelectorAll('.step-content').forEach((element) => {
            element.classList.add('hidden');
        });
        document.querySelector(`#step-${step}`).classList.remove('hidden');
        
        document.querySelectorAll('.step').forEach((element) => {
            element.querySelector('.step-icon').classList.remove('bg-green-700', 'text-white');
            element.querySelector('.step-icon').classList.add('bg-gray-100', 'text-gray-500');
        });
        document.querySelector(`#step-icon-${step}`).querySelector('.step-icon').classList.add('bg-green-700', 'text-white');
    }

    function previousStep(step) {
        nextStep(step);
    }

    function resetForm() {
        document.querySelectorAll('input').forEach((element) => {
            element.value = '';
        });
        nextStep(1);
    }
</script>
</body>
</html>

@endsection
