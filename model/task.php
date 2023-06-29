<?php

class Task
{

    private $table = 'task';
    private $conection;

    public function __construct()
    {
    }

    /* Set conection */
    public function getConection()
    {
        $dbObj = new Db();
        $this->conection = $dbObj->conection;
    }

    /* Get all tasks */
    public function getTasks()
    {
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    /* Get task by id */
    public function getTaskById($id)
    {
        if (is_null($id)) return false;
        $this->getConection();
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    /* Save task */
    public function save($param)
    {
        $this->getConection();

        /* Set default values */
        $title = $content = "";

        /* Check if exists */
        $exists = false;
        if (isset($param["id"]) and $param["id"] != '') {
            $actualtask = $this->getTaskById($param["id"]);
            if (isset($actualtask["id"])) {
                $exists = true;
                /* Actual values */
                $id = $param["id"];
                $title = $actualtask["title"];
                $content = $actualtask["description"];
            }
        }

        /* Received values */
        if (isset($param["title"])) $title = $param["title"];
        if (isset($param["description"])) $content = $param["description"];

        /* Database operations */
        if ($exists) {
            $sql = "UPDATE " . $this->table . " SET title=?, description=? WHERE id=?";
            $stmt = $this->conection->prepare($sql);
            $res = $stmt->execute([$title, $content, $id]);
        } else {
            $sql = "INSERT INTO " . $this->table . " (title, description) values(?, ?)";
            $stmt = $this->conection->prepare($sql);
            $stmt->execute([$title, $content]);
            $id = $this->conection->lastInsertId();
        }

        return $id;
    }

    /* Delete task by id */
    public function deleteTaskById($id)
    {
        $this->getConection();
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conection->prepare($sql);
        return $stmt->execute([$id]);
    }
}
