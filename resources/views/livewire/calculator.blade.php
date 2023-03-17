<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="number1" placeholder="Number 1">
            <select class="w-24" wire:model="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="Number 2">
            <button wire:click="calculate">=</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
        <p class="text-3xl">{{ $test }}</p>
    </div>
</div>
