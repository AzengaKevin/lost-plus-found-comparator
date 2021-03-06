@extends('layouts.dashboard')

@section('title', 'Reported Cases')

@section('btn')
<a href="{{ route('officer.reports.create') }}" class="btn btn-sm btn-info">Add Case</a>
@endsection

@section('content')
<div>
    @if ($reports->count())
    <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <td>##</td>
                    <td>Name</td>
                    <td>Station</td>
                    <td>DOB</td>
                    <td>Last Seen</td>
                    <td>Last Updated</td>
                    <td>When Reported</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->id }}</td>
                    <td>{{ $report->person_name }}</td>
                    <td>{{ $report->station->name }}</td>
                    <td>{{ $report->person_date_of_birth }}</td>
                    <td>{{ $report->last_seen->format('m/d/Y') }}</td>
                    <td>{{ $report->updated_at->format('m/d/Y') }}</td>
                    <td>{{ $report->created_at->format('m/d/Y') }}</td>
                    <td class="d-flex">
                        <a href="{{ route('officer.reports.show', $report) }}" class="btn btn-sm btn-secondary mx-2">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ route('officer.reports.edit', $report) }}" class="btn btn-sm btn-info mx-2">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger mx-2">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    @endif
</div>
@endsection