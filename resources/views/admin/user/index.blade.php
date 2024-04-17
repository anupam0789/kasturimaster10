@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="">
              <div class="row" > 
                @include('admin.layouts.search') 
              </div> 
              </form> 
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Create Date</th>
                    <th>Action</th> 
                  </tr>
                  </thead>
                  <tbody>   
                  @foreach($users as $user) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><span class="@if($user->type ==0) right badge badge-danger @else badge badge-info right  @endif">@if($user->type==0) Developer @else Admin @endif</span></td> 
                    <td>{{ date('d, M Y',strtotime($user->created_at)) }}</td>
                    <td><a href="{{ route('admin.user.edit',$user->id)}}" ><i class="fas fa-edit"><i></a></td>         
                  </tr> 
                  @endforeach
                  </tbody> 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection  