<x-layout>
    <x-slot:title>Редактирование категории "{{ $category->name }}"</x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название категории</label>
            <input class="form-control" id="name" name="name" type="text" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Обновить</button>
        </div>
    </form>

</x-layout>
