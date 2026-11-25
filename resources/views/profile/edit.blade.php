<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2">
            <p class="text-xs font-semibold tracking-[0.18em] text-[#537b64]">ACCOUNT SETTINGS</p>
            <h1 class="text-2xl font-semibold tracking-tight sm:text-3xl">โปรไฟล์ของคุณ</h1>
            <p class="text-sm text-stone-500">ดูแลข้อมูลส่วนตัวและความปลอดภัยของบัญชี</p>
        </div>
    </x-slot>

    <div class="mx-auto grid max-w-7xl items-start gap-6 px-4 py-8 sm:px-6 lg:grid-cols-[280px_minmax(0,1fr)] lg:gap-8 lg:px-8">
        <aside class="flex min-w-0 flex-col gap-6 rounded-2xl border border-stone-200/70 bg-white p-6 lg:sticky lg:top-6">
            <div class="flex flex-col gap-3 border-b border-stone-100 pb-6">
                <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#edf2e7] text-2xl font-semibold text-[#245e4d]" aria-hidden="true">{{ mb_substr($user->name, 0, 1) }}</span>
                <h2 class="break-words text-lg font-semibold text-[#153e35]">{{ $user->name }}</h2>
                <p class="break-all text-sm text-stone-500">{{ $user->email }}</p>
            </div>
            <nav aria-label="การตั้งค่าโปรไฟล์" class="flex flex-col gap-2 text-sm">
                <a href="#personal-information" class="rounded-xl px-3 py-3 text-[#245e4d] hover:bg-emerald-50">ข้อมูลส่วนตัว <span aria-hidden="true">↗</span></a>
                <a href="#security" class="rounded-xl px-3 py-3 text-[#245e4d] hover:bg-emerald-50">เปลี่ยนรหัสผ่าน <span aria-hidden="true">↗</span></a>
                <a href="#delete-account" class="rounded-xl px-3 py-3 text-red-600 hover:bg-red-50">ลบบัญชี</a>
            </nav>
        </aside>
        <div class="flex min-w-0 flex-col gap-6">
            <div id="personal-information" class="scroll-mt-6 rounded-2xl border border-stone-200/70 bg-white p-6 sm:p-8">
                <div class="max-w-xl">@include('profile.partials.update-profile-information-form')</div>
            </div>
            <div id="security" class="scroll-mt-6 rounded-2xl border border-stone-200/70 bg-white p-6 sm:p-8">
                <div class="max-w-xl">@include('profile.partials.update-password-form')</div>
            </div>
            <div id="delete-account" class="scroll-mt-6 rounded-2xl border border-red-200/70 bg-white p-6 sm:p-8">
                <div class="max-w-xl">@include('profile.partials.delete-user-form')</div>
            </div>
        </div>
    </div>
</x-app-layout>
