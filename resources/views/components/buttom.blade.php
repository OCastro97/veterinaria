<a
    {{ $attributes->merge(['class' => 'rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-cyan-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black-600', 'type' => 'submit']) }}>
    {{ $slot }}
</a>
