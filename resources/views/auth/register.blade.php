<x-guest-layout :wide="true" page-title="สมัครสมาชิก">
    <main class="min-h-screen bg-[#f7f8f5] p-4 sm:p-6 lg:p-8">
        <div class="mx-auto grid min-h-[calc(100svh-2rem)] max-w-[1440px] overflow-hidden rounded-3xl border border-stone-200/70 bg-white sm:min-h-[calc(100svh-3rem)] lg:min-h-[calc(100svh-4rem)] lg:grid-cols-2">
            <aside class="relative flex flex-col justify-between gap-10 overflow-hidden bg-[#153e35] p-7 text-white sm:p-10 lg:p-14">
                <a href="{{ url('/') }}" class="flex w-fit items-center gap-3 rounded-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/25 bg-white/10"><x-application-logo class="h-6 w-6 fill-current" /></span>
                    <span class="text-lg font-semibold tracking-wide">{{ config('app.name', 'Laravel') }}</span>
                </a>
                <div class="relative z-10 flex flex-col gap-6 lg:py-16">
                    <span class="flex items-center gap-2 text-xs font-medium tracking-[0.22em] text-emerald-200"><span class="h-1.5 w-1.5 rounded-full bg-lime-300"></span> A FRESH START</span>
                    <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-6xl">เริ่มต้นสิ่งดี ๆ<br>ในพื้นที่ของคุณ<span class="text-[#c5e6a1]">.</span></h1>
                    <p class="max-w-sm text-sm leading-7 text-emerald-50/70 sm:text-base">สร้างบัญชีของคุณ แล้วจัดการข้อมูลส่วนตัว<br>และสิ่งสำคัญได้ในที่เดียว</p>
                    <div class="hidden max-w-sm flex-col gap-4 rounded-2xl border border-white/15 bg-white/5 p-6 sm:flex">
                        <span class="text-sm font-medium text-[#c5e6a1]">เริ่มต้นง่าย ๆ เพียงไม่กี่ขั้นตอน</span>
                        <div class="flex items-center gap-3 text-sm text-white/80"><span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/10 text-xs">01</span> สร้างบัญชีด้วยอีเมลของคุณ</div>
                        <div class="flex items-center gap-3 text-sm text-white/80"><span class="flex h-7 w-7 items-center justify-center rounded-full bg-white/10 text-xs">02</span> ตั้งค่าข้อมูลส่วนตัว</div>
                        <div class="flex items-center gap-3 text-sm text-white/80"><span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#c5e6a1] text-xs text-[#153e35]">03</span> พร้อมสำหรับวันใหม่</div>
                    </div>
                </div>
                <p class="text-xs text-emerald-50/50">พื้นที่เดียว เชื่อมต่อทุกวันของคุณ</p>
            </aside>
            <section class="flex flex-col justify-between gap-10 px-6 py-8 sm:px-12 lg:px-16 lg:py-12">
                <p class="flex flex-wrap items-center justify-end gap-2 text-sm text-stone-500">มีบัญชีแล้ว? <a href="{{ route('login') }}" class="font-semibold text-[#245e4d] underline-offset-4 hover:underline">เข้าสู่ระบบ ↗</a></p>
                <div class="mx-auto flex w-full max-w-sm flex-col gap-7">
                    <header class="flex flex-col gap-3">
                        <span class="text-xs font-semibold tracking-[0.2em] text-[#537b64]">CREATE YOUR ACCOUNT</span>
                        <h2 class="text-3xl font-semibold tracking-tight text-stone-900 sm:text-4xl">สร้างบัญชีใหม่</h2>
                        <p class="text-sm leading-6 text-stone-500">ยินดีที่ได้รู้จัก มาเริ่มต้นไปด้วยกัน</p>
                    </header>
                    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <x-input-label for="name" value="ชื่อของคุณ" />
                            <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" placeholder="ชื่อ นามสกุล" required autofocus autocomplete="name" :aria-invalid="$errors->has('name') ? 'true' : 'false'" :aria-describedby="$errors->has('name') ? 'name-error' : null" />
                            <x-input-error id="name-error" :messages="$errors->get('name')" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <x-input-label for="email" value="อีเมล" />
                            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" placeholder="you@example.com" required autocomplete="username" :aria-invalid="$errors->has('email') ? 'true' : 'false'" :aria-describedby="$errors->has('email') ? 'email-error' : null" />
                            <x-input-error id="email-error" :messages="$errors->get('email')" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <x-input-label for="password" value="รหัสผ่าน" />
                            <x-text-input id="password" class="block w-full" type="password" name="password" placeholder="ตั้งรหัสผ่านของคุณ" required autocomplete="new-password" :aria-invalid="$errors->has('password') ? 'true' : 'false'" :aria-describedby="$errors->has('password') ? 'password-error' : null" />
                            <x-input-error id="password-error" :messages="$errors->get('password')" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <x-input-label for="password_confirmation" value="ยืนยันรหัสผ่าน" />
                            <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" placeholder="กรอกรหัสผ่านอีกครั้ง" required autocomplete="new-password" :aria-invalid="$errors->has('password_confirmation') ? 'true' : 'false'" :aria-describedby="$errors->has('password_confirmation') ? 'password-confirmation-error' : null" />
                            <x-input-error id="password-confirmation-error" :messages="$errors->get('password_confirmation')" />
                        </div>
                        <x-primary-button class="w-full justify-center">สร้างบัญชี <span aria-hidden="true">→</span></x-primary-button>
                    </form>
                </div>
                <p class="text-center text-xs text-stone-400">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
            </section>
        </div>
    </main>
</x-guest-layout>
