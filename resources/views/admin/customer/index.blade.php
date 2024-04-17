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
            @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif
              <div class="card-header">
                <h3 class="card-title">Customer List</h3>
              </div>
              <!-- /.card-header --> 
              <div class="card-body" >
              <form action="">
              <div class="row" > 
                @include('admin.layouts.search')
                <div class="col-sm-2 offset-sm-4">
                  <div class="form-group">
                    <a href="{{ route('admin.export-customer')}}"  class="form-control btn btn-primary">Export in excel</a>
                  </div>
                </div>
              </div> 
              </form> 

                <table id="example1" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th> 
                    <th>Company</th>
                    <th>Mobile</th>
                    <th>Created Date</th>
                    <th>Status</th>
                     
                  </tr>
                  </thead>
                  <tbody>   
                  @foreach($customers as $cust) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cust->firstname.' '.$cust->lastname  }}</td>
                    <td>{{ $cust->email }}</td> 
                    <td>{{ $cust->company }}</td>
                    <td>{{ $cust->mobile }}</td>
                    <td>{{ date('d, M Y',strtotime($cust->created_at)) }}</td> 
                    <td>
                      
                      <div> 
                        @if($cust->status == 0)
                          <a href="javascript:void(0)" class="loadContentLink no-underline hover:underline text-red-600" onclick="approveLead({{ $cust->id }})">
                              Approve |
                          </a>
                          <a href="javascript:void(0)" class="loadContentLink no-underline hover:underline text-red-600" onclick="rejectLead({{ $cust->id }})" >
                              Reject |
                          </a> 
                        @elseif($cust->status == 1)
                            <p class="text-green-600"> {{ __('Approved') }} | 
                        @else
                            <p class="text-red-600"> {{ __('Rejected') }}  |
                        @endif
                        <a href="javascript:void()" class="btn-default" data-toggle="modal" data-target="#modal-default" data-id="{{ $cust->id }}"><i class="fas fa-eye"></i></a>
                        </p>
                      </div> 
                   </td>        
                  </tr>
                  @endforeach 
                  </tbody>  
                </table>
                {{ $customers->links('pagination::bootstrap-4') }}
              </div> 
            </div> 
          </div> 
        </div> 
      </div> 
    </section> 
  </div>
   
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Customer Deatils</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show @if(!isset($_GET['status'])) active @else '' @endif" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                    <form method="POST">
                   
                    <div class="row">   
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="domain">Fisrt Name</label>
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror" id="firstName" name="firstName" placeholder="Enter First Name" value="{{  old('firstName') }}" autocomplete="off" readonly> 
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" name="lastName" placeholder="Enter Last Name" value="{{ old('lastName') }}" autocomplete="off" readonly>
                              
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="userName">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" placeholder="Enter Mobile no." value="{{ old('mobile') }}" autocomplete="off" readonly>
                              
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Company</label>
                                <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Enter Company" value="{{ old('company') }}" autocomplete="off" readonly>
                                
                            </div>
                        </div> 
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="domain">Domain</label>
                                <input type="text" class="form-control @error('domain') is-invalid @enderror" id="domain" name="domain" placeholder="Enter Domain Name" value="{{ old('domain') }}" autocomplete="off" readonly>
                                
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter Strength" value="{{ old('address') }}" autocomplete="off" readonly>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="address1">Address1</label>
                                <input type="text" class="form-control @error('address1') is-invalid @enderror" id="address1" name="address1" placeholder="Enter Address1" value="{{ old('address1') }}" autocomplete="off" readonly>
                               
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Enter City" value="{{ old('city') }}" autocomplete="off" readonly>
                               
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="Enter State" value="{{ old('state') }}" autocomplete="off" readonly>
                               
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="message">Status</label>
                                <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" placeholder="Enter Message" value="" autocomplete="off" readonly>   
                            </div>
                        </div> 
                    </div> 
                   </form>
                  </div> 
                </div> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div> 
        </div> 
  </div>
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script>
    $('.btn-default').click(function(){  
      $.ajax({
        url: "{{ route('admin.customer.ajaxdata') }}", 
        data:{'customerID':$(this).data("id")},
        dataType: "json", 
        success: function(data) {  
          $('#firstName').val(data.firstname);
          $('#lastName').val(data.lastname);
          $('#email').val(data.email);
          $('#domain').val(data.domain);
          $('#company').val(data.company);
          $('#mobile').val(data.mobile);
          $('#address').val(data.address1);
          $('#address1').val(data.address2);
          $('#city').val(data.city);
          $('#state').val(data.state);
          $('#country').val(data.country);
          $('#message').val('Hi,'+data.firstname+' Your enquiry has been approved.');
          if(data.status == 0){
            $('#status').val('Reject');
          }else{
            $('#status').val('Approve');
          }
        }   
      });   
    });
    
    function approveLead(id)
    {    
      if(confirm("Are you want to approve?")){ 
        $.ajax({
          url: "{{ route('admin.enquiry.status.send') }}", 
          data:{'customerID':id,'enquiry_status':1}, 
          dataType: "json", 
          success: function(data) { 
            toastr.options.timeOut = 10000; // 1.5s 
            toastr.success('Customer leads approve successfully');
                
          },
          error: function(xhr, status, error) { 
              var errorMessage = xhr.responseJSON.error;
              toastr.error('Something went wrong');
          }   
        });   

      }else{
          return false;
      }
        
    }
    
    function rejectLead(id)
    {   
      if(confirm("Are you want to reject lead?")){

        $.ajax({
          url: "{{ route('admin.enquiry.reject') }}", 
          data:{'customerID':id,'enquiry_status':2}, 
          dataType: "json", 
          success: function(data) { 
            toastr.options.timeOut = 10000; // 1.5s 
            toastr.success('Customer leads reject successfully');
                
          },
          error: function(xhr, status, error) { 
              var errorMessage = xhr.responseJSON.error;
              toastr.error('Something went wrong');
          }   
        });   

      }else{
          return false;
      }
        
    }

    $('.btn').on('click', function() {
      
    var $this = $(this);
    $this.button('loading');
    
    setTimeout(function() {
       $this.button('reset');
   }, 5000);
});
   
  </script>
   
@endsection  