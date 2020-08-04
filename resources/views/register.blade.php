<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
    </div>

    <div>
        <form action="/welcome" method="POST">
            @csrf
            <label for="first">First name:</label><br><br>
            <input type="text" id="first" name="first"><br><br>
            <label for="last">Last name:</label><br><br>
            <input type="text" id="last" name="last"><br><br>

            <label for="gender">Gender:</label><br><br>
            <input type="radio" name="gender" value="0">Male<br>
            <input type="radio" name="gender" value="1">Female<br>
            <input type="radio" name="gender" value="2">Other<br>
            <br>

            <label for="nationality">nationality:</label><br><br>
            <select name="nationality" id="nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Singapore">Singapore</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Australia">Australia</option>
            </select>
            <br><br>

            <label for="language">Language:</label><br><br>
            <input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
            <input type="checkbox" name="language" value="1">English<br>
            <input type="checkbox" name="language" value="2">Other<br>
            <br><br>

            <label for="bio">Bio:</label><br><br>
            <textarea id="bio" name="bio" rows="6" cols="60"></textarea><br>

            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
