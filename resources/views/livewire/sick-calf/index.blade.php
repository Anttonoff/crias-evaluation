<div>
    <x-slot name="header">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">Crías por enfermar</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-table title="Listado de crías por enfermar">
                    <x-slot name="columns">
                        <x-th text="Nombre y descripción"> </x-th>
                        <x-th text="Peso y costo"> </x-th>
                        <x-th text="Marmoleo y musculo color"> </x-th>
                        <x-th text="Clasificación y Corral"> </x-th>
                        <x-th text="Cuarentena"> </x-th>
                        <x-th position="text-center" text="Fecha"> </x-th>
                        <x-th position="text-center" text="Acciones"> </x-th>
                    </x-slot>

                    <x-slot name="actions">
                        @if(session()->has('success'))
                            <div x-data="{ show: true}"
                                x-init="setTimeout(() => show = false, 2000)"
                                x-show="show"
                                class="bg-green-300 rounded px-4 py-1 text-gray-700 font-bold mr-2">
                                Registro exitoso
                            </div>
                        @endif
                    </x-slot>

                    @forelse ($calves as $calf)
                        <tr class="hover:bg-gray-100">
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$calf->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-36">
                                    {{$calf->description}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$calf->weight}} kg
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    ${{$calf->cost}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    Calidad {{$calf->marbling}}
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    {{$calf->muscle_color}}
                                </p>
                            </x-td>
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $calf->meatClassification->type == 1 ? 'bg-green-200' : 'bg-red-200' }} rounded">
                                    {{$calf->meatClassification->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900">
                                    {{$calf->barnyard->name}}
                                </p>
                            </x-td>
                            <x-td position="text-center">
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $calf->is_in_quarantine ? 'bg-red-200' : 'bg-green-200' }} rounded-full">
                                    {{ $calf->is_in_quarantine ? 'SI' : 'NO' }}
                                </span>
                            </x-td>
                            <x-td>
                                {{$calf->date}}
                            </x-td>
                            <x-td>
                                <x-actions>
                                    <x-li-actions>
                                        <a href="{{ route('sick.calf.create', $calf->slug) }}">Registar cuarentena</a>
                                    </x-li-actions>
                                </x-actions>
                            </x-td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <x-td colspan="7" position="text-center font-bold">
                                No se encontrarón resultados...
                            </x-td>
                        </tr>
                    @endforelse
                </x-table>
            </div>
        </div>
    </div>
</div>
