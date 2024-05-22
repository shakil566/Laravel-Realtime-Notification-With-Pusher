<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        .user-registration {
            margin: 0px auto;
            text-align: center;
            width: fit-content;
        }
    </style>

</head>

<body>
    <div class="user-registration">

        <h1>User Registration Form</h1>
        <form action="" method="POST">
            @csrf
            <fieldset>
                <legend>Register</legend>
                <label for="name">Name:</label>
                <input type="text" required placeholder="Please insert your name" name="name">
                <br><br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>

    </div>
</body>

</html>