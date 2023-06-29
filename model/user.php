<?php

class User
{

    private $table = 'users';
    private $conection;

    public function __construct()
    {
    }

    /* Agegando Conection */
    public function getConection()
    {
        $dbObj = new Db();
        $this->conection = $dbObj->conection;
    }

    /* Obteniendo todos los Usuarios*/
    public function getUsers()
    {
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /* Obtener el id del usuario */
    public function getUserById($id)
    {
        if (is_null($id)) return false;
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    /* Guardando los datos del usuario */
    public function save($param)
    {
        $this->getConection();

        /* Inicializamos variables */
        $name = $email = $password = $address = $phone = $birthday = "";

        /* inicializa en falso la variable exists */
        $exists = false;
        if (isset($param["id"]) and $param["id"] != '') {
            $user = $this->getUserById($param["id"]);
            if (isset($user["id"])) {
                $exists = true;
                /* Actual values */
                $id = $param["id"];
                $name = $user["name"];
                $email = $user["email"];
                $password = $user["password"];
                $address = $user["address"];
                $phone = $user["phone"];
                $birthday = $user["birthday"];
            }
        }

        /* Recibiendo valores */
        if (isset($param["name"])) $name = $param["name"];
        if (isset($param["email"])) $email = $param["email"];
        if (isset($param["password"])) $password = $param["password"];
        if (isset($param["address"])) $address = $param["address"];
        if (isset($param["phone"])) $phone = $param["phone"];
        if (isset($param["birthday"])) $birthday = $param["birthday"];


        /* Database operations */
        if ($exists) {
            $sql = "UPDATE " . $this->table . " SET name=?, email=?, password=? , address=? , phone=? , birthday=? WHERE id=?";
            $stmt = $this->conection->prepare($sql);
            $res = $stmt->execute([$name, $email, $password, $address, $phone, $birthday, $id]);
        } else {
            $sql = "INSERT INTO " . $this->table . " (name, email, password, address, phone, birthday) values(?, ?, ?, ?, ?, ?)";
            $stmt = $this->conection->prepare($sql);
            $stmt->execute([$name, $email, $password, $address, $phone, $birthday]);
            $id = $this->conection->lastInsertId();
        }

        return $id;
    }

    /* Delete task by id */
    public function deleteUserById($id)
    {
        $this->getConection();
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conection->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function GetBirthday($fecha)
    {
        $dias = explode("-", $fecha, 3);
        $dias = mktime(0, 0, 0, $dias[1], $dias[0], $dias[2]);
        $edad = (int)((time() - $dias) / 31556926);
        return $edad;
    }
}
