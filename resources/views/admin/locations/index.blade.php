@extends('layouts.dashboard')

@section('title', 'Police Stations Locations')

@section('content')
    
    <div>
        @if ($locations->count())
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>##</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $key => $location)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $location->location }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <span class="font-weight-bold">No locations added yet</span>
        @endif
    </div>

@endsection