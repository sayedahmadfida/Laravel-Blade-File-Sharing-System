@include('layouts.partials.css')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">

            <div class="card shadow p-4 mt-3">
                <div class="text-center">
                    <img src="{{asset('assets/img/logo.png')}}" class="w-25 rounded-circle" alt="">
                   
                   <h2 class="text-center">Registration</h2>
                    
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                           
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group mt-2">
                                <label for="first-name">First Name</label>
                                <input id="first-name" placeholder="First Name" class="form-control" type="text" name="first_name"
                                    :value="old('first_name')" required autofocus autocomplete="first_name" />
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group mt-2">
                                <label for="last-name">Last Name</label>
                                <x-text-input id="last-name" placeholder="Last Name" class="form-control" type="text" name="last_name"
                                    :value="old('last_name')" required autofocus autocomplete="last_name" />
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-md-12">

                            <!-- Email Address -->
                            <div >
                                <label for="email"> Email</label>
                                <input id="email" placeholder="Email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-md-6">
                            <!-- Password -->
                            <div class="mt-2">
                                <label for="password"> Password</label>

                                <input id="password" placeholder="Password" class="form-control" type="password" name="password" required
                                    autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-md-6">

                            <!-- Confirm Password -->
                            <div class="mt-2">
                                <label for="password_confirmation"> Confirm Password</label>

                                <input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="mt-2 text-center">
                                <x-primary-button class="btn btn-primary w-100 mt-2">
                                    {{ __('Register') }}
                                </x-primary-button>
                                <a class="text-primary mt-2 d-block" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
