<?php

    class Conexion{
        
        private $conexion = null;
        private $datos = array();


        public function __construct(){
            $this->conexion = new PDO("mysql:host=localhost;dbname=actividad10","root","");
        }

        public function SearchEmail($username){
            $username = htmlentities($username);
            $sql = "SELECT * FROM users WHERE email = ?";
            $stm = $this->conexion->prepare($sql);
            $stm->execute(array($username));
            while($dato = $stm->fetch(PDO::FETCH_OBJ)){
                $this->datos = $dato;
            }
            return $this->datos;
        }

        public function confirmPassword($username,$password){
            $username = htmlentities($username);
            $password = htmlentities($password);
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE email = ? and password = ?";
            $stm = $this->conexion->prepare($sql);
            $stm->bindParam(1,$username);
            $stm->bindParam(2,$password);
            $stm->execute();
            while($dato = $stm->fetch(PDO::FETCH_OBJ)){
                $datos = $dato;
            }
            return $datos;
        }


        public function singUp($username,$password){
            $username = htmlentities($username);
            $password = htmlentities($password);
            $password = md5($password);
            $sql = "INSERT INTO users(email,password) VALUES(?,?);";
            $stm = $this->conexion->prepare($sql);
            return $stm->execute(array($username,$password));

        }

    }


?>