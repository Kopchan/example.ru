<x-layout>
    <x-slot:title>Информация о категории "{{ $category->name }}"</x-slot:title>
    <div class="m-4">
        <p>ID категории: {{ $category->id }}</p>
        <p>Название категории: {{ $category->name }}</p>
    </div>
</x-layout>
