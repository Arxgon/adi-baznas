<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex flex-col items-center justify-center text-gray-500 p-2">
            <h1 class="text-lg font-semibold">Daftar Display</h1>

            <div class="flex mb-4 items-start justify-end w-full">
                <button type="button"
                    class="m-2 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-dark hover:border-blue-600 hover:text-blue-600 focus:outline-none focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" onclick="window.open('{{ route('display') }}', 'newwindow', 'width=1366, height=768'); return false;">
                    Buka Display 1
                </button>
            </div>


            <div style="position: relative; width: 100%; height: 100vh;">
                <iframe src="{{ route('display') }}" frameborder="0" scrolling="yes" style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
