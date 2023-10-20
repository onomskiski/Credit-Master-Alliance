<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 bg-emerald-400 text-black font-bold hover:bg-emerald-500 text-center flex justify-center items-center py-4 border-2 border-emerald-500 hover:bg-emerald-100 hover:text-emerald-950 font-bold']) }}>
    {{ $slot }}
</button>
