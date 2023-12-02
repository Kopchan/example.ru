<x-layout>
    <x-slot:title>Информация о продукте "{{ $product->name }}"</x-slot:title>
    <div class="m-4">
        <p>ID продукта: {{ $product->id }}</p>
        <p>Наименование продукта: {{ $product->name }}</p>
        <p>Цена: {{ $product->price }}</p>
        <p>Количество: {{ $product->quantity }}</p>
        <p>Описание: {{ $product->description }}</p>
    </div>
</x-layout>
