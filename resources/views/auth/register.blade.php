<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors-->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST"  action="{{action([App\Http\Controllers\Auth\RegisteredUserController::class, 'store']) }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('customlang.Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Surname -->
            <div>
                <x-label for="surname" :value="__('customlang.Surname')" />
                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
            </div>
            <div>
               <x-label for="group" :value="__('customlang.Group')" />
               <select id="group" class="block mt-1 w-full" type="number" name="group">
                   <option value="1">{{__('customlang.User')}}</option>
                   <option value="2">{{__('customlang.Administrator')}}</option>
                   <option value="3">{{__('customlang.IT department')}}</option>
               </select>
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('customlang.Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('customlang.Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('customlang.Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('customlang.Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
