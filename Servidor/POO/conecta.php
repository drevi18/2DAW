<?php
class Conecta {
    const FILAS = 6;
    const COLUMNAS = 7;
    const FICHA_VACIA = 0;
    const JUGADOR_1 = 1;
    const JUGADOR_2 = 2;
    const COLOR_JUGADOR_1 = 'red';
    const COLOR_JUGADOR_2 = 'yellow';
    private array $tablero;
    private int $jugadorActual;
    private int $ultimoGanador = 0;



    public function __construct() {
        $this->tablero = array_fill(0, self::COLUMNAS, []);
        $this->jugadorActual = rand(self::JUGADOR_1, self::JUGADOR_2);
        $this->ultimoGanador = 0;
    }

    public function InsertarValor(int $columna): bool {
        if ($columna < 0 || $columna >= self::COLUMNAS || count($this->tablero[$columna]) >= self::FILAS) {
            return false;
        }
        $jugadorQueInserta = $this->jugadorActual;

        $this->tablero[$columna][] = $jugadorQueInserta;
        if ($this->ComprobarGanador() === 0) {
            $this->cambiarTurno();
        } else {
            $this->ultimoGanador = $jugadorQueInserta;
        }

        return true;
    }



    private function cambiarTurno(): void {
        $this->jugadorActual = ($this->jugadorActual === self::JUGADOR_1) ? self::JUGADOR_2 : self::JUGADOR_1;
    }


    public function ComprobarGanador(): int {
        for ($c = 0; $c < self::COLUMNAS; $c++) {
            $fichasColumna = count($this->tablero[$c]);


            if ($fichasColumna >= 4) {
                for ($r = 0; $r <= $fichasColumna - 4; $r++) {
                    $ficha = $this->tablero[$c][$r];
                    if ($ficha !== self::FICHA_VACIA && $ficha === $this->tablero[$c][$r + 1] && $ficha === $this->tablero[$c][$r + 2] && $ficha === $this->tablero[$c][$r + 3]) {
                        return $ficha;
                    }

                }
            }
        }
        for ($r = 0; $r < self::FILAS; $r++) {
            for ($c = 0; $c <= self::COLUMNAS - 4; $c++) {


                $ficha = $this->tablero[$c][$r] ?? self::FICHA_VACIA;

                if ($ficha !== self::FICHA_VACIA && $ficha === ($this->tablero[$c + 1][$r] ?? self::FICHA_VACIA) && $ficha === ($this->tablero[$c + 2][$r] ?? self::FICHA_VACIA) && $ficha === ($this->tablero[$c + 3][$r] ?? self::FICHA_VACIA)) {
                    return $ficha;
                }
            }
        }
        return 0;
    }

    public function tableroLleno(): bool {
        $fichasTotales = 0;


        foreach ($this->tablero as $columna) {
            $fichasTotales += count($columna);
        }
        return $fichasTotales === (self::FILAS * self::COLUMNAS);
    }

    public function getGanador(): int { 
        return $this->ultimoGanador; 

    }

    public function getTablero(): array { 
        return $this->tablero; 
    }
    public function getJugadorActual(): int {
         return $this->jugadorActual; 
        
        }


    public function getColumnas(): int { 
        return self::COLUMNAS; 
    }
    public function getFilas(): int {

        return self::FILAS; 
    }


    public function getColorActual(): string {
        if ($this->jugadorActual === self::JUGADOR_1) {

            return self::COLOR_JUGADOR_1;
        } else {
            return self::COLOR_JUGADOR_2;
        }
        
    }



}

session_start();

if (isset($_SESSION['conecta_juego'])) {
    $conecta = $_SESSION['conecta_juego'];

} else {
    $conecta = new Conecta();
}

$mensaje = "";
$ganador = $conecta->ComprobarGanador();
$juegoTerminado = ($ganador !== 0 || $conecta->tableroLleno());



if (isset($_POST['reiniciar'])) {
    $conecta = new Conecta();
    $mensaje = "¡El juego ha sido reiniciado!";
    $juegoTerminado = false;
}

if (!$juegoTerminado && isset($_POST['columna'])) {
    $columna = (int)$_POST['columna'];
    $seInserto = $conecta->InsertarValor($columna);


    if ($seInserto) {
        $ganador = $conecta->ComprobarGanador();
        if ($ganador !== 0) {
            $juegoTerminado = true;
            $mensaje = "¡Felicidades! ¡Ha ganado el Jugador $ganador!";


        } else {
            if ($conecta->tableroLleno()) {
                $juegoTerminado = true;
                $mensaje = "¡Empate! El tablero está lleno.";
            }
        }
    } else {
        $mensaje = "¡Columna llena! Por favor, elige otra.";
    }
}

$_SESSION['conecta_juego'] = $conecta;



$tablero = $conecta->getTablero();
$filas = $conecta->getFilas();
$columnas = $conecta->getColumnas();
$jugadorActual = $conecta->getJugadorActual();
$colorActual = $conecta->getColorActual();



$tableroHTML = [];
for ($r = $filas - 1; $r >= 0; $r--) {
    $filaActual = [];
    for ($c = 0; $c < $columnas; $c++) {
        $ficha = $tablero[$c][$r] ?? 0;
        $filaActual[] = $ficha;


    }
    $tableroHTML[] = $filaActual;
}
?>


<style>


body {

    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px;
    background-color: initial;
}


h1 { color: black; 
}
.mensaje { font-size: 1.2em; font-weight: bold; margin: 10px 0; 

}
.tablero {
    display: grid;
    grid-template-columns: repeat(<?= $columnas ?>, 50px);
    border: 3px solid black;
    background-color: black;
}


.celda {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    border: 1px solid black;
}

.ficha { width: 40px;
height: 40px;
border-radius: 50%;
background-color: white;
}

.jugador-1 { background-color: <?php echo Conecta::COLOR_JUGADOR_1; ?>; 
}


.jugador-2 { background-color: <?php echo Conecta::COLOR_JUGADOR_2; ?>; 
}

.controles { display: grid;
grid-template-columns: repeat(<?= $columnas ?>, 50px);
margin-bottom: 5px;
}

.controles button {
    width: 50px;
    height: 30px;
    cursor: pointer;
    background-color: green;
    color: white;
    border: none;
    font-size: 1.2em;
    line-height: 1;
    border-radius: 5px;
}


</style>

<h1>Juego Conecta 4</h1>

<?php
if ($juegoTerminado) {
    echo '<p class="mensaje" style="color: green;">' . $mensaje . "</p>";
    echo "<form method='POST' style='margin-top: 10px;'>
        <button type='submit' name='reiniciar' value='1' style='background-color: blue;'>Jugar de Nuevo</button>
        </form>";


} else {
    echo '<p class="mensaje">Turno del Jugador <span style="color: ' . $colorActual . ';">' . $jugadorActual . '</span></p>';
    if ($mensaje != "") { echo "<p class='mensaje' style='color: red;'>" . $mensaje . "</p>"; 
    }
}



echo "<div class='controles'>";
if (!$juegoTerminado) {

    echo "<form method='POST' style='display: contents;'>";
    for ($i = 0; $i < $columnas; $i++) {
        $columnaEstaLlena = count($tablero[$i]) >= $filas;
        $disabled_attr = $columnaEstaLlena ? ' disabled' : '';
        $titulo = 'Insertar en columna ' . ($i + 1);
        echo "<button type='submit' name='columna' value='" . $i . "' title='" . $titulo . "'" . $disabled_attr . ">+</button>";
    
    }
    echo "</form>";


} else {
    for ($i = 0; $i < $columnas; $i++) { echo "<button disabled>X</button>"; 
    }
}
echo "</div>";



echo "<div class='tablero'>";
foreach ($tableroHTML as $fila) {
    foreach ($fila as $ficha) {
        $claseFicha = '';
        if ($ficha === 1) { $claseFicha = 'jugador-1'; 
        
        }
        elseif ($ficha === 2) { $claseFicha = 'jugador-2'; 
        }
        echo "<div class='celda'><div class='ficha " . $claseFicha . "'></div></div>";
    }
}

echo "</div>";
?>

