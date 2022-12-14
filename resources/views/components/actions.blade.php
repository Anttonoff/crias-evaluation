<div class="group inline-block text-center relative md:static">
    <button class="shadow rounded-lg outline-none focus:outline-none px-3 py-1 bg-white flex items-center min-w-32">
        <span class="pr-1 text-sm text-gray-500 font-semibold flex-1">Opciones</span>
        <span>
            <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </span>
    </button>
    <ul class="bg-white border rounded-lg transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top w-32 mt-1 z-40">
        {{ $slot }}
    </ul>
</div>
