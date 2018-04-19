 <?php
require_once "../configurar.php";
 
class Movimiento
{
    protected $conexion;
    protected $db;
 
    public function conectar()
    {
        $this->conexion = mysql_connect("localhost" "root", "root");
        if ($this->conexion == 0) DIE("Lo sentimos, no se ha podido conectar con MySQL: " . mysql_error());
        $this->db = mysql_select_db("bancavirtual", $this->conexion);
        if ($this->db == 0) DIE("Lo sentimos, no se ha podido conectar con la base datos: " . DBNAME);
 
        return true;
 
    }
 
    public function desconectar()
    {
        if ($this->conectar->conexion) {
            mysql_close($this->$conexion);
        }
 
    }
 
    public function verMovimiento()
    {
           
         $tabla = "Movimiento";
        $query = mysql_query("SELECT * FROM Movimiento   ORDER BY idMovimiento DESC", $this->conexion);
         while ($row = mysql_fetch_row($query)) {
                                echo '<tr>';
                                echo '<td>'. $row[0] . '</td>';
                                echo '<td>'. $row[1] . '</td>';
                                echo '<td>'. $row[2] . '</td>';
                               // echo '<td width=250>';
                               // echo '<a class="btn btn-success" href="update.php?id='.$row['idProducto'].'">Actualizar</a>';
                                //echo ' ';
                                //echo '<a class="btn btn-danger" href="delete.php?id='.$row['idProducto'].'">Eliminar</a>';
                               // echo '</td>';
                                echo '</tr>';
                       }



}}
?>


