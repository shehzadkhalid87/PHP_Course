<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm bg-white rounded-2xl shadow-md p-8 text-center">

            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
            <p class="text-gray-500 mb-6">Log in to continue</p>

            <!-- Login Form -->
            <form method="POST" action="/auth/login">
                @csrf

                <!-- Email -->
                <x-form-field>
                    <x-form_input type="email" id="email" name="email" :value="old('email')"
                                  placeholder="Enter your email">
                    </x-form_input>
                    <x-form_error name="email"/>
                </x-form-field>

                <!-- Password -->
                <x-form-field>
                    <x-form_input type="password" id="password" name="password"
                                  placeholder="Enter your password">
                    </x-form_input>
                    <x-form_error name="password"/>
                </x-form-field>
                <!-- Login Button -->
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg transition duration-200 shadow-sm">
                    Log In
                </button>

                <!-- Forgot password -->
                <a href="#" class="block text-blue-600 hover:underline mt-3 text-sm">Forgotten password?</a>

                <div class="border-t border-gray-300 my-6"></div>

                <!-- Create New Account -->
                <a href="/auth/register"
                   class="block w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-2.5 rounded-lg transition duration-200">
                    Create New Account
                </a>
            </form>
        </div>
    </div>
</x-layout>
