<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <h1>Form</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <p><label>Name: <input type="text" name="name" autofocus maxlength="8" required></label></p>
        <p><label>Last Name: <input type="text" name="lastNameFalse" disabled placeholder="Blocked space"></label></p>
        <p><label>Last Name: <input type="text" name="lastName" minlength="5" pattern="[A-Z]+"></label></p>

        <p><label>Test Button: <input type="button" name="testButton" value="Test Button"></label></p>

        <p><label for="sex">Sex</label></p>
        <p>Men: <input type="checkbox" name="sex" value="Men" checked></p>
        <p>Woman: <input type="checkbox" name="sex" value="Woman" checked></p>

        <p><label>Color: <input type="color" name="color"></label></p>

        <p><label>Date: <input type="date" name="date"></label></p>

        <p><label>Mail: <input type="mail" name="mail"></label></p>

        <p><label>File: <input type="file" name="file" multiple></label></p>

        <p><label>These data are hidden: <input type="hidden" name="hiddenData"></label></p>

        <p><label>Numbers: <input type="number" name="number"></label></p>

        <p><label>Password: <input type="password" name="password"></label></p>

        <p><label for="continent">Continent:</label></p>
        <p>South America<input type="radio" name="continent" value="South America"></p>
        <p>North America<input type="radio" name="continent" value="North America"></p>
        <p>Europe<input type="radio" name="continent" value="Europe"></p>

        <p><label>URL: <input type="url" name="url"></label></p>

        <p><label>Text Area: <textarea name="textarea" cols="30" rows="10"></textarea></label></p>


        <p><input type="submit" value="Submit"></p>

        <p>Movies:</p>
        <p>
            <select name="movies">
                <option value="Troya">Troya</option>
                <option value="Toy Story">Toy Story</option>
                <option value="Jurassic World">Jurassic World</option>
            </select>
        </p>



    </form>
    <?php
    ?>
</body>

</html>