<x-layout>
    <x-slot:title>Редактирование товара</x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Наименование товара</label>
            <input class="form-control" id="name" name="name" type="text">
        </div>

        <div class="mb-3">
            <label class="form-label" for="price">Цена товара</label>
            <input class="form-control" id="price" name="price" type="number" step="0.01" min="0">
        </div>

        <div class="mb-3">
            <label class="form-label" for="quantity">Количество товара</label>
            <input class="form-control" id="quantity" name="quantity" type="number" step="1" min="0">
        </div>

        <div class="mb-3">
            <label class="form-label" for="description">Описание товара</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label" for="category_id">Категория</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Добавить данные</button>
        </div>
    </form>

</x-layout>
