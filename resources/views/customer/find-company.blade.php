@extends('layouts.app')
@section('content')
    
    <section class="contactpage-section">
        <div class="contact-info">
            <div class="contact-thumb">
                <img src="{{ asset('assets/images/thumb-login-vector.png') }}" alt="Login">
            </div>
        </div>
        
        <div class="contact-form">
            <h2>Find Your Company URL</h2>
            <div id="find-company">
                @csrf
                <div class="form-control-row form-full">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Your email" class="form-control" value="{{ old('email') }}" required>
                        
                        <div class="error" id="error-email" style="display: none;"></div>
                        
                    </div>
                </div>
                <div class="form-control-row form-full" style="display: none">
                    <div>
                        <label for="company">Select company</label>
                        <select class="form-select" name="company">
                        </select>
                    </div>
                </div>
                <div class="form-control-row form-full text-center">
                    <button id="button-find" type="button" class="btn btn-green" style="min-width: 200px;">Continue</button>
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript"><!--
        $('#button-find').on('click', function() {
            $.ajax({
                url: "{{ route('customer.submit.company.email') }}",
                type: 'post',
                data: $('#find-company input[type=\'text\'], #find-company input[type=\'hidden\'], #find-company input[type=\'email\'],  #find-company select'),
                dataType: 'json',
             
                beforeSend: function() {
                    $('#button-find').button('loading');
                },
                complete: function() {
                    $('#button-find').button('reset');
                },
                success: function(json) {
                    $('.error').hide();
                    var html ='';
                    if (json['success']) {
                       
                        if (json['user'] && json['user'] != '') {
                            html += '<option value="">Choose your company</option>';
                            for (i = 0; i < json['user'].length; i++) {
                                html += '<option value="' + json['user'][i]['company_url'] + '"';

                                html += '>' + json['user'][i]['company_name'] + '</option>';
                            }
                        } else {
                            html += '<option value="0">None</option>';
                        }
                        
                        $('select[name=\'company\']').html(html);
                        if(json['user'].length == 1){
                            $("select[name=\'company\']").val($("select[name=\'company\'] option:eq(1)").val());
                            $('select[name=\'company\']').change();
                        } else {
                            $('select[name=\'company\']').parent().parent().show();
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        // Loop through the errors and display them
                        $.each(errors, function(key, value) {
                            $("#error-"+key).show();
                            $("#error-"+key).html(value);
                        });
                    } else {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                }
            });
        });
        $('select[name=\'company\']').on('change', function() {
            //alert(this.value);
            $('#button-find').button('loading');
            window.location.href = this.value;
        });
        //--></script>
@endsection