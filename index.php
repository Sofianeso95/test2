<!DOCTYPE html>
<html>
    <head>
        <title>Calculatrice</title>
    </head>
    <body>
        <form method="post" action="calcul.php">
            <input type="number" name="a" required>
            <select name="operation" required>
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
            <input type="number" name="b" required>
            <button type="submit">Calculer</button>
        </form>
    </body>
</html>
