<!DOCTYPE html>
<html lang="en">

<head>
<title>ITO investments</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/ITO.css">

<link rel="stylesheet" type="text/css" href="CSS/Menu.css">
<link rel="stylesheet" href="CSS/queries.css">
<link rel="stylesheet" href="CSS/grid.css">

<link rel="stylesheet" type="text/css" href="CSS/Contact.css">
<link rel="stylesheet" type="text/css" href="CSS/Footer.css">
</head>

<body>
	<?php include 'Menu.php'; ?>

	<div class="line">

	</div>
<div class="container">
  <div style="text-align:center">
    <h2>Contactanos</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="images/Bogota.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="Send.php" method="post">
        <label for="fname">Nombre</label>
        <input type="text" id="fname" name="name" placeholder="Tu nombre.." required>
        <label for="lname">Correo electrónico</label>
        <input type="text" id="lname" name="email" placeholder="Your correo electrónico.." required>

        <label for="subject">Escribenos</label>
        <textarea id="subject" name="subject" placeholder="Escribenos algo.." style="height:170px" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

	<?php include 'Footer.php'; ?>
</body>
</html>
