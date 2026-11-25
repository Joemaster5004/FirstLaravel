<section class="flex flex-col gap-6">
    <header>
        <h2 class="text-lg font-semibold text-[#153e35]">
            {{ __('ลบบัญชี') }}
        </h2>

        <p class="mt-1 text-sm text-stone-500">
            {{ __('เมื่อคุณลบบัญชี ข้อมูลทั้งหมดจะถูกลบอย่างถาวร กรุณาดาวน์โหลดหรือเก็บข้อมูลที่ต้องการก่อนดำเนินการ') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('ลบบัญชี') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-semibold text-[#153e35]">
                {{ __('ยืนยันการลบบัญชีของคุณ?') }}
            </h2>

            <p class="mt-1 text-sm text-stone-500">
                {{ __('การดำเนินการนี้จะลบบัญชีและข้อมูลทั้งหมดอย่างถาวร และไม่สามารถกู้คืนได้ กรุณากรอกรหัสผ่านเพื่อยืนยัน') }}
            </p>

            <div class="mt-6">
                <x-input-label for="delete_account_password" value="{{ __('รหัสผ่าน') }}" class="sr-only" />

                <x-text-input
                    id="delete_account_password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="current-password"
                    required
                    placeholder="{{ __('รหัสผ่าน') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex flex-wrap justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('ยกเลิก') }}
                </x-secondary-button>

                <x-danger-button>
                    {{ __('ลบบัญชี') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
