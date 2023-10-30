<div class="max-w-md mx-auto p-6 bg-white rounded-md shadow">
    <div class="mb-4">
        <div class="text-center mb-4">
            <div class="flex items-center justify-center">
                @for ($i = 1; $i <= 3; $i++)
                    <div
                        class="w-8 h-8 mx-1 rounded-full border-2 {{ $step >= $i ? 'border-green-500' : 'border-gray-300' }}">
                        @if ($step >= $i)
                            {{ $i }}
                        @endif
                    </div>
                @endfor
            </div>

        </div>
    </div>

    <form wire:submit="save">
        @if ($step === 1)
            <div>
                <label for="nombre" class="block font-semibold mb-2">Nombre</label>
                <input type="text" class="w-full p-2 border rounded-md" wire:model="data.1.nombre">
                @error('data.1.nombre')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="mt-8">
                    <x-forms.tinymce-editor />
                </div>
            </div>
        @elseif ($step === 2)
            <div>
                <div>
                    <label for="summary" class="block font-semibold mb-2">Summary</label>
                    <input type="text" class="w-full p-2 border rounded-md" wire:model="data.2.summary">
                    @error('data.2.summary')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        @elseif ($step === 3)
            <label for="precio" class="block font-semibold mb-2">Precio</label>
            <input type="text" class="w-full p-2 border rounded-md" wire:model="data.3.precio">
            @error('data.3.precio')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        @endif
        @if ($step >= 3)
            <div class="mt-4 flex justify-between">
                <div></div>
                <button type="submit" class="bg-green-500 text-white p-2 rounded-md">Enviar</button>
            </div>
        @endif
    </form>

    <div class="mt-4 flex justify-between">
        @if ($step > 1)
            <button wire:click="previousStep" class="bg-gray-500 text-white p-2 rounded-md">Anterior</button>
        @endif

        @if ($step < 3)
            <button wire:click="nextStep" class="bg-blue-500 text-white p-2 rounded-md">Siguiente</button>
        @endif
    </div>

    @if ($success === true)
        <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow">
            <div class="text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 mx-auto text-green-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h2 class="mt-6 text-2xl font-semibold text-center text-gray-800">El formulario fue diligenciado con éxito
            </h2>
        </div>
    @endif
</div>



</div>
