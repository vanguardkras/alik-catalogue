<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Каталог</title>
    <!-- Favicon-->
    <link rel="icon" href="http://alik-group.local/image/favicon.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <h1>Добавить новую единицу</h1>
    <form action="{{ route('create_machine') }}" method="post" enctype="multipart/form-data">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Изображение</th>
                <th scope="col">Название</th>
                <th scope="col">Категория</th>
                <th scope="col">Параметры</th>
                <th scope="col">Цена</th>
            </tr>
            </thead>
            <tbody>
            @csrf
            <tr>
                <td class="align-middle">
                    <label>
                        <input type="file" name="image" class="form-control-file" required>
                    </label>
                </td>
                <td class="align-middle">
                    <input type="text" class="form-control form-control-sm" name="name" required>
                </td>
                <td class="align-middle">
                    <select class="custom-select custom-select-sm" name="machine_category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="align-middle">
                    <table id="parameters">
                        <tr></tr>
                    </table>
                </td>
                <td class="align-middle">
                    <input type="number" name="price" class="form-control-sm form-control" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Создать</button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <h1>Каталог спецтехники</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Параметры</th>
            <th scope="col">Цена</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($machines as $machine)
            <form action="{{ route('patch_machine', ['machine' => $machine->id]) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <tr>
                    <td class="align-middle">
                        <label>
                            <img style="height: 80px" src="{{ asset('storage/' . $machine->image) }}" alt="image">
                            <input type="file" name="image" style="display: none">
                        </label>
                    </td>
                    <td class="align-middle">
                        <input type="text" class="form-control form-control-sm" name="name"
                               value="{{ $machine->name }}"><br>
                        (<span
                            class="small text-secondary">{{ $categories[$machine->machine_category_id - 1]->name }}</span>)
                    </td>
                    <td class="align-middle">
                        <table>
                            @foreach ($machine->parameters as $parameter)
                                <tr>
                                    <td>
                                        {{ $parameter->categoryParameter->name }}:
                                    </td>
                                    <td>
                                        <input type="text" class="form-control form-control-sm"
                                               name="parameters[{{ $parameter->id }}]"
                                               value="{{ $parameter->value }}">
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                    <td class="align-middle">
                        <input type="number" name="price" class="form-control-sm form-control"
                               value="{{ $machine->price }}">
                    </td>
                    <td class="align-middle">
                        <button class="btn btn-sm btn-primary" type="submit">Изменить</button>
                        <a class="btn btn-sm btn-danger"
                           onclick="return confirm('{{ 'Вы уверены, что хотите удалить эту единицу?' }}')"
                           href="{{ route('delete_machine', ['machine' => $machine->id]) }}">Удалить</a>
                    </td>
                </tr>
            </form>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    const categories = {!! $categories->toJson() !!};
    const select = $('[name="machine_category_id"]');
    const table = $('#parameters');

    function getParameterElement(id, name) {
        return `
        <tr>
        <td>${name}:</td>
        <td><input type="text" class="form-control form-control-sm" name="parameters[${id}]" required></td>
        </tr>
    `
    }

    function updateParameters() {
        table.empty();
        id = select.val();
        categories[id - 1].category_parameters.forEach(elem => {
            table.append(getParameterElement(elem.id, elem.name));
        })
    }

    updateParameters();

    select.change(function (element) {
        updateParameters();
    })
</script>
</body>
</html>
