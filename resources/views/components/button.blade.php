<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150 bg-btn-100 text-btntext-100 font-bold hover:bg-btn-200 text-center flex justify-center items-center py-4 border-2 border-btn-100 hover:bg-btn-200 hover:text-btntext-200 font-bold']) }}>
    {{ $slot }}
</button>
