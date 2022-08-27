<div>
    <x-slot name="header">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        <a href="{{ route('sensor.log.index') }}" class="ml-1 text-lg font-medium text-gray-600 hover:text-gray-900 hover:font-bold md:ml-2">Sensores</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">Registro</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-jet-form-section submit="registerSensorLog">
                    <x-slot name="title">
                        Registro de información de sensor
                    </x-slot>

                    <x-slot name="description">
                        Ingresar los datos obtenidos por el sensor de la crías con clasificación de carne Grasa Tipo 2 para identificar cuando están por enfermarse.
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-6">
                            <x-jet-label for="calf" value="Cría" />
                            <select name="calf" id="calf" wire:model="calf" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona una cría</option>
                                @foreach ($calves as $calf)
                                    <option value="{{$calf->id}}">{{$calf->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="calf" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="heart" value="Frecuencia cardiaca" />
                            <x-jet-input id="heart" type="text" class="mt-1 block w-full" wire:model="heart" autocomplete="heart" />
                            <x-jet-input-error for="heart" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="breathing" value="Frecuencia respiratoria" />
                            <x-jet-input id="breathing" type="text" class="mt-1 block w-full" wire:model="breathing" autocomplete="breathing" />
                            <x-jet-input-error for="breathing" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="blood" value="Frecuencia sanguínea" />
                            <x-jet-input id="blood" type="text" class="mt-1 block w-full" wire:model="blood" autocomplete="blood" />
                            <x-jet-input-error for="blood" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="temperature" value="Temperatura" />
                            <x-jet-input id="temperature" type="text" class="mt-1 block w-full" wire:model="temperature" autocomplete="temperature" />
                            <x-jet-input-error for="temperature" class="mt-2" />
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-jet-action-message class="mr-3" on="saved">
                            <span class="bg-green-300 rounded px-4 py-1 text-gray-700 font-bold mr-2">Registro exitoso</span>
                        </x-jet-action-message>
                        <x-jet-action-message class="mr-3" on="error">
                            <span class="bg-red-300 rounded px-4 py-1 text-gray-700 font-bold mr-2">Algo salió mal, inténtalo nuevamente</span>
                        </x-jet-action-message>

                        <x-jet-button>
                            Registrar
                        </x-jet-button>
                    </x-slot>
                </x-jet-form-section>

            </div>
        </div>
    </div>
</div>
