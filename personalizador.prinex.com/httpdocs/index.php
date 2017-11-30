<!DOCTYPE html>
<html lan="es">

<head>
  <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

  <!-- jQuery library -->
  <script src="./jquery-3.2.1.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>


  <style>
    .btn-primary {
      border-radius: 1.5em;
    }

    .btn-primary span {
      margin-left: 51em;
      margin-top: 0.5em;
    }

    .img-circle {
      border-style: solid;
      border-color: #ccddff;
      border-width: 7px;
      z-index: 1;

    }

    .tituloContenido {
      background-color: #ccddff;
      border-radius: 1.5em;
      margin-left: -1em;

    }

    .col-sm-6 {
      z-index: -1;
    }

    .tituloContenido p {
      display: inline;
      margin-left: 8em;
    }

    .variantes {
      display: block;
    }

    .variante {
      margin-top: 0.5em;
      margin-left: 7em;
    }

    .variante p {
      display: inline;
      color: #3377ff;
      font-weight: bold;
    }

    .variante input {
      margin-left: 0.8em;
    }

    .variante span {
      margin-left: 28em;
    }

    .tituloContenido span {
      margin-left: 9em;
    }

    .tituloContenido input {
      margin-left: 0.5em;
    }

    #data1 {
      margin-top: 1em;

    }

    #data1 p {
      margin-top: 0.5em;
    }

    .contenido {
      text-align: left;
      margin-left: 7em;
      margin-top: 1em;
    }
    .links{
      margin-left: 7em;
      margin-top:1em;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8 ">

        <button type="button" class="btn-primary btn-block btn-xs" data-toggle="collapse" data-target="#data1">
          <p>Seleccionar AIRES ACONDICIONADOS
            <span class="glyphicon glyphicon-menu-down"></span>
          </p>
        </button>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
    <div id="data1" class="row collapse">
      <div class="col-sm-3">
      </div>

      <div class="col-sm-1">
        <img class="img-circle" src="./muestra.PNG">
      </div>

	<div class="col-sm-6">
		<form>
			<div class="tituloContenido">
				<label for="contactChoice1"><p>Titulo nombre de producto</p><p>codigo producto</p><span>€</span></label>
				<input type="radio" id="contactChoice1" name="contact" value="email">	
			</div>
			<div class="variantes">
				<div class="variante">
				<label for="contactChoice2">nombre variante <span>€</span></label>
				<input type="radio" id="contactChoice2" name="contact" value="phone">
			  </div>
			  <div class="variante">
			  <label for="contactChoice3">nombre variante <span>€</span></label>
				<input type="radio" id="contactChoice3" name="contact" value="mail">
			  </div>
		</form>
		<form> 
  <p>Please select your preferred contact method:</p>
  <div>
    <input type="radio" id="contactChoice1"
           name="contact" value="email">
    <label for="contactChoice1">Email</label>
    <input type="radio" id="contactChoice2"
           name="contact" value="phone">
    <label for="contactChoice2">Phone</label>
    <input type="radio" id="contactChoice3"
           name="contact" value="mail">
    <label for="contactChoice3">Mail</label>
  </div>
  <div>
    <button type="submit">Submit</button>
  </div>
</form>
			  <div class="contenido">
				<p>
				  Antonio Bullo es el creador de esta colección, una propuesta con una marcada influencia esencialista. Moderna y dinámica,
				  presenta un diseño armonioso y compacto, con líneas bien definidas y formas casi geométricas, basada en figuras
				  minimalistas que otorgan elegancia y estilo en el cuarto de baño.
				</p>
			  </div>
			  <div class="links">
				<a href="http://www.roca.es/catalogo/colecciones/#!/colecciones-griferia/thesis">Fecha de producto<span class="glyphicon glyphicon-save-file"></span></a>
			  </div>
        </div>
      </div>

    </div>

  </div>


<div class="col-sm-6">
		<form>
			<div class="tituloContenido">
				<label for="contactChoice1"><p>Titulo nombre de producto</p><p>codigo producto</p><span>€</span></label>
				<input type="radio" id="contactChoice1" name="contact" value="email">	
			</div>
			<div class="variantes">
				<div class="variante">
				<label for="contactChoice2">nombre variante <span>€</span></label>
				<input type="radio" id="contactChoice2" name="contact" value="phone">
			  </div>
			  <div class="variante">
			  <label for="contactChoice3">nombre variante <span>€</span></label>
				<input type="radio" id="contactChoice3" name="contact" value="mail">
			  </div>
		</form>
		</div>

</body>

</html>