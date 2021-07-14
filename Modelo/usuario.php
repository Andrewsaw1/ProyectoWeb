<?php
    Class Usuario{
        
        public function listarArticulos($con){
            $mysql=$con->conectar();
        
            $sql = "SELECT * FROM usuario";
            $stmt = $mysql->query($sql);

            return $stmt;
        } 
    }
?>