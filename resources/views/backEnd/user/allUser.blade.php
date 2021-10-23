@extends('backEnd.master')
@section('title')
    All User
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
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($allUsers as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->adminName }}</td>
                    <td>{{ $item->adminEmail }}</td>
                    <td>
                        <a href="{{ route('blockUserFromAllUser',['id'=>$item->id]) }}" class="btn btn-danger"  >Block</a> 
                    </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection