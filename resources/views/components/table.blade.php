@props(['title' => ''])
<h2 class="text-xl font-semibold text-gray-500 capitalize mb-4">{{ $title }}</h2>
<div class="bg-white rounded" {{ $attributes }}>
    <div class="card">
        <div class="card-body">
            <div class="grid grid-cols-3">
                <div class="col-span-3 text-right">
                    @if(isset($extras))
                        {{ $extras }}
                    @endif
                </div>
            </div>
            <div class="flex flex-col md:flex-row mb-8 justify-end items-center space-y-4 mt-5 mr-5">
                @if(isset($actions))
                {{ $actions }}
                @endif
            </div>
            <div class="md:overflow-hidden overflow-x-auto table-per">
                <div class="py-2 inline-block min-w-full">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    {{{ $columns }}}
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                {{ $slot }}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6">
        @if(isset($links))
        {{ $links }}
        @endif
    </div>
</div>
