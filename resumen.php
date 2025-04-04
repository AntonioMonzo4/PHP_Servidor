<?php

// TEMA 1 LENGUAJE PHP

//FORMAS DE GENERAR CONTENIDO 

echo expresión;
print(expresión);
<?= expresión ?> //solo variables apenas uso

//VARIABLES 

$nombre = "Nombre de Persona";
$num = 42;
$dec =4.2;
$bool = true;

//CONSTANTES

define("PI", 3.1416);
const IVA = 0.21;

//OPERADORES +-*/%
//COMPARACION == === != !== >= <= <=> <>
//LÓGICOS && || ! xor 

//REGOGER DATOS
isset($_GET['nombre']);
$nombre = $_GET["nombre"];

//CONDICIONALES

if (condition) {
    # code...
}

if (condition) {
    # code...
} else {
    # code...
}

switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

$nombre = $_GET['nombre'] ?: "desconocido";

//BUCLES 

while ($a <= 10) {
    # code...
}

do {
    # code...
} while ($a <= 10);

for ($i=0; $i < ; $i++) { 
    # code...
}

foreach ($variable as $key => $value) {
    # code...
}

//ARRAYS 

$frutas = array("naranja", "pera", "manzana");

$frutas2 = ["naranja", "pera", "manzana"];

$tam = count($frutas); // tamaño del array

foreach ($frutas as $fruta) {
    echo "$fruta <br />";
}

//ARRAYS ASOCIATIVOS 

$capitales = ["Italia" => "Roma",
    "Francia" => "Paris",
    "Portugal" => "Lisboa"];
$capitalFrancia = $capitales["Francia"]; // se accede al elemento por la clave, no la posición

$capitales["Alemania"] = "Berlín"; // añadimos un elemento

echo "La capital de Francia es $capitalFrancia <br />";
echo "La capital de Francia es {$capitales["Francia"]} <br />";

$capitales[] = "Madrid"; // se añade con la clave 0 !!! ¡¡¡No asignar valores sin clave!!!

//MËTODOS 

print_r($array);// muestra el contenido de todo el $array. Si queremos mostrar el contenido con un formato determinado, hemos de recorrer el array con foreach.
var_dump($mixed);// muestra el contenido del elemento recibido. Muestra más información que print_r.
$elem = array_pop($array);// elimina el último $elemento
array_push($array, $elem);//añade un $elemento al final
$booleano = in_array($elem, $array);// averigua si $elem está en el $array
$claves = array_keys($array);// devuelve las claves del $array asociativo
$tam = count($array);// devuelve el tamaño de $array
sort($array);// ordena los elementos del $array
isset($array[elemento]);// indica si existe/tiene valor elemento dentro del array
unset($array[elemento]);// elimina el elemento del array (deja un hueco)

//ARRAYS BIDIMENSIONALES 

$persona["nombre"] = "Bruce Wayne";
$persona["telefonos"] = ["966 123 456", "636 636 636"]; // array de arrays ordinarios
$persona["profesion"] = ["dia" => "filántropo", "noche" => "caballero oscuro"]; // array de arrays asociativos

echo $persona['nombre']." por la noche trabaja de ".$persona['profesion']['noche'];

//FUNCIONES

function nombreFuncion($par1, $par2=20, ...) {
    // código
    return $valor;
  }
  
  $resultado = nombreFuncion($arg1, $arg2, …);

//parámetros variables dentro de las funciones 
$arrayArgs = func_get_args(); //Obtiene un array con los parámetros
$cantidad = func_num_args(); //Obtiene la cantidad de parámetros recibidos
$valor = func_get_arg(numArgumento); // Obtiene el parámetro que ocupa la posición numArgumento.
//con ...$numeros lo disfrazamos de array 
//tambien podemos aignar nombres a los propios argumentos 


//BIBLIOTECA DE FUNCIONES 

include(archivo);  
include_once(archivo);
require(archivo); 
require_once(archivo);

//FUNCIONES PREDEFINIDAS
//CADENAS 

strlen;// obtiene la longitud de una cadena y devuelve un número entero
substr;// devuelve una subcadena de la cadena original
str_replace;// reemplaza caracteres en una cadena
strtolower y strtoupper;// Transforman una cadena de caracteres en la misma cadena en minúsculas o mayúsculas respectivamente.
trim;//elimina los espacios al principio y al final
ltrim / rtrim o chop;// Elimina los espacios iniciales / finales de una cadena.
str_pad;// rellena la cadenas hasta una longitud especificada y con el carácter o caracteres especificados.
strpos / strrpos: //busca en una cadena y devuelve la posición de la primera/última ocurrencia.
strstr / strchr (alias):// busca una cadena y devuelve la subcadena a partir de donde la ha encontrado
stristr// ignora las mayúsculas
substr_count() // número de veces que aparece la subcadena dentro de la cadena
substr_replace:// reemplaza parte de la cadena a partir de su posición, y opcionalmente, longitud

//MATEMÁTICAS
//constantes
M_PI, M_E, M_EULER, M_LN2, M_LOG2E, PHP_INT_MAX, PHP_FLOAT_MAX
//funciones
pow, sqrt, log, decbin, bindec, decoct, dechex, base_convert, max, min
//trigonometricas
sin, cos, tan, deg2rad, rad2deg
//aleatorios
rand(), mt_rand

//TIPOS DE DATOS 
floatval, intval, strval:// devuelve una variable del tipo de la función indicada
settype: //&fuerza la conversión
gettype: //obtiene el tipo
is_int, is_float, is_string, is_array, is_object//devuelve un booleano a partir del tipo recibido















//TEMA 2 POO

class NombreClase {
    // propiedades
    // y métodos
    }
    
    $ob = new NombreClase();

//Para acceder a estos utilizamos

$objeto->propiedad;
$objeto->método(parámetros);
$this->propiedad;
$this->método(parámetros);


//EJEMPLOS 

class Persona {
    private $nombre;
    private $edad;
    private $genero;
    private $ocupacion;

    // Constructor
    public function __construct($nombre, $edad, $genero, $ocupacion) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->genero = $genero;
        $this->ocupacion = $ocupacion;
    }

    // Métodos getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getOcupacion() {
        return $this->ocupacion;
    }

    // Métodos setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setOcupacion($ocupacion) {
        $this->ocupacion = $ocupacion;
    }

    // Método para mostrar información
    public function mostrarInformacion() {
        return "Nombre: $this->nombre, Edad: $this->edad, Género: $this->genero, Ocupación: $this->ocupacion";
    }
}

// Ejemplo de uso
$persona1 = new Persona("Carlos", 30, "Masculino", "Ingeniero");
echo $persona1->mostrarInformacion() . "<br>";

$persona2 = new Persona("Ana", 25, "Femenino", "Doctora");
echo $persona2->mostrarInformacion();


//EN PHP 8

class Persona {
    public function __construct(
        private string $nombre,
        private int $edad,
        private string $genero,
        private string $ocupacion
    ) {}

    // Métodos getters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function getGenero(): string {
        return $this->genero;
    }

    public function getOcupacion(): string {
        return $this->ocupacion;
    }

    // Métodos setters
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function setGenero(string $genero): void {
        $this->genero = $genero;
    }

    public function setOcupacion(string $ocupacion): void {
        $this->ocupacion = $ocupacion;
    }

    // Método para mostrar información
    public function mostrarInformacion(): string {
        return "Nombre: $this->nombre, Edad: $this->edad, Género: $this->genero, Ocupación: $this->ocupacion";
    }
}

// Ejemplo de uso
$persona1 = new Persona("Carlos", 30, "Masculino", "Ingeniero");
echo $persona1->mostrarInformacion() . "<br>";

$persona2 = new Persona("Ana", 25, "Femenino", "Doctora");
echo $persona2->mostrarInformacion();


//CLASES ESTATICAS 

<?php
class Utilidad {
    // Propiedad estática
    public static string $mensaje = "Bienvenido a PHP";

    // Método estático
    public static function saludar(string $nombre): string {
        return "Hola, $nombre. " . self::$mensaje;
    }
}

// Acceder a la propiedad estática
echo Utilidad::$mensaje . "<br>";

// Llamar al método estático sin instanciar la clase
echo Utilidad::saludar("Carlos");
?>
//INTROSPECCIÓN 

instanceof : permite comprobar si un objeto es de una determinada clase
get_class: devuelve el nombre de la clase
get_declared_class: devuelve un array con los nombres de las clases definidas
class_alias: crea un alias
class_exists / method_exists / property_exists: true si la clase / método / propiedad está definida
get_class_methods / get_class_vars / get_object_vars: Devuelve un array con los nombres de los métodos / propiedades de una clase / propiedades de un objeto que son accesibles desde dónde se hace la llamada.



if($deportivo instanceof Coche){
    echo "Si lo es";

}

if( method_exists($cochecito,'acelerar') && property_exists($cochecito,'color')){

    echo get_class($cochecito);
}

/**
 * Al asignar dos objetos no se copian, se crea una nueva referencia. Si queremos una copia, hay que clonarlo mediante el método clone(object) : object
 * Si queremos modificar el clonado por defecto, hay que definir el método mágico __clone() que se llamará después de copiar todas las propiedades.
 * 
 */


//HERENCIA 

class Producto {
    public $codigo;
    public $nombre;
    public $nombreCorto;
    public $PVP;

    public function mostrarResumen() {
        echo "<p>Prod:".$this->codigo."</p>";
    }
}

class Tv extends Producto {
    public $pulgadas;
    public $tecnologia;
}


$t = new Tv();
$t->codigo = 33;
if ($t instanceof Producto) {
    echo $t->mostrarResumen();
}

$padre = get_parent_class($t);
echo "<br>La clase padre es: " . $padre;
$objetoPadre = new $padre;
echo $objetoPadre->mostrarResumen();

//Sobreescribir método 

if (is_subclass_of($t, 'Producto')) {
    echo "<br>Soy un hijo de Producto";
}

class Tv extends Producto {
    public $pulgadas;
    public $tecnologia;
 
    public function mostrarResumen() {
       parent::mostrarResumen();
       echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
    }
 }


 //CONSTRUCTOR EN HIJOS 

 class Producto {
    public string $codigo;

    public function __construct(string $codigo) {
        $this->codigo = $codigo;
    }

    public function mostrarResumen() {
        echo "<p>Prod:".$this->codigo."</p>";
    }
}

class Tv extends Producto {
    public $pulgadas;
    public $tecnologia;

    public function __construct(string $codigo, int $pulgadas, string $tecnologia) {
        parent::__construct($codigo);
        $this->pulgadas = $pulgadas;
        $this->tecnologia = $tecnologia;
    }

    public function mostrarResumen() {
        parent::mostrarResumen();
        echo "<p>TV ".$this->tecnologia." de ".$this->pulgadas."</p>";
    }
}













// TEMA 3: CONEXIÓN A BASE DE DATOS 

//CONFIGURACIÓN Y CONEXIÓN 
//Primero definimos los parámetros

$host = "localhost:puerto";
$usuario = "tu_usuario";
$contrasena = "tu_contrasena";
$nombreBD = "nombre_de_la_base";

//Establecemos la conexión 
$conexion = mysqli_connect($host, $usuario, $contrasena, $nombreBD);

//después se comprueba si fue exitosa 

if (!$conexion) {
    // Si falla, imprime el error y detiene la ejecución
    die("Error de conexión: " . mysqli_connect_error());
    }
    echo "Conexión exitosa a la base de datos."; //Comenta esta línea
    // en el código final
    // Finalmente, cierra la conexión
    mysqli_close($conexion); // Comenta esta línea
    // en el código final
    

//Operaciones CRUD  todas antes del close 
//Insercción 

$sql1 = "INSERT INTO clientes (cliente_id, nombre, email) VALUES (123, 'Juan Perez', 'juan@example.com')";
$result1 = mysqli_query($conexion, $sql1);

if (!$result1) {
    echo "Error al insertar en 'clientes': " .
    mysqli_error($conexion) . "<br>";
} else {
    echo "Registro insertado en 'clientes' exitosamente.<br>";
    }
    echo "<br>";

//autoincrementado

$sql2 = "INSERT INTO productos (nombre, precio) VALUES ('Laptop', 1500)";
$result2 = mysqli_query($conexion, $sql2);
if (!$result2) {
echo "Error al insertar en 'productos': " .
mysqli_error($conexion) . "<br>";
} else {
// Obtener el ID insertado en la tabla autoincrementada
$idInsertado = mysqli_insert_id($conexion);
echo "Registro insertado en 'productos' exitosamente. ID insertado: " . $idInsertado . "<br>";
// Puedo necesitar el ID insertado para operaciones posteriores
}
// Cierra la conexión
mysqli_close($conexion);

//COMPROBAR SI EXISTE UN REGISTRO ANTES DE 

// Definir el valor de la clave que se usará para comprobar la
// existencia del registro
$cliente_id = 123;
// Consulta para comprobar si ya existe
// un registro con ese cliente_id
$sql_check = "SELECT cliente_id FROM clientes WHERE cliente_id = $cliente_id";
$result_check = mysqli_query($conexion, $sql_check);

if (!$result_check) {
die("Error en la consulta: " . mysqli_error($conexion));
}

if (mysqli_num_rows($result_check) > 0) {
// Si existe al menos una fila,
// significa que el registro ya existe
echo "El registro con cliente_id = $cliente_id ya existe.<br>";

} else {
// Si no existe, se procede a insertar el registro
$sql_insert = "INSERT INTO clientes (cliente_id, nombre, email) VALUES ($cliente_id, 'Juan Perez','juan@example.com')";

$result_insert = mysqli_query($conexion, $sql_insert);

if (!$result_insert) {
    echo "Error al insertar el registro: " .
    mysqli_error($conexion) . "<br>";
} else {
    echo "Registro insertado exitosamente.<br>";
}
}
// Cierra la conexión
    mysqli_close($conexion);

//ELIMINAR REGISTROS 

// Suponiendo que queremos borrar un registro en la tabla 'clientes'
por su clave primaria (cliente_id)
$cliente_id = 123;
// Primero, comprobamos si existe el registro
$sql_check = "SELECT cliente_id FROM clientes WHERE cliente_id = $cliente_id";
$result_check = mysqli_query($conexion, $sql_check);
if (!$result_check) {
die("Error en la consulta: " . mysqli_error($conexion));
}
if (mysqli_num_rows($result_check) > 0) {
// El registro existe, se procede a borrarlo
$sql_delete = "DELETE FROM clientes WHERE cliente_id = $cliente_id";
$result_delete = mysqli_query($conexion, $sql_delete);
if (!$result_delete) {
echo "Error al borrar el registro: " .
mysqli_error($conexion);
} else {
echo "Registro con cliente_id = $cliente_id borrado exitosamente.<br>";
}
} else {
echo "No se encontró registro con cliente_id = $cliente_id.<br>";
}
// Cierra la conexión
mysqli_close($conexion);

//LECTURA DE DATOS 

// Consulta simple: obtener todos
// los registros de la tabla 'clientes'
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $sql);
if (!$result) {
die("Error en la consulta: " . mysqli_error($conexion));
}
echo "<h2>Listado de clientes</h2>";
if (mysqli_num_rows($result) > 0) { // ¿ HAY REGISTROS ?
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
// Suponiendo que la tabla tiene las columnas:
// cliente_id, nombre y email
echo "<li>ID: " . $row['cliente_id'] . " - Nombre: " .$row['nombre'] . " - Email: " . $row['email'] . "</li>";

}

echo "</ul>";
} else {
echo "No se encontraron registros en la tabla clientes.";
}


//CON TODOS LOS REGISTROS 

// Consulta simple: obtener todos
// los registros de la tabla 'clientes'
$sql = "SELECT * FROM clientes";
$result = mysqli_query($conexion, $sql);
if (!$result) {
die("Error en la consulta: " . mysqli_error($conexion));}
echo "<h2>Listado de clientes</h2>";
$resultado = mysqli_query($conexion, $sql);
$filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
foreach ($filas as $fila) {
echo "Nombre: " . $fila['nombre'] . "<br>";
}


//ACTUALIZAR DATOS 

// Datos para la actualización
$cliente_id = 123; // Clave primaria del registro a actualizar
$nuevoEmail = "nuevoemail@example.com"; // Nuevo email a asignar
// Comprobar si existe el registro con ese cliente_id
$sql_check = "SELECT cliente_id FROM clientes WHERE cliente_id = $cliente_id";
$result_check = mysqli_query($conexion, $sql_check);
if (!$result_check) {
die("Error en la consulta de comprobación: " .mysqli_error($conexion));
}
if (mysqli_num_rows($result_check) > 0) {
// El registro existe, se procede a actualizar
$sql_update = "UPDATE clientes SET email = '$nuevoEmail' WHERE cliente_id = $cliente_id";
$result_update = mysqli_query($conexion, $sql_update);
if (!$result_update) {
echo "Error al actualizar el registro: " . mysqli_error($conexion) . "<br>";
} else {
if (mysqli_affected_rows($conexion) > 0) {
echo "Registro actualizado exitosamente.<br>";
} else {
echo "No se actualizó el registro. Puede que el email sea el mismo.<br>";
}
}
} else {
echo "No se encontró registro con cliente_id =
$cliente_id.<br>";
}

/*Modelo-Vista-Controlador
El patrón MVC (Modelo-Vista-Controlador) se utiliza para separar la lógica de la aplicación
en tres componentes:
● Modelo: Se encarga de la interacción con la base de datos y de la lógica de
negocio. Aquí se encuentran todas las operaciones CRUD (consultar, insertar,
actualizar, borrar).
● Vista: Se encarga de la presentación de los datos. Genera el HTML (u otro formato)
que se envía al usuario.
● Controlador: Actúa de intermediario, recibiendo las solicitudes del usuario,
invocando al Modelo para obtener o modificar datos y luego llamando a la Vista para
presentar la información.
*/

/* REF RÁPIDAS DE APUNTES 
1. mysqli_connect
Descripción: Establece una conexión al servidor MySQL.
Sintaxis:
mysqli_connect(string $host, string $username, string $password,
string $database, int $port = ?, string $socket = ?)
2. mysqli_connect_error
Descripción: Retorna el mensaje de error de la última conexión fallida.
Sintaxis:
mysqli_connect_error(): string
3. mysqli_set_charset
Descripción: Establece el juego de caracteres predeterminado para la conexión.
Sintaxis:
mysqli_set_charset(mysqli $connection, string $charset): bool
4. mysqli_query
Descripción: Ejecuta una consulta SQL en la base de datos.
Sintaxis:
mysqli_query(mysqli $connection, string $query)
5. mysqli_fetch_assoc
Descripción: Obtiene una fila de resultados como un array asociativo.
Sintaxis:
mysqli_fetch_assoc(mysqli_result $result): ?array
6. mysqli_fetch_all
Descripción: Obtiene todas las filas de un conjunto de resultados como un array.
Sintaxis:
mysqli_fetch_all(mysqli_result $result, int $resulttype =
MYSQLI_NUM): array
7. mysqli_prepare
Descripción: Prepara una consulta SQL para su ejecución.
Sintaxis:
mysqli_prepare(mysqli $connection, string $query): mysqli_stmt|false
8. mysqli_stmt_bind_param
Descripción: Asocia variables a los parámetros de una sentencia preparada.
Sintaxis:
mysqli_stmt_bind_param(mysqli_stmt $stmt, string $types, mixed
&$var1, mixed &...$vars): bool
9. mysqli_stmt_execute
Descripción: Ejecuta una sentencia preparada.
Sintaxis:
mysqli_stmt_execute(mysqli_stmt $stmt): bool
10. mysqli_stmt_get_result
Descripción: Recupera el conjunto de resultados de una sentencia preparada.
Sintaxis:
mysqli_stmt_get_result(mysqli_stmt $stmt): mysqli_result|false
11. mysqli_stmt_close
Descripción: Cierra una sentencia preparada.
Sintaxis:
mysqli_stmt_close(mysqli_stmt $stmt): void
12. mysqli_close
Descripción: Cierra una conexión previamente establecida.
Sintaxis:
mysqli_close(mysqli $connection): bool
13. mysqli_insert_id
Descripción: Devuelve el identificador generado automáticamente en la última consulta de
inserción.
Sintaxis:
mysqli_insert_id(mysqli $connection): int|string
14. mysqli_num_rows
Descripción: Devuelve el número de filas en un conjunto de resultados.
Sintaxis:
mysqli_num_rows(mysqli_result $result): int
15. mysqli_affected_rows
Descripción: Devuelve el número de filas afectadas por la última consulta ejecutada.
Sintaxis:
mysqli_affected_rows(mysqli $connection): int
16. mysqli_real_escape_string
Descripción: Escapa caracteres especiales en una cadena para utilizarla de forma segura
en una consulta SQL.
Sintaxis:
mysqli_real_escape_string(mysqli $connection, string $string):
string */



//SQL 
