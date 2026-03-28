<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">
                🔓 Login
            </h2>

            <!-- Subtitle -->
            <p class="text-sm text-gray-500 text-center mb-6">
                Welcome back! Please enter your details.
            </p>

            <!-- Session Status -->
            <x-auth-session-status 
                class="mb-4 text-green-600 text-sm text-center"
                :status="session('status')" 
            />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label 
                        for="email" 
                        :value="__('Email')" 
                        class="text-gray-700 font-medium"
                    />

                    <x-text-input 
                        id="email"
                        class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <x-input-error 
                        :messages="$errors->get('email')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label 
                        for="password" 
                        :value="__('Password')" 
                        class="text-gray-700 font-medium"
                    />

                    <x-text-input 
                        id="password"
                        class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                    />

                    <x-input-error 
                        :messages="$errors->get('password')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
                            name="remember"
                        >
                        <span class="ms-2 text-sm text-gray-600">
                            {{ __('Remember me') }}
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a 
                            class="text-sm text-indigo-600 hover:text-indigo-800 font-medium"
                            href="{{ route('password.request') }}"
                        >
                            {{ __('Forgot?') }}
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-2 rounded-lg text-sm font-semibold">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

            </form>

        </div>

    </div>

</x-guest-layout>