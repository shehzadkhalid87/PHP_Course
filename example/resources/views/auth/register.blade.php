<x-layout>
    <x-slot:heading>Register</x-slot:heading>


    <div class="max-w-2xl mx-auto mt-10 bg-white-80 p-6 rounded-2xl shadow-lg text-black">
        <form method="POST" action="/auth/register">
            @csrf
            <!-- First Name -->
            <x-form-field>
                <x-form_input type="text" id="first_name" name="first_name" placeholder="Enter your first Name"/>
                <x-form_error name="first_name"/>
                <x-form_error name="first_name"/>
            </x-form-field>


            <!-- last name -->
            <x-form-field>
                <x-form_input type="text" id="last_name" name="last_name" placeholder="Enter your last name"/>
                <x-form_error name="last_name"/>
            </x-form-field>

            <!-- Email Address -->
            <x-form-field>
                <x-form_input type="email" id="email_address" name="email"
                              placeholder="Enter your email address"/>
                <x-form_error name="email"/>
            </x-form-field>

            <!-- Password -->
            <x-form-field>
                <x-form_input type="password" id="password" name="password" placeholder="Enter your password"/>
                <x-form_error name="password"/>
            </x-form-field>

            <!--Confirm Password -->
            <x-form-field>
                <x-form_input type="password" id="password_confirmation" name="password_confirmation"
                              placeholder="Confirm your password"/>
                <x-form_error name="password_confirmation"/>
            </x-form-field>

            <!-- Register and Login Button -->
            <div class="flex flex-col sm:flex-row justify-between items-center mt-8">
                <button
                    type="submit"
                    class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300
               transition duration-200 px-6 py-2.5 rounded-lg font-semibold text-white shadow-md">
                    Sign Up
                </button>

                <a href="/auth/login"
                   class="mt-4 sm:mt-0 text-sm text-gray-600 hover:text-indigo-600 transition duration-200">
                    Already have an account?
                </a>
            </div>

        </form>
    </div>

</x-layout>
