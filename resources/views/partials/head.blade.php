<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name') }}</title>

{{-- Laravel JS --}}
<script src="{{ asset('js/app.js') }}"></script>

{{-- Styles --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
{{-- Font Awesome --}}
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
{{-- Bootstrap core CSS --}}
{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
{{-- Material Design Bootstrap --}}
<link  rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
{{-- DataTables CSS --}}
{{-- <link rel="stylesheet" href="css/addons/datatables.min.css"> --}}
<link rel="stylesheet" href="https://nightly.datatables.net/css/dataTables.bootstrap4.min.css">
{{-- DataTables Select CSS --}}
<link rel="stylesheet" href="css/addons/datatables-select.min.css">