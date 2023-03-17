<div class="p-15 flex justify-center gaps-6 items-center">
    <button wire:click="increment"
        class="rounded-full bg-blue-500 px-5 py-3 text-base mb-3 font-medium text-white transition duration-200 hover:bg-blue-600 active:bg-blue-700">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement">-</button>
</div>
