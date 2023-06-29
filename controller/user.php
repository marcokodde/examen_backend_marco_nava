<?php

require_once 'model/user.php';

class userController
{
    public $UserObj;
    public $page_title;
    public $view;
    public $id;


    public function __construct()
    {
        $this->view = 'list_user';
        $this->page_title = '';
        $this->UserObj = new User();
    }

    /* Lista de Usuarios */
    public function list()
    {
        $this->page_title = 'Listado de Usuarios';
        return $this->UserObj->getUsers();
    }

    /* Edicion de Usuario */
    public function edit($id = null)
    {
        $this->page_title = $_GET["id"] ? 'Editar Usuario' : 'Crear Usuario';
        $this->view = 'edit_user';
        /* Se valida que se obtenga un id valido */
        if (isset($_GET["id"])) $id = $_GET["id"];
        return $this->UserObj->getUserById($id);
    }

    /* Edicion de Usuario */
    public function view($id = null)
    {
        $this->page_title = 'Datos de Usuario';
        $this->view = 'edit_user';
        /* Se valida que se obtenga un id valido */
        if (isset($_GET["id"])) $id = $_GET["id"];
        return $this->UserObj->getUserById($id);
    }

    /* Creacion o Actualizacion de Usuario */
    public function save()
    {
        $this->view = 'edit_user';
        $this->page_title = 'Crear Usuario';
        $id = $this->UserObj->save($_POST);
        $result = $this->UserObj->getUserById($id);
        $_GET["response"] = true;
        return $result;
    }

    /* Confirma el borrado de Usuario*/
    public function confirmDelete()
    {
        $this->page_title = 'Eliminar Usuario';
        $this->view = 'confirm_delete_user';
        return $this->UserObj->getUserById($_GET["id"]);
    }

    /* Borrar */
    public function delete()
    {
        $this->page_title = 'Borrado de Usuario';
        $this->view = 'delete_user';
        return $this->UserObj->deleteUserById($_POST["id"]);
    }

    public function edad($fecha)
    {
        return $this->UserObj->GetBirthday($fecha);
    }
}
