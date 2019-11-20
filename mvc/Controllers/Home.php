<?php

namespace Controllers;

class Home extends \App\Controller {

    public function index() {
        $params = array();
        $page = 0;
        if ($_GET['sort'] != null) $sort = $_GET['sort'];
        if ($_GET['page'] != null) $page = $_GET['page'];

        $tasks = $this->model::getTasks($sort);

        $pageCount = intval((count($tasks) - 1) / 3) + 1;
        $h = 0;
        for ($i = 0; $i < count($tasks); $i++) {
            for ($j = 0; $j < 3; $j++) {
                $params[tasks][$i][$j] = $tasks[$h][task];
                $h++;
            }
        }

        $params[pagination] = $pageCount;
        $params[tasks] = $params[tasks][$page];
        $params[tipe] = 'sort';
        if (\App\Session::get('loggedIn') == true) 
            $params[edit] = true;

        return $this->render('Home', $params);
    }


    public function createTask() {

        if ($_GET['name'] != null) $name = $_GET['name'];
        else $name = 'test';
        if ($_GET['email'] != null) $email = $_GET['email'];
        else $email = 'test@test.com';
        if ($_GET['text'] != null) $text = $_GET['text'];
        else $text = 'test job';

        $params[task] = array('name' => $name, 'email' => $email, 'text' => $text);
        $params[tipe] = 'add';

        $this->model::addTasks($params);

        return $this->render('Home', $params);
    }
    
}
