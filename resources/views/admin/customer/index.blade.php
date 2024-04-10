@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Customer List</li>
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
                <h3 class="card-title">Customer List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Domain</th>
                    <th>Company</th>
                    <th>Mobile</th>
                    <th>Status</th>
                     
                  </tr>
                  </thead>
                  <tbody>   
                  @foreach($customers as $cust) 
                  <tr>
                    <td>{{ $cust->firstname }}</td>
                    <td>{{ $cust->email }}</td>
                    <td>{{ $cust->domain }}</td>
                    <td>{{ $cust->company }}</td>
                    <td>{{ $cust->mobile }}</td> 
                    <td>
                      @if($cust->status == 0)
                      <div>
                          <a href="{{route('admin.enquiry.approve', $cust->customer_id)}}" class="no-underline hover:underline text-cyan-600">
                              Approve |
                          </a>
                          <a href="{{route('admin.enquiry.reject', $cust->customer_id)}}" class="no-underline hover:underline text-red-600">
                              Reject
                          </a>
                      </div>
                      @elseif($cust->status == 1)
                          <p class="text-green-600"> {{ __('Approved') }} </p>
                      @else
                          <p class="text-red-600"> {{ __('Rejected') }} </p>
                      @endif
                   </td>        
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Domain</th>
                    <th>Company</th>
                    <th>Mobile</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
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