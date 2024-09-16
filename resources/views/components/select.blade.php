@props(['label' => false])

<div class="bg-gray-100 border border-black rounded-2xl p-2">
    <label> {{ $label }} </label>
    <select {{ $attributes }} class="bg-gray-100 text-black font-semibold" required>
         {{ $slot }}
    </select>
</div>