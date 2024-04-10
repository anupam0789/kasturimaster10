@extends('layouts.app')
@section('content')
    <section class="contactpage-section">
        <div class="contact-info">
            <div class="contact-thumb">
                <img src="{{ asset('assets/images/thumb-reg.png') }}" alt="Register">
            </div>
        </div>
        <div class="contact-form">
            <h2>Fill in the form to Register</h2>
            <p>Asterisk (*) indicates the required fields</p>
            <form action="{{ route('customer-submit-register') }}" method="post">
            @csrf
                <div class="form-control-row form-half">
                    <div>
                        <label for="firstname">First name <span>*</span></label>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{ old('firstname') }}" required>
                        @error('firstname')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{ old('lastname') }}">
                    </div>
                </div>
                
                <div class="form-control-row form-full">
                    <div>
                        <label for="email">Email <span>*</span></label>
                        <input type="text" name="email" class="form-control" placeholder="Your email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-control-row form-full">
                    <div>
                        <label for="mobile">Mobile number <span>*</span></label>
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile number" value="{{ old('mobile') }}" required>
                        @error('mobile')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-control-row form-half">
                    <div>
                        <label for="company">Company <span>*</span></label>
                        <input type="text" name="company" class="form-control" placeholder="Company Name" value="{{ old('company') }}">
                        @error('company')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="domain">Domain <span>*</span></label>
                        <input type="text" name="domain" class="form-control" placeholder="Preferred Subdomain" value="{{ old('domain') }}" required>
                        @error('domain')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-control-row form-full">
                    <div>
                        <label for="address1">Address 1</label>
                        <input type="text" name="address1" class="form-control" placeholder="Address 1" value="{{ old('address1') }}">
                    </div>
                </div>
                <div class="form-control-row form-full">
                    <div>
                        <label for="address2">Address 2</label>
                        <input type="text" name="address2" class="form-control" placeholder="Address 2" value="{{ old('address2') }}">
                    </div>
                </div>
                <div class="form-control-row form-half">
                    <div>
                        <label for="city">City <span>*</span></label>
                        <input type="text" name="city" class="form-control" placeholder="City" required value="{{ old('city') }}" />
                        @error('city')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="state">State</label>
                        <input type="text" name="state" class="form-control" placeholder="State" value="{{ old('state') }}">
                    </div>
                </div>
                
                <div class="form-control-row form-full">
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" placeholder="Message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="form-control-row form-full text-center">
                    <button type="submit" class="btn btn-green" style="min-width: 200px;">Register Now</button>
                </div>
                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
            </form>
        </div>
    </section>
    @endsection