@extends('layouts.dashboard')

@section('title', 'Reported Cases')

@section('btn')
<a href="{{ route('officer.reports.create') }}" class="btn btn-sm btn-info">Add Case</a>
@endsection