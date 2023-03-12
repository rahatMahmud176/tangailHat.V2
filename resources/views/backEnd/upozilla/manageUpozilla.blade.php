@extends('backEnd.master')
@section('title')
    Manage Upozilla
@endsection
@section('mainContent')
<div class="card">
    <div class="card-body">
        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUpozilla">Add Upozilla</a>
        <table class="table table-striped table-success " id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Upozilla</th>
                <th scope="col">District</th>
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($upozillas as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->district->name }}</td>
                    <td>
                        <a href="{{ route('deleteUpozilla',['id'=>$item->id]) }}"   ><i class="align-middle text-danger" data-feather="trash-2"></i></a> 
                    </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection