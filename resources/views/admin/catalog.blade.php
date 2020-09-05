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
</head>
<body>
<div class="container mt-5">
    <h1>Каталог спецтехники</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Изображение</th>
            <th scope="col">Название</th>
            <th scope="col">Категория</th>
            <th scope="col">Параметры</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($machines as $machine)
            <tr>
                <td class="align-middle">
                    <label>
                        <img style="height: 50px" src="{{ $machine->image }}" alt="image">
                        <input type="file" name="image" style="display: none">
                    </label>
                </td>
                <td class="align-middle">
                    <input type="text" class="form-control form-control-sm" name="name" value="{{ $machine->name }}">
                </td>
                <td class="align-middle">
                    <select class="custom-select custom-select-sm" name="machine_category_id">
                        @foreach ($categories as $category)
                            <option {{ $machine->machine_category_id == $category->id ? 'selected ' : '' }}
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="align-middle">
                    <table>
                        @foreach ($machine->parameters as $parameter)
                            <tr>
                                <td>
                                    {{ $parameter->categoryParameter->name }}:
                                </td>
                                <td>
                                    <input type="text" class="form-control form-control-sm" name="parameters[{{ $parameter->categoryParameter->id }}]"
                                           value="{{ $parameter->value }}">
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td class="align-middle">
                    <button class="btn btn-sm btn-primary" type="submit">Изменить</button>
                    <button class="btn btn-sm btn-danger" type="submit">Удалить</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
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
</body>
</html>
