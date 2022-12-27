@extends('base')

@section('content')
<div class='container'>
    
    <div class="d-grid gap-2 d-md-flex">
        <h1>Activity Log</h1>
    </div>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <th>Timestamp</th>
            <th>Log Entry</th>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->log_entry}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <style>
        .container {
            background-color: white;
            width: 1545;
            height: 720px;
            opacity: 0.9;
        }
    </style>
@stop