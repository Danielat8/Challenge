<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card " style="height: 500px; ">
            <div class="card-header  text-black text-start">
                <h5>{{ __('Register') }}</h5>
            </div>
            <div class="card-body pt-5" style=" padding: 180px;">
                <div class="card-body p-4">
                    <!-- Name -->
                    <div class="mb-3 row align-items-center">
                        <label for="name" class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-sm-9 position-relative">
                            <input id="name" type="text" class="form-control rounded-1 form-control-lg" name="name" :value="old('name')" required autofocus autocomplete="name">
                            <i class="fa-regular fa-address-book fa-xs position-absolute" style="right: 20px; top: 60%; transform: translateY(-60%);"></i>
                            @error('name')
                            <span class="text-danger mt-2 d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3 row align-items-center">
                        <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-sm-9">
                            <input id="email" type="email" class="form-control rounded-1 form-control-lg" name="email" :value="old('email')" required autocomplete="username">
                            @error('email')
                            <span class="text-danger mt-2 d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3 row align-items-center">
                        <label for="password" class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                        <div class="col-sm-9 position-relative">
                            <input id="password" type="password" class="form-control rounded-1 form-control-lg" name="password" required autocomplete="new-password">
                            <i class="fa-solid fa-unlock-keyhole fa-xs position-absolute" style="right: 20px; top: 50%; transform: translateY(-50%);"></i>
                            @error('password')
                            <span class="text-danger mt-2 d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="col-form-label me-3 align-middle" style="padding-right:20px;">{{ __('Confirm Password') }}</label>

                        <input id="password_confirmation" type="password" class="form-control rounded-1 d-inline-block w-auto align-middle form-control-lg" name="password_confirmation" required autocomplete="new-password" style="padding-right: 300px;">
                        <i class="fa-solid fa-unlock-keyhole fa-xs position-absolute" style="right: 212px; top: 61%; transform: translateY(-61%);"></i>
                        @error('password_confirmation')
                        <span class="text-danger mt-2 d-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" style="margin-left:26%">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>