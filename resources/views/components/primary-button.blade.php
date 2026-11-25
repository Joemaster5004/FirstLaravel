<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center gap-3 px-5 py-3 bg-[#245e4d] border border-transparent rounded-xl font-semibold text-sm text-white hover:bg-[#153e35] focus:outline-none focus:ring-2 focus:ring-emerald-700 focus:ring-offset-2 disabled:opacity-50 transition-colors']) }}>
    {{ $slot }}
</button>
