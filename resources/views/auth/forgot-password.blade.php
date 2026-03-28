
<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">
                🔑 Reset Password
            </h2>

            <!-- Description -->
            <p class="text-sm text-gray-500 text-center mb-6">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <!-- Session Status -->
            <x-auth-session-status 
                class="mb-4 text-green-600 text-sm text-center"
                :status="session('status')" 
            />

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}">
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
                    />

                    <x-input-error 
                        :messages="$errors->get('email')" 
                        class="mt-2 text-red-500 text-sm" 
                    />
                </div>

                <!-- Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-2 rounded-lg text-sm font-semibold">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>

            </form>

        </div>

    </div>

</x-guest-layout>