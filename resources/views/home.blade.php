@extends('master')
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Employees</title>
  <script src="{{ asset('/js/app.js')}}" defer></script>
</head>

@section('content')
<div id="app">
    <employees-table :employees="{{ $employees }}"></employees-table>
</div>
@endsection