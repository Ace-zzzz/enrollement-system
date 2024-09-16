@props(['student' => false])

<td class="px-6 py-4">
    <form method="POST" action="/enrolled/ {{ $student->LRN }}">
        @csrf
        @method('PATCH')
        <button type="submit"> {{ $slot }}</button>
    </form>
</td>