<?php
include 'classLanguage.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejemplo de internacionalización</title>
</head>
<body>
  <h1><?= $language->translate("Welcome"); ?></h1>
  
  <form action="" method="get">
    <label for="lang">Idioma:</label>
    <select name="lang" id="lang">
      <option value="en_US" <?= echo ($language->getLanguage() == 'en_US') ? 'selected' : ''; ?>>Inglés</option>
      <option value="es_ES" <?= echo ($language->getLanguage() == 'es_ES') ? 'selected' : ''; ?>>Español</option>
    </select>
    <input type="submit" value="Cambiar idioma">
  </form>
</body>
</html>
