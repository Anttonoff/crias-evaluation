<div>
    <x-slot name="header">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        <span class="ml-1 text-lg font-medium text-gray-500 md:ml-2">Sensores</span>
                    </div>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <x-table title="Registros de sensores">
                    <x-slot name="columns">
                        <x-th text="Cría"> </x-th>
                        <x-th text="Frecuencia cardiaca"> </x-th>
                        <x-th text="Frecuencia respiratoria"> </x-th>
                        <x-th text="Frecuencia saguínea"> </x-th>
                        <x-th text="Temperatura"> </x-th>
                        <x-th position="text-center" text="Por enfermarse"> </x-th>
                        <x-th position="text-center" text="Registrado el"> </x-th>
                    </x-slot>

                    <x-slot name="actions">
                        <a href="{{ route('sensor.log.create') }}" class="pointer-events-auto rounded-md bg-blue-600 py-2 px-3 font-semibold leading-5 text-white hover:bg-blue-500">Registrar</a>
                    </x-slot>

                    @forelse ($sensorLogs as $log)
                        <tr class="hover:bg-gray-100">
                            <x-td>
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 bg-blue-100 rounded">
                                    {{$log->calf->name}}
                                </span>
                                <p class="text-sm font-medium text-gray-900 truncate overflow-ellipsis w-64">
                                    {{$log->calf->description}}
                                </p>
                            </x-td>
                            <x-td>
                                {{$log->heart_rate}}
                            </x-td>
                            <x-td>
                                {{$log->breathing_rate}}
                            </x-td>
                            <x-td>
                                {{$log->blood_rate}}
                            </x-td>
                            <x-td>
                                {{$log->temperature}}
                            </x-td>
                            <x-td position="text-center">
                                <span class="font-bold text-gray-700 truncate overflow-ellipsis w-64 px-1 {{ $log->is_healthy ? 'bg-green-200' : 'bg-red-200' }} rounded-full">
                                    {{ $log->is_healthy ? 'NO' : 'SI' }}
                                </span>
                            </x-td>
                            <x-td>
                                {{$log->created_at}}
                            </x-td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100">
                            <x-td colspan="6" position="text-center font-bold">
                                No se encontrarón resultados...
                            </x-td>
                        </tr>
                    @endforelse

                    <x-slot name="links">
                        {{ $sensorLogs->links() }}
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</div>
