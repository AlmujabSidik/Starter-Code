@extends('layouts.custom')

@section('title', 'Verification Email')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-5 offset-xl-4">
            <div class="login-brand">
                <img src="{{ asset('assets/img/stisla.svg') }}" alt="logo" width="100"
                    class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">


                <div class="card-body">
                    <h5 class="font-weight-normal">Verify your email ✉️</h5>

                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            A new email verification link has been emailed to you!
                        </div>
                    @else
                        <p>Account activation link sent to your email address: {{ Auth::user()->email }} Please follow the
                            link
                            inside to continue.
                        </p>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}" class="needs-validation" novalidate="">
                        @csrf

                        <div class="form-group">
                            <div class="text-muted text-center">
                                Didn't get the mail? <button type="submit"
                                    style="color: blue;border: none;background: none">Resend Email</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>

            <div class="simple-footer">
                Copyright &copy; Stisla 2018
            </div>
        </div>
    </div>
@endsection
