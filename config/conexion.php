<?php
class conectar {
    protected  $dbh;
    public function conexion(){
            try{
                 $this->dbh = new PDO(
                    "mysql:host=localhost;dbname;charset=utf8",
                    "root",
                    "",
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );
                echo "conexion exitosa a la base de datos";
                return $this->dbh;
            }catch(Exeption $e){
                echo "error DB:".$e->getMessage();
                die();
            }
    }
    public function set_names(){
        return $this->dbh->query("SET NAME'utf8'");
    }
}
$conexion = new conectar;
$conexion->Conexion();
?>