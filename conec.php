class Conexion {
    function conectar(){
     $conn = pg_connect("user=djangowin password=12345 host=localhost port=5432 dbname=biblioteca");
     if (!$conn){
       echo"Error,problemas a conectar con el servidor";
       exit;
     }else{
      return $conn;
     }
    }
    function consultar($sql=null){
     $resultado= pg_query(Conexion::conectar(),$sql);
     $fila = array();
     while($row = pg_fetch_assoc($resultado)){
       $fila[] = $row;
    }
     return $fila;
    }
  }
$respuesta =Conexion::consultar("SELECT * FROM tabla):
print_r($respuesta);
