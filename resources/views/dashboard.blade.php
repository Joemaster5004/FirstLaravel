<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-2">
            <p class="text-xs font-semibold tracking-[0.18em] text-[#537b64]">YOUR WORKSPACE</p>
            <h1 class="text-2xl font-semibold tracking-tight sm:text-3xl">ภาพรวม</h1>
            <p class="text-sm text-stone-500">ข้อมูลบัญชีและทุกสิ่งที่คุณต้องการเริ่มต้น</p>
        </div>
    </x-slot>

    <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-8 sm:px-6 lg:gap-8 lg:px-8">
        <section class="relative overflow-hidden rounded-3xl bg-[#153e35] p-7 text-white sm:p-10">
            <div class="relative z-10 flex max-w-2xl flex-col items-start gap-5">
                <span class="rounded-full border border-white/20 bg-white/5 px-3 py-1.5 text-xs text-[#c5e6a1]">พร้อมสำหรับวันใหม่</span>
                <h2 class="max-w-full break-words text-2xl font-semibold leading-relaxed sm:text-3xl">สวัสดี, {{ Auth::user()->name }} <span class="text-[#c5e6a1]">✦</span></h2>
                <p class="text-sm leading-7 text-emerald-50/70">ยินดีต้อนรับสู่พื้นที่ของคุณ ดูข้อมูลบัญชี<br class="hidden sm:block">และจัดการการตั้งค่าต่าง ๆ ได้จากที่นี่</p>
                <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-3 rounded-xl bg-[#c5e6a1] px-5 py-3 text-sm font-semibold text-[#153e35] transition-colors hover:bg-lime-100">จัดการโปรไฟล์ <span aria-hidden="true">→</span></a>
            </div>
            <div class="pointer-events-none absolute -right-28 -top-24 h-96 w-96 rounded-full border border-white/10" aria-hidden="true"></div>
            <div class="pointer-events-none absolute -bottom-44 right-0 h-96 w-96 rounded-full border border-white/10" aria-hidden="true"></div>
        </section>

        <div class="grid gap-5 md:grid-cols-3">
            <section class="flex min-w-0 flex-col gap-4 rounded-2xl border border-stone-200/70 bg-white p-6">
                <span class="text-xs font-medium text-stone-500">อีเมลของคุณ</span>
                <p class="break-all text-lg font-semibold text-[#153e35]">{{ Auth::user()->email }}</p>
                <a href="{{ route('profile.edit') }}#personal-information" class="text-xs text-[#537b64] hover:underline">แก้ไขข้อมูลอีเมล ↗</a>
            </section>
            <section class="flex flex-col gap-4 rounded-2xl border border-stone-200/70 bg-white p-6">
                <span class="text-xs font-medium text-stone-500">วันที่เข้าร่วม</span>
                <p class="text-lg font-semibold text-[#153e35]">{{ Auth::user()->created_at?->format('d/m/Y') ?? '—' }}</p>
                <p class="text-xs text-stone-400">จุดเริ่มต้นของพื้นที่ส่วนตัวของคุณ</p>
            </section>
            <section class="flex flex-col gap-4 rounded-2xl border border-stone-200/70 bg-white p-6">
                <span class="text-xs font-medium text-stone-500">ความปลอดภัย</span>
                <p class="text-lg font-semibold text-[#153e35]">รหัสผ่านบัญชี</p>
                <a href="{{ route('profile.edit') }}#security" class="text-xs text-[#537b64] hover:underline">จัดการรหัสผ่าน ↗</a>
            </section>
        </div>

        <section class="flex flex-col gap-5">
            <div class="flex items-center gap-3"><span class="h-1.5 w-1.5 rounded-full bg-[#537b64]" aria-hidden="true"></span><h2 class="text-lg font-semibold">จัดการบัญชีของคุณ</h2></div>
            <div class="grid gap-5 sm:grid-cols-2">
                <a href="{{ route('profile.edit') }}#personal-information" class="group flex items-center justify-between gap-5 rounded-2xl border border-stone-200/70 bg-white p-6 transition-colors hover:border-emerald-700">
                    <div class="flex flex-col gap-2"><h3 class="font-semibold text-[#153e35]">ข้อมูลส่วนตัว</h3><p class="text-sm leading-6 text-stone-500">อัปเดตชื่อและอีเมลให้เป็นปัจจุบัน</p></div>
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#edf2e7] text-[#245e4d]" aria-hidden="true">↗</span>
                </a>
                <a href="{{ route('profile.edit') }}#security" class="group flex items-center justify-between gap-5 rounded-2xl border border-stone-200/70 bg-white p-6 transition-colors hover:border-emerald-700">
                    <div class="flex flex-col gap-2"><h3 class="font-semibold text-[#153e35]">รหัสผ่านและความปลอดภัย</h3><p class="text-sm leading-6 text-stone-500">ตั้งรหัสผ่านใหม่เพื่อดูแลบัญชีของคุณ</p></div>
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#edf2e7] text-[#245e4d]" aria-hidden="true">↗</span>
                </a>
            </div>
        </section>
    </div>
</x-app-layout>
