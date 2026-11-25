<x-guest-layout :wide="true">
    <main class="min-h-screen bg-[#f7f8f5] p-4 sm:p-6 lg:p-8">
        <div class="mx-auto grid min-h-[calc(100svh-2rem)] max-w-[1440px] overflow-hidden rounded-3xl border border-stone-200/70 bg-white sm:min-h-[calc(100svh-3rem)] lg:min-h-[calc(100svh-4rem)] lg:grid-cols-2">
            <aside class="relative flex flex-col justify-between overflow-hidden bg-[#153e35] p-7 text-white sm:p-10 lg:p-14" aria-label="ยินดีต้อนรับ">
                <a href="{{ url('/') }}" class="relative z-10 flex w-fit items-center gap-3 rounded-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-white">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/25 bg-white/10"><x-application-logo class="h-6 w-6 fill-current" /></span>
                    <span class="text-lg font-semibold tracking-wide">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <div class="relative z-10 flex flex-col gap-6 py-12 lg:py-16">
                    <span class="flex items-center gap-2 text-xs font-medium uppercase tracking-[0.22em] text-emerald-200"><span class="h-1.5 w-1.5 rounded-full bg-lime-300"></span> YOUR EVERYDAY WORKSPACE</span>
                    <h1 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-6xl">ทุกอย่างพร้อม<br>สำหรับวันใหม่<span class="text-[#c5e6a1]">.</span></h1>
                    <p class="max-w-sm text-sm leading-7 text-emerald-50/70 sm:text-base">พื้นที่สำหรับงานและสิ่งสำคัญของคุณ<br>เข้าสู่ระบบ แล้วเริ่มต้นต่อจากที่ค้างไว้</p>

                    <div class="relative hidden h-52 max-w-sm items-center justify-center sm:flex" aria-hidden="true">
                        <div class="absolute h-48 w-48 rounded-full border border-white/10"></div>
                        <div class="absolute h-36 w-36 rounded-full border border-white/10"></div>
                        <div class="absolute h-24 w-24 rounded-full border border-white/10"></div>
                        <div class="relative w-64 -rotate-6 rounded-2xl border border-white/20 bg-[#2b5148] p-5 shadow-2xl">
                            <div class="flex items-center gap-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-[#c5e6a1] text-[#153e35]"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m5 12 4 4L19 6" /></svg></span><div class="flex flex-col gap-2"><div class="h-2 w-24 rounded-full bg-white/70"></div><div class="h-1.5 w-16 rounded-full bg-white/25"></div></div></div>
                            <div class="mt-6 flex gap-1.5"><div class="h-1 flex-1 rounded-full bg-[#c5e6a1]"></div><div class="h-1 flex-1 rounded-full bg-[#c5e6a1]"></div><div class="h-1 flex-1 rounded-full bg-white/15"></div></div>
                        </div>
                        <span class="absolute bottom-5 right-2 flex h-12 w-12 rotate-12 items-center justify-center rounded-2xl bg-[#c5e6a1] text-2xl text-[#153e35] shadow-lg">✦</span>
                    </div>
                </div>

                <p class="relative z-10 text-xs text-emerald-50/50">พื้นที่เดียว เชื่อมต่อทุกวันของคุณ</p>
                <div class="pointer-events-none absolute -bottom-64 -left-48 h-[600px] w-[600px] rounded-full border border-white/5" aria-hidden="true"></div>
            </aside>

            <section class="flex flex-col justify-between gap-12 px-6 py-8 sm:px-12 lg:px-16 lg:py-12">
                <div class="flex items-center justify-end gap-2 text-sm text-stone-500">
                    @if (Route::has('register'))
                        <span>ยังไม่มีบัญชี?</span>
                        <a href="{{ route('register') }}" class="rounded font-semibold text-[#245e4d] underline-offset-4 hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-emerald-700">สมัครสมาชิก <span aria-hidden="true">↗</span></a>
                    @endif
                </div>

                <div class="mx-auto flex w-full max-w-sm flex-col gap-8">
                    <div class="flex flex-col gap-3">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-[#537b64]">WELCOME BACK</span>
                        <h2 class="text-3xl font-semibold tracking-tight text-stone-900 sm:text-4xl">ยินดีต้อนรับกลับมา</h2>
                        <p class="text-sm leading-6 text-stone-500">กรอกข้อมูลด้านล่างเพื่อเข้าสู่บัญชีของคุณ</p>
                    </div>

                    <x-auth-session-status class="rounded-xl bg-emerald-50 p-4" :status="session('status')" role="status" />

                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-6">
                        @csrf
                        <div class="flex flex-col gap-2">
                            <x-input-label for="email" value="อีเมล" />
                            <x-text-input id="email" class="block w-full rounded-xl border-stone-200 bg-stone-50/60 px-4 py-3.5 text-sm placeholder:text-stone-400 focus:border-emerald-700 focus:ring-emerald-700" type="email" name="email" :value="old('email')" placeholder="you@example.com" required autofocus autocomplete="username" :aria-invalid="$errors->has('email') ? 'true' : 'false'" :aria-describedby="$errors->has('email') ? 'email-error' : null" />
                            <x-input-error id="email-error" :messages="$errors->get('email')" />
                        </div>

                        <div class="flex flex-col gap-2" x-data="{ showPassword: false }">
                            <x-input-label for="password" value="รหัสผ่าน" />
                            <div class="relative">
                                <x-text-input id="password" class="block w-full rounded-xl border-stone-200 bg-stone-50/60 py-3.5 pl-4 pr-14 text-sm placeholder:text-stone-400 focus:border-emerald-700 focus:ring-emerald-700" type="password" x-bind:type="showPassword ? 'text' : 'password'" name="password" placeholder="กรอกรหัสผ่านของคุณ" required autocomplete="current-password" :aria-invalid="$errors->has('password') ? 'true' : 'false'" :aria-describedby="$errors->has('password') ? 'password-error' : null" />
                                <button type="button" x-cloak x-on:click="showPassword = ! showPassword" x-bind:aria-label="showPassword ? 'ซ่อนรหัสผ่าน' : 'แสดงรหัสผ่าน'" x-bind:aria-pressed="showPassword" aria-controls="password" class="absolute inset-y-1 right-1 flex w-11 items-center justify-center rounded-lg text-stone-400 hover:text-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-emerald-700">
                                    <svg x-show="! showPassword" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z" /><circle cx="12" cy="12" r="3" /></svg>
                                    <svg x-show="showPassword" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m3 3 18 18M10.6 5.1 12 5c6.5 0 10 7 10 7a22 22 0 0 1-3.3 4.2M6.2 6.2A22 22 0 0 0 2 12s3.5 7 10 7a11 11 0 0 0 5.8-1.7M10 10a3 3 0 0 0 4 4" /></svg>
                                </button>
                            </div>
                            <x-input-error id="password-error" :messages="$errors->get('password')" />
                        </div>

                        <div class="flex flex-wrap items-center justify-between gap-3 text-sm">
                            <label for="remember_me" class="inline-flex cursor-pointer items-center gap-2 text-stone-600">
                                <input id="remember_me" type="checkbox" class="rounded border-stone-300 text-emerald-800 focus:ring-emerald-700" name="remember" @checked(old('remember'))>
                                <span>จดจำการเข้าสู่ระบบ</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a class="rounded font-medium text-[#245e4d] underline-offset-4 hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-emerald-700" href="{{ route('password.request') }}">ลืมรหัสผ่าน?</a>
                            @endif
                        </div>

                        <button type="submit" class="flex w-full items-center justify-center gap-3 rounded-xl bg-[#245e4d] px-5 py-3.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-[#153e35] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-emerald-700">เข้าสู่ระบบ <span aria-hidden="true">→</span></button>
                    </form>
                </div>

                <p class="text-center text-xs leading-6 text-stone-400">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
            </section>
        </div>
    </main>
</x-guest-layout>
