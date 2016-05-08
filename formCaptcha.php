<html>
<head> 
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>
<body>
<form action="index.php" method="post">
<label for="nombre"> Nombre </label>
<input name="nombre" type="text"> <br>

<label for="email"> Email </label>
<input name="email" type="email" required> <br/>
<input name="enviar" type="submit" value="verificar codigo">

<div class="g-recaptcha" data-sitekey=""></div>
</form>

</body>

</html>