<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">
                📝 Create Account
            </h2>

            <!-- Subtitle -->
            <p class="text-sm text-gray-500 text-center mb-6">
                Join us and start your journey 🚀
            </p>

            <!-- Form -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label 
                        for="name" 
                        :value="__('Name')" 
                        class="text-gray-700 font-medium"
                    />

                    <x-text-input 
                        id="name"
                        class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                        autocomplete="name"
                    />

                    <x-input-error 
                        :messages="$errors->get('name')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

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
                        autocomplete="new-password"
                    />

                    <x-input-error 
                        :messages="$errors->get('password')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label 
                        for="password_confirmation" 
                        :value="__('Confirm Password')" 
                        class="text-gray-700 font-medium"
                    />

                    <x-text-input 
                        id="password_confirmation"
                        class="block w-full mt-1 rounded-lg border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        type="password"
                        name="password_confirmation"
                        required
                        autocomplete="new-password"
                    />

                    <x-input-error 
                        :messages="$errors->get('password_confirmation')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

                <!-- Footer -->
                <div class="flex items-center justify-between mt-6">
                    <a 
                        class="text-sm text-indigo-600 hover:text-indigo-800 font-medium"
                        href="{{ route('login') }}"
                    >
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="px-5 py-2 rounded-lg text-sm font-semibold">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>

            </form>

        </div>

    </div>

</x-guest-layout>