@include('layouts.partials.css')
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 color-trans">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('assets/img/logo.png')}}" class="w-25 rounded-circle" alt="">
                           
                           <h2 class="text-center mt-2">Login</h2>
                            
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" placeholder="Email" class="form-control" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
    
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
    
                                <x-text-input id="password" placeholder="Password" class="form-control" type="password" name="password"
                                    required autocomplete="current-password" />
    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
    
                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me')
                                        }}</span>
                                </label>
                            </div>
    
                            <div class="d-flex flex-column text-center">
                                <button type="submit" class="mt-2 btn btn-primary w-100">Login</button>
                                 
                                <a class="text-primary mt-2 d-block" href="{{ route('register') }}">
                                    {{ __('Create New Acount') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>