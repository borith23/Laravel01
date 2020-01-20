<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>{{ $titleCusstomers }}</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                    <table class="table table-hover table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            @if (count($listCustomers) > 0)
                                @foreach ($listCustomers as $item)
                                    <tbody>
                                        <tr>
                                            <td>{{$item['id']}}</td>
                                            <td>{{$item['name']}}</td>
                                            <td>{{$item['email']}}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @else
                                Don't have item in array!!
                            @endif
                        </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>