<div>
    <x-slot name="header">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        <a href="{{ route('calf.index') }}" class="ml-1 text-lg font-medium text-gray-600 hover:text-gray-900 hover:font-bold md:ml-2">Crías</a>
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
                <x-jet-form-section submit="registerCalf">
                    <x-slot name="title">
                        Registro de cría
                    </x-slot>

                    <x-slot name="description">
                        Ingresar los datos necesarios para el registro de la cría, de esta manera regresara la clasificación de la carne segun las datos registrados.
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="name" value="Nombre" />
                            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model="name" autocomplete="name" />
                            <x-jet-input-error for="name" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="description" value="Descripción" />
                            <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model="description" autocomplete="description" />
                            <x-jet-input-error for="description" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="provider" value="Proveedor" />
                            <select name="provider" id="provider" wire:model="provider" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona un proveedor</option>
                                @foreach ($providers as $provider)
                                    <option value="{{$provider->id}}">{{$provider->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="provider" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="barnyard" value="Corral" />
                            <select name="barnyard" id="barnyard" wire:model="barnyard" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option value="">Selecciona un corral</option>
                                @foreach ($barnyards as $barnyard)
                                    <option value="{{$barnyard->id}}">{{$barnyard->name}}</option>
                                @endforeach
                            </select>
                            <x-jet-input-error for="barnyard" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="weigth" value="Peso (kg)" />
                            <x-jet-input id="weigth" type="text" class="mt-1 block w-full" wire:model="weigth" autocomplete="weigth" />
                            <x-jet-input-error for="weigth" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="muscle" value="Color musculo" />
                            <x-jet-input id="muscle" type="text" class="mt-1 block w-full" wire:model="muscle" autocomplete="muscle" />
                            <x-jet-input-error for="muscle" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="marbling" value="Marmoleo calidad" />
                            <x-jet-input id="marbling" type="text" class="mt-1 block w-full" wire:model="marbling" autocomplete="marbling" />
                            <x-jet-input-error for="marbling" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="cost" value="Costo" />
                            <x-jet-input id="cost" type="text" class="mt-1 block w-full" wire:model="cost" autocomplete="cost" />
                            <x-jet-input-error for="cost" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="date" value="Fecha" />
                            <x-jet-input id="date" type="date" class="mt-1 block w-full" wire:model="date" autocomplete="date" />
                            <x-jet-input-error for="date" class="mt-2" />
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
