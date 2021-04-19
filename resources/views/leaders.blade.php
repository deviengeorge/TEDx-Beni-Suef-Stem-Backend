<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leaders</title>
</head>

<body>
    <div class="contaienr" style="width: 60%; margin: auto;">
        <h1>Leaders</h1>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 70px">
            @foreach ($data as $person)
                <div style="display: flex; flex-direction: column">
                    <h2 style="text-align: center; font-weight: bold; margin: 0">{{ $person->name }}</h2>
                    <h3 style="text-align: center; margin: 0">{{ $person->title }}</h3>
                    <hr style="width: 150px" />
                    <br />
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
