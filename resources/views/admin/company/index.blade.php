@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Company List</li>
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
                <h3 class="card-title">Company List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Company</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th> 
                    <th>Plan Name</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>   
                  @foreach($data['PlanDetails'] as $PlanDetail) 
                  <tr>
                    <td>{{ $PlanDetail->_CMcompanyName ? $PlanDetail->_CMcompanyName : '--' }}</td>
                    <td>{{ $PlanDetail->_CMname ? $PlanDetail->_CMname : '--' }}</td>
                    <td>{{ $PlanDetail->_CMmobile ? $PlanDetail->_CMmobile : '--' }}</td>
                    <td>{{ $PlanDetail->_CMemail ? $PlanDetail->_CMemail : '--' }}</td>
                    <td>{{ $PlanDetail->name ? $PlanDetail->name : '--' }}</td>
                    <td>{{ $PlanDetail->_CMcreatedOn ? date('d, M Y',strtotime($PlanDetail->_CMcreatedOn)) : '--' }}</td>
                    <td><a href="{{ route('admin.company-plan.edit',$PlanDetail->_CMid)}}" ><i class="fas fa-edit"><i></a></td> 
                  </tr> 
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Company</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th> 
                    <th>Plan</th>
                    <th>Created Date</th>
                    <th>Action</th> 
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