@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Edit Company Detail 
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Company Plan</li>
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
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link @if(!isset($_GET['status'])) active @else '' @endif" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link @if(!isset($_GET['status'])) '' @else active @endif" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Plan</a>
                  </li> 
                </ul>
              </div>
 
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show @if(!isset($_GET['status'])) active @else '' @endif" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                    <form method="POST" id="updateDetailForm">
                   
                    <div class="row">   
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="domain">Domain</label>
                                <input type="text" class="form-control @error('_CMDomain') is-invalid @enderror" id="_CMDomain" name="_CMDomain" placeholder="Enter Domain" value="{{ $company->_CMDomain ? $company->_CMDomain :  old('_CMDomain') }}" autocomplete="off" readonly>
                                @error('_CMDomain')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="database">Database</label>
                                <input type="text" class="form-control @error('database') is-invalid @enderror" id="_CMdatabase" name="_CMdatabase" placeholder="Enter Database" value="{{ $company->_CMdatabase ? $company->_CMdatabase : old('_CMdatabase') }}" autocomplete="off" readonly>
                                @error('_CMdatabase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="userName">Name</label>
                                <input type="text" class="form-control @error('_CMname') is-invalid @enderror" id="_CMname" name="_CMname" placeholder="Enter Username" value="{{ $company->_CMname ? $company->_CMname : old('_CMname') }}" autocomplete="off">
                                @error('_CMname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('userName') is-invalid @enderror" id="_CMemail" name="_CMemail" placeholder="Enter Email" value="{{ $company->_CMemail ? $company->_CMemail : old('_CMemail') }}" autocomplete="off">
                                @error('_CMemail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control @error('userName') is-invalid @enderror" id="_CMmobile" name="_CMmobile" placeholder="Enter Mobile no." value="{{ $company->_CMmobile ? $company->_CMmobile : old('_CMmobile') }}" autocomplete="off">
                                @error('_CMmobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" class="form-control @error('_CMcompanyName') is-invalid @enderror" id="_CMcompanyName" name="_CMcompanyName" placeholder="Enter Company Name" value="{{ $company->_CMcompanyName ? $company->_CMcompanyName : old('_CMcompanyName') }}" autocomplete="off">
                                @error('_CMcompanyName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="strength">Strength</label>
                                <input type="text" class="form-control @error('userName') is-invalid @enderror" id="_CMstrength" name="_CMstrength" placeholder="Enter Strength" value="{{ $company->_CMstrength ? $company->_CMstrength : old('_CMstrength') }}" autocomplete="off">
                                @error('_CMstrength')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="website">Company Website</label>
                                <input type="text" class="form-control @error('website') is-invalid @enderror" id="_CMwebsite" name="_CMwebsite" placeholder="Enter Website" value="{{ $company->_CMwebsite ? $company->_CMwebsite : old('_CMwebsite') }}" autocomplete="off">
                                @error('_CMwebsite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mobile">Status</label>
                                <select class="form-control @error('_CMstatus') is-invalid @enderror" id="_CMstatus" name="_CMstatus">
                                    <option value="">Select Status</option> 
                                       <option value="{{ $company->_CMstatus }}" @if($company->_CMstatus == '1') selected @endif>Enable</option>
                                       <option value="{{ $company->_CMstatus }}"@if($company->_CMstatus == '0') selected @endif>Disable</option>
                                    
                                </select>    
                                
                            </div>
                        </div> 
                        <input type="hidden" name="_CMid" id="_CMid" value="{{ $company->_CMid }}">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="website"> </label>
                                <div class="card-footer">
                                    <button type="button" id="updateDetail" name="updateDetail" class="btn btn-primary">Update Details</button>
                                </div>  
                            </div>
                        </div>
                    </div> 
                   </form>
                  </div>
                  <div class="tab-pane fade @if(!isset($_GET['status'])) '' @else active show @endif" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">  
                  <form method="POST" id="myForm">
                    @csrf
                    <div class="row"> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="mobile">Plans</label>
                                <select class="form-control @error('planid') is-invalid @enderror" id="planid" name="planid">
                                    <option value="">Select Plans</option>
                                    @foreach($plans as $plan)
                                       <option value="{{ $plan->id }}" @if($plan->id == $company->_CPlanId)Selected @endif>{{ $plan->name }}</option>
                                    @endforeach
                                </select>    
                                
                            </div>
                        </div> 
                        <input type="hidden" name="companyId" id="companyId" value="{{ $company->_CMid }}">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="website"> </label>
                                <div class="card-footer">
                                    <button type="button" id="updatePlan" name="updatePlan" class="btn btn-primary">Update Plan</button>
                                </div>  
                            </div>
                        </div>  
                  </div> 
                  <hr>
                  
                    @if($planEventGroup)
                    @foreach($planEventGroup as $groupData)
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><h3>{{ $groupData->name }}</h3></div>
                                @if($planData)
                                @php $i = 1; @endphp
                                @foreach($planData as $data)  
                                    @if($data->groupId == $groupData->id)
                                        <div class="card-body">
                                            <span class="float-start">{{ $data->eventTitle }}</span> 
                                                <input type="checkbox" name="company_plan[{{ $i }}][status]" 
                                                @if(!isset($data->status))
                                                  
                                                @else 
                                                   checked
                                                @endif
                                                data-bootstrap-switch> 
                                        </div>
                                        <input type="hidden" name="company_plan[{{ $i }}][eventTitle]"  value="{{ $data ? $data->eventTitle : '' }}" />
                                        <input type="hidden" name="company_plan[{{ $i }}][groupId]"  value="{{ $data ? $data->groupId : '' }}" />
                                        <input type="hidden" name="company_plan[{{ $i }}][groupName]"  value="{{ $data ? $data->groupName : '' }}" />
                                        
                                    @endif
                                    @php $i++; @endphp
                                @endforeach
                                @endif
                            </div>
                        </li>
                    </ul>
                    @endforeach 
                    @endif          
                </div>
              </div>
               </form> 
              <!-- /.card -->
            </div>
          </div> 
        </div> 
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script>
    $('#updatePlan').click(function(){
            
        $.ajax({
            url: "{{ route('admin.update.plan')}}",
            type: 'post',
            data:$("#myForm").serialize(), 
            success: function(data) {  
                if(data==true)
                {
                    toastr.options.timeOut = 1500; // 1.5s 
                    toastr.success('Company Plan updated successfully');
                    window.location.href = '/admin/company-plan/edit/{{ $company->_CMid }}?status=active'; 
                       
                }else{
                    toastr.options.timeOut = 1500; // 1.5s 
                    toastr.error('Something wentt wrong'); 
                } 
            }   
        });
            
    });

    $('#updateDetail').click(function(){
            
            $.ajax({
                url: "{{ route('admin.update.plandetails')}}",
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data:$("#updateDetailForm").serialize(), 
                success: function(data) {  
                    if(data==true)
                    {
                        toastr.options.timeOut = 1500; // 1.5s 
                        toastr.success('Company Plan updated successfully');
                        location.reload();
                        window.location.href = '/admin/company-plan/edit/{{ $company->_CMid }}';
                    }else{
                        toastr.options.timeOut = 1500; // 1.5s 
                        toastr.error('Something wentt wrong'); 
                    } 
                }   
            });
                
        });
     
         
    
   
  </script>
  
  @endsection
    
