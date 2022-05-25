<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Zadanie 8 </title>
</head>
<body>

    Zadanie 8a
    <form action="login.php" method="post">
        Login: <input type="text" name="login" /> 
        <br/> 
        Hasło: <input type="password" name="hasło" /> 
        <br/>
        <input type="checkbox" name="zapamietaj">Zapamiętaj mnie</input>
        <br/>
        <button type="submit">Prześlij formularz</button>
    </form>
    <br>
    Zadanie 8b
    <p>
  Który kolor wolisz?
</p>

<p>
  <label>
    <input type="radio"> Czerwony
  </label>
</p>

<p>
  <label>
    <input type="radio"> Zielony
  </label>
</p>

<p>
  <label>
    <input type="radio"> Niebieski
  </label>
</p>
<br>
<select>
  <option>Opcja 1</option>
  <option>Opcja 2</option>
  <option>Opcja 3</option>
</select>
<br>
<p>
  Które kolory lubisz?
</p>

<p>
  <label>
    <input type="checkbox" name="kolor[]" value="red"> Czerwony
  </label>
</p>

<p>
  <label>
    <input type="checkbox" name="kolor[]" value="green"> Zielony
  </label>
</p>

<p>
  <label>
    <input type="checkbox" name="kolor[]" value="blue"> Niebieski
  </label>
</p>


</body>
</html>