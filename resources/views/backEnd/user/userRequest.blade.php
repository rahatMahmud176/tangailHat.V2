@extends('backEnd.master')
@section('title')
    Request User
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
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->adminName }} <small class="text-danger">(pending)</small></td>
                    <td>{{ $item->adminEmail }}</td>
                    <td> <a href="{{ route('userAproved',['id'=>$item->id]) }}" class="btn btn-secondary">Aprove</a> </td>
                    <td>
                        <a href="{{ route('blockUser',['id'=>$item->id]) }}"   ><i class="align-middle text-danger" data-feather="slash"></i></a> 
                    </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection