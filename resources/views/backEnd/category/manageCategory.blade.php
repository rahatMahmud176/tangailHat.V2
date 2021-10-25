@extends('backEnd.master')
@section('title')
    Category Manage Page
@endsection

@section('mainContent')
<div class="card">
    <div class="card-body"> 

        <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategory">Add Category</a>
        <table class="table table-striped table-success " id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Icon</th>
                <th scope="col">Action</th> 
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($categories as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->categoryName }}</td>
                    <td><img src="{{ asset($item->categoryIcon) }}" alt="" width="30px" ></td>
                    <td> 
                        
                        <a href="{{ route('deleteCategoryAlert',['id'=>$item->id]) }}"   ><i class="align-middle text-danger" data-feather="trash-2"></i></a> 
                    </td> 
                </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
  </div>

@endsection