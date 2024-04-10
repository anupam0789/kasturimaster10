@extends('layouts.app')
@section('content')
    <section class="inner-heading">
        <h1>Thank you for filling in the details. Our team will reach out to you shortly</h1>
    </section>
    <section>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </section>
    @endsection