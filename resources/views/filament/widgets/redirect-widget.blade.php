<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col items-center justify-center text-gray-500 dark:text-gray-400">
            <h1 class="text-lg font-semibold">Daftar Display</h1>
            <p class="text-sm">
                Buka Display : <a href="{{ route('display') }}"
                    class="underline text-primary-600" target="_blank" onclick="window.open('{{ route('display') }}', 'newwindow', 'width=1366, height=768'); return false;">Display 1</a>.
            </p>

            <div style="position: relative; width: 100%; height: 100vh;">
                <iframe src="{{ route('display') }}" frameborder="0" scrolling="yes" style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
