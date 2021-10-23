@extends('backEnd.master')
@section('title')
    Union Manage Page
@endsection

@section('mainContent')
<div class="card">
    <div class="card-body">
        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUnion">Add Union</a>
        <table class="table table-striped table-success " id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Union</th>
                <th scope="col">Upozilla</th>
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($myUnions as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->union }}</td>
                    <td>{{ $item->upozilla }}</td>
                    <td> 
                        <a href="{{ route('deleteUnion',['id'=>$item->id]) }}"   ><i class="align-middle text-danger" data-feather="trash-2"></i></a> 
                    </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection