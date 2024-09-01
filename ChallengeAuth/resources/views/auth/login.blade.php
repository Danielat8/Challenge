<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4  " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card " style="height: 400px; ">
            <div class="card-header text-start">
                Login
            </div>
            <div class="card-body pt-5" style=" padding: 150px;">
                <!-- Email Address -->
                <div class="mb-3 row align-items-center">
                    <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-9">
                        <input id="email" type="email" class="form-control rounded-1" name="email" :value="old('email')" autofocus autocomplete="username">
                        <i class="fa-solid fa-file-signature fa-xs position-absolute" style="right: 154px; top: 27%; transform: translateY(-27%);"></i>
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label me-4">{{ __('Password') }}</label>
                    <input id="password" type="password" class=" form-control d-inline-block w-auto align-middle rounded-1" name="password" autocomplete="current-password" style="padding-right: 87px;">
                    <i class="fa-solid fa-file-signature fa-xs position-absolute" style="right: 154px; top: 42%; transform: translateY(-42%);"></i>
                </div>


                <!-- Remember Me -->
                <div class="mb-3 form-check d-flex justify-content-start " style="padding-left:116px;">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label ps-2">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex justify-content-end" style="margin-left:93px;">
                    @if (Route::has('password.request'))
                    <button type="submit" class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                    <a class="text-sm text-primary me-3 ps-4 fs-6 pt-2" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>

                    @endif
                </div>
            </div>
        </div>
    </form>

</x-guest-layout>