<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        :root {
            --primary-color: #090d15;
            --secondary-color: white;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: var(--primary-color)
        }

        .container {
            height: 100vh;
            width: 100vw;
            padding: 0 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: transparent;
        }

        form {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        form label {
            font-size: 26px;
            color: var(--secondary-color);
            font-weight: bolder;
        }

        form input,
        form select {
            border: 2px solid var(--secondary-color);
            border-radius: 15px;
            padding: 10px;
            color: var(--secondary-color);
            outline: none;
            font-size: 26px;
            margin-bottom: 15px;
            background: transparent;
        }

        form select option {
            color: black;
        }

        form button {
            padding: 25px 0;
            background: transparent;
            color: var(--secondary-color);
            font-size: 30px;
            border: 2px solid var(--secondary-color);
            border-radius: 15px;
            transition: 250ms ease-in-out;
            font-weight: bolder;
            cursor: pointer;
        }

        form button:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        img {
            height: 200px;
            filter: drop-shadow(1px 1px 1px black)
        }

    </style>
</head>

<body class="">
    <div class="container">
        <img src="https://tedxbenisuef.vercel.app/logoWhite.png" alt="TEDx Logo">
        <form action="{{ route('form.submit') }}" method="POST" class="bg-red-500">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" required autofocus />

            <label for="kind">Kind:</label>
            <select name="kind">
                <option value="member" selected>Member</option>
                <option value="leader">Leader</option>
            </select>

            <label for="committee">Committee:</label>
            <select name="committee">
                <option value="1">Management Board</option>
                <option value="2" selected>HR Committee</option>
                <option value="3">Public Relations Committee</option>
                <option value="4">FundRasing Committee</option>
                <option value="5">Social Media Committee</option>
                <option value="6">Content Writing Committee</option>
                <option value="7">Graphic Design Committee</option>
                <option value="8">Video Editing Committee</option>
                <option value="9">Coaching Committee</option>
                <option value="10">Organizing Committee</option>
                <option value="11">Technical Support Committee</option>
            </select>

            <label for="role">Role:</label>
            <input type="text" name="role" required />

            <label for="image">Image:</label>
            <input type="url" name="image" required />

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>
