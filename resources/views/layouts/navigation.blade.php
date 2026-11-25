<nav x-data="{ open: false }" class="border-b border-stone-200/70 bg-white" aria-label="เมนูหลัก">
    <div class="mx-auto flex min-h-20 max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
        <div class="flex min-w-0 items-center gap-10">
            <a href="{{ route('dashboard') }}" class="flex min-w-0 items-center gap-3 rounded-lg font-semibold text-[#153e35]">
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#153e35] text-[#c5e6a1]"><x-application-logo class="h-6 w-6 fill-current" /></span>
                <span class="truncate">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <div class="hidden items-center gap-2 sm:flex">
                <a href="{{ route('dashboard') }}" @class(['rounded-xl px-4 py-2.5 text-sm font-medium transition-colors', 'bg-emerald-50 text-emerald-900' => request()->routeIs('dashboard'), 'text-stone-500 hover:bg-stone-50 hover:text-stone-900' => ! request()->routeIs('dashboard')]) @if (request()->routeIs('dashboard')) aria-current="page" @endif>ภาพรวม</a>
                <a href="{{ route('profile.edit') }}" @class(['rounded-xl px-4 py-2.5 text-sm font-medium transition-colors', 'bg-emerald-50 text-emerald-900' => request()->routeIs('profile.edit'), 'text-stone-500 hover:bg-stone-50 hover:text-stone-900' => ! request()->routeIs('profile.edit')]) @if (request()->routeIs('profile.edit')) aria-current="page" @endif>โปรไฟล์</a>
            </div>
        </div>
        <div class="hidden items-center gap-4 sm:flex">
            <a href="{{ route('profile.edit') }}" class="flex min-w-0 items-center gap-3 text-sm text-stone-600">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-[#edf2e7] font-semibold text-[#245e4d]" aria-hidden="true">{{ mb_substr(Auth::user()->name, 0, 1) }}</span>
                <span class="max-w-32 truncate">{{ Auth::user()->name }}</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded-lg border border-stone-200 px-3 py-2 text-xs text-stone-500 transition-colors hover:border-emerald-700 hover:text-emerald-800">ออกจากระบบ</button>
            </form>
        </div>
        <button type="button" x-on:click="open = ! open" x-bind:aria-expanded="open" aria-controls="mobile-navigation" aria-label="เปิดหรือปิดเมนู" class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-stone-200 text-[#245e4d] sm:hidden">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path x-bind:d="open ? 'M6 6l12 12M6 18 18 6' : 'M4 6h16M4 12h16M4 18h16'" d="M4 6h16M4 12h16M4 18h16" /></svg>
        </button>
    </div>
    <div id="mobile-navigation" x-cloak x-show="open" x-on:keydown.escape="open = false" class="border-t border-stone-100 p-4 sm:hidden">
        <div class="flex flex-col gap-2">
            <p class="truncate px-3 py-2 text-sm text-stone-500">{{ Auth::user()->name }}</p>
            <a href="{{ route('dashboard') }}" class="rounded-lg px-3 py-3 text-sm text-[#245e4d] hover:bg-emerald-50" @if (request()->routeIs('dashboard')) aria-current="page" @endif>ภาพรวม</a>
            <a href="{{ route('profile.edit') }}" class="rounded-lg px-3 py-3 text-sm text-[#245e4d] hover:bg-emerald-50" @if (request()->routeIs('profile.edit')) aria-current="page" @endif>โปรไฟล์</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full rounded-lg px-3 py-3 text-left text-sm text-stone-500 hover:bg-stone-50">ออกจากระบบ</button>
            </form>
        </div>
    </div>
</nav>
