@extends('backEnd.master')
@section('title')
    Block Users
@endsection

@section('mainContent')
<div class="card">
    <div class="card-body"> 
        <table class="table table-striped table-success " id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Admin Name</th>
                <th scope="col">Admin Email</th>
                <th scope="col">Status</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($blockUsers as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td class="text-danger">{{ $item->adminName }} <small class="text-info">(Blocked)</small></td>
                    <td>{{ $item->adminEmail }}</td>
                    <td> <a href="{{ route('unBlockUser',['id'=>$item->id]) }}" class="btn btn-secondary">Unblock</a> </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection