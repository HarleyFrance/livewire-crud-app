<x-guest-layout>
    <!-- Session Status -->

    
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" class="space-y-4 md:space-y-6"  action="{{ route('login') }}">
        @csrf

         <!-- Email Address -->
        <div>
            <x-input-label for="email"   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" />


            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  
             class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-white-700 dark:border-gray-400 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

            <!-- Remember Me -->
      

        <div class="flex items-center justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-4">
                    <label for="remember_me">
                        <input id="remember_me" aria-describedby="remember_me" type="checkbox" class="w-3 h-3 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-white-700 dark:border-gray-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800" >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember_me" class="text-gray-500 dark:text-gray-400">{{ __('Remember me') }}</label>
                     </div>


                    </label>
                            
            </div>
           
                @if (Route::has('password.request'))
                    <a class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div> 

             <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                {{ __('Log in') }}
            </button>
        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don’t have an account yet? <a href="{{route('register')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
        </p> 
    
        
    </form>
</x-guest-layout>

