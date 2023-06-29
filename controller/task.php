<?php

require_once 'model/task.php';

class taskController
{
    public $TaskObj;
    public $page_title;
    public $view;
    public $id;


    public function __construct()
    {
        $this->view = 'list_task';
        $this->page_title = '';
        $this->TaskObj = new Task();
    }

    /* Lista de Tareas */
    public function list()
    {
        $this->page_title = 'Listado de tareas';
        return $this->TaskObj->getTasks();
    }

    /* Edicion de Tarea */
    public function edit($id = null)
    {
        $this->page_title = $_GET["id"] ? 'Editar Tarea' : 'Crear Tarea';
        $this->view = 'edit_task';
        /* Se valida que se obtenga un id valido */
        if (isset($_GET["id"])) $id = $_GET["id"];
        return $this->TaskObj->getTaskById($id);
    }

    /* Creacion o Actualizacion de Tarea */
    public function save()
    {
        $this->view = 'edit_task';
        $this->page_title = 'Crear Tarea';
        $id = $this->TaskObj->save($_POST);
        $result = $this->TaskObj->getTaskById($id);
        $_GET["response"] = true;
        return $result;
    }

    /* Confirma el borrado de tarea*/
    public function confirmDelete()
    {
        $this->page_title = 'Eliminar Tarea';
        $this->view = 'confirm_delete_task';
        return $this->TaskObj->getTaskById($_GET["id"]);
    }

    /* Borrar */
    public function delete()
    {
        $this->page_title = 'Listado de Tareas';
        $this->view = 'delete_task';
        return $this->TaskObj->deleteTaskById($_POST["id"]);
    }
}
