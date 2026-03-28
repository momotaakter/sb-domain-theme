
<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6">

            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-2">
                🔐 Confirm Password
            </h2>

            <!-- Description -->
            <p class="text-sm text-gray-500 text-center mb-6">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </p>

            <!-- Form -->
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

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

                <!-- Button -->
                <div class="mt-6">
                    <x-primary-button class="w-full justify-center py-2 rounded-lg text-sm font-semibold">
                        {{ __('Confirm Password') }}
                    </x-primary-button>
                </div>

            </form>

        </div>

    </div>

</x-guest-layout>