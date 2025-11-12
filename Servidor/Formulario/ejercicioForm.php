<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="./enviar.php" method = "post">

<h1>Formulario</h1>

<h3>Nombre y apellidos</h3>
<input type="text" name= "nombre" id ="">
<input type="text" name= "apellido" id=""> <br>

<h3>Contraseña</h3>
<input type="password" name= "contra" id="">

<h3>¿Que eres?</h3>
<select name="elegir" id="">
    <option value="alumno">Alumno</option>
    <option value="profesor">Profesor</option>
</select>

<h2>Actividades Favoritas</h2>
<input type="checkbox" name= "actividad[]" value="Programar">Programar <br>
<input type="checkbox" name= "actividad[]" value="Estudiar">Estudiar <br>
<input type="checkbox" name= "actividad[]" value="Leer">Leer <br>
<input type="checkbox" name= "actividad[]" value="Explicar">Explicar <br>
<input type="checkbox" name= "actividad[]" value="Descansar"> Descansar <br>

<h3>Género</h3>
<input type="radio" id="hombre" name="genero" value="M">Hombre 
<input type="radio" id="mujer" name="genero" value="F"> Mujer <br>

<h3>Edad</h3>
<input type="number" name = "edad" min = "18" max="99" ><br>

<h3>Algo que quieras decir</h3>
<textarea name="area" rows="4" cols="30"></textarea><br>

<h3>Elige un color</h3>
<input type="color" name ="color"><br>

<input type="hidden" name ="escondido"><br>
<input type="submit" name="boton" value="enviar">

</form>


</body>
</html>