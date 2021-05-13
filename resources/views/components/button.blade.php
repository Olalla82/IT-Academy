<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-green-300 active:bg-green-500 focus:outline-none focus:border-green-500 focus:ring ring-green-200 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
