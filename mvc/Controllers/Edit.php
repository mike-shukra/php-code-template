<?php

namespace Controllers;

class Edit extends \App\Controller {

    public function index() {
        if ($_GET['id'] != null) $id = $_GET['id'];

        $task = $this->model::getTasksById($id);

        $params[tasks][task] = array('id' => $task[task][id], 'name' => $task[task][name], 'email' => $task[task][email], 'text' => $task[task][text], 'done' => $task[task][done], 'edit' => $task[task][edit]);

        return $this->render('Edit', $params);
    }

    public function save(){
        if ($_GET['id'] != null) $id = $_GET['id'];
        if ($_GET['name'] != null) $name = $_GET['name'];
        if ($_GET['email'] != null) $email = $_GET['email'];
        if ($_GET['text'] != null) $text = $_GET['text'];
        if ($_GET['done'] == 'on') $done = $_GET['done'];
        else $done = 'off';
        if ($_GET['edit'] == 'on') $edit = $_GET['edit'];
        else $edit = 'off';

        $params[task] = array('id' => $id, 'name' => $name, 'email' => $email, 'text' => $text, 'done' => $done, 'edit' => $edit);
        $params[tipe] = 'save';

        $this->model::saveTasks($params);

        return $this->render('Home', $params);
    }
}
