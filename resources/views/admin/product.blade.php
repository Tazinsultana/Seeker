@extends('admin.layouts.Main')
@section('content')
<div class="container">
    <h2 class="my-2 text-center"><strong>Ajux Crud </strong></h2>

     <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addModal"> Add Product </a>

  </button> 
    <table class="table table-bordered my-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Suger</td>
            <td>120</td>
            <td>
                <a href="" class="btn btn-primary"> <i class="fa-solid fa-pen-to-square"></i></a>
              
                <a href="" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
         
        </tbody>
      </table>
</div>
{{-- @include('admin.product_js') --}}
@include('admin.addproduct')

@endsection