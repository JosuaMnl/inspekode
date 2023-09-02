@extends('layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <a href="" class="nav-link mb-5 text-center">
                        <img src="{{ asset('assets/images/footer-logo.png') }}" alt="Logo">
                    </a>
                    <div class="card mb-5">
                        <form action="{{ route('auth.login.login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror @error('credentials') is-invalid @enderror"
                                    id="email" name="email" placeholder="name@example.com" autocomplete="off"
                                    autofocus value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('credentials')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="****************">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary rounded-2">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-center">
                        Don't have an account? <a href="{{ route('auth.sign-up.show') }}">
                            <u>Sign Up</u>
                        </a>

                        <a href="{{ url('/login/google') }}" class="btn btn-google-plus"><svg aria-hidden="true"
                                width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#4285F4"
                                    d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18Z">
                                </path>
                                <path fill="#34A853"
                                    d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17Z">
                                </path>
                                <path fill="#FBBC05"
                                    d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07Z"></path>
                                <path fill="#EA4335"
                                    d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3Z">
                                </path>
                            </svg> Google</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
