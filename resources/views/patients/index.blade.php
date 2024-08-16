@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Data Table Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.css">
     <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> <!-- Link to custom CSS -->
 
 <style>
            body {
    padding-top: 4rem; /* Adjust this value based on the height of your fixed navbar */
}
    </style>
</head>

<body>

    @if(session('success'))
    <div id="successMessage" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 <div class="max-w-6xl mt-5 mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="px-6 py-4">
        <p class="text-xl font-semibold">Patients</p>
    </div>
   <!-- Inside your view where you want the button to appear -->


    <div class="inline-flex rounded-md  px-6 py-4">
  <a href="{{ route('patients.form') }}"  aria-current="page" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-2 border-green-500 rounded-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
   Add new patient
  </a>

</div>
     
     <table id="myTable" class="table table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>{{ $patient->id }}</td>
            <td>{{ $patient->first_name }}</td>
            <td>{{ $patient->last_name }}</td>
            <td>{{ $patient->dob }}</td>
            <td>{{ $patient->gender }}</td>
            <td>
                <a href="{{ route('patient.form', $patient->id) }}" class="text-green-700 hover:text-green-900" title="View Details">
                    <i class="fas fa-eye"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


    </div>
    </div>


 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                responsive: true
            });
        });
    </script>

     <script>
        function filterBySessionType() {
            var tableRows = document.querySelectorAll('#myTable tbody tr');
            var selectedSessionType = document.getElementById('sessionTypeFilter').value;

            tableRows.forEach(function(row) {
                var sessionType = row.cells[3].innerText.trim(); // Assuming the session type is in the 4th column
                if (selectedSessionType === 'all' || sessionType === selectedSessionType) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>
@endsection
