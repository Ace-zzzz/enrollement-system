@props(['colspan'  => false ])
<th colspan="{{ $colspan }}" scope="col" class="text-base px-6 py-3">
    {{ $slot }}
</th>