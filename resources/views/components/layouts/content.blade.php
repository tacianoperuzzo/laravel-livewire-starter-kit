<x-slot:sidebar>
    <x-layouts.sidebar />
</x-slot:sidebar>

<div class="container-fluid">
    @include('partials.header')
    {{ $slot }}
</div>
