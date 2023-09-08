@section('title', 'Perfil')
<x-app-layout>
    <x-slot name="content">
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mt-10 sm:mt-0">
                    <div class='md:grid md:grid-cols-3 md:gap-6'>
                        <x-section-title>
                            <x-slot name="title">Role</x-slot>
                            <x-slot name="description">Tu función dentro de la aplicación:</x-slot>
                        </x-section-title>

                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <label for="countries_disabled"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu rol dentro del
                                Binspro es: </label>
                            <select disabled id="countries_disabled"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a country</option>
                                <option value="US" selected>Usuario</option>
                                <option value="CA">Service Desk</option>
                            </select>
                        </div>
                    </div>
                </div>
                <x-section-border />
                <div class="mt-10 sm:mt-0">
                    <div class='md:grid md:grid-cols-3 md:gap-6'>
                        <x-section-title>
                            <x-slot name="title">Sedes</x-slot>
                            <x-slot name="description">En que sedes vas a participar:</x-slot>
                        </x-section-title>

                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <label for="sede"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ingresa la sede
                                para
                                confirma</label>
                            <x-input id="sede" type="text" class="mt-1 block w-full" />
                        </div>
                    </div>
                </div>

                <x-section-border />
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>

                    <x-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.two-factor-authentication-form')
                    </div>

                    <x-section-border />
                @endif

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />

                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </x-slot>
</x-app-layout>
