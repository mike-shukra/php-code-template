<?php

namespace App;

use App;

class Model
{
    public function getTasksById($id)
    {
        $file = file_get_contents("./results.json");
        $tasks = json_decode($file, true);
        unset($file);

        $taskItem = array();
        foreach ($tasks as $task) {
            if ($task[task][id] == $id) $taskItem = $task;
        }
        return $taskItem;
    }
    public function getTasks($sort)
    {
        $file = file_get_contents("./results.json");
        $tasks = json_decode($file, true);
        unset($file);

        switch ($sort) {
            case 'name':
                usort($tasks, function ($x, $y) {
                    return strcasecmp($x[task][name], $y[task][name]);
                });
                return $tasks;

            case 'email':
                usort($tasks, function ($x, $y) {
                    return strcasecmp($x[task][email], $y[task][email]);
                });
                return $tasks;

            case 'status':
                usort($tasks, function ($x, $y) {
                    return strcasecmp($x[task][status], $y[task][status]);
                });
                return $tasks;

            default:
                return $tasks;
        }
    }

    public function addTasks($params)
    {
        $file = file_get_contents('./results.json');
        $taskList = json_decode($file, true);
        unset($file);
        $id = 0;
        foreach ($taskList as $task) {
            if ($task[task][id] > $id) $id = $task[task][id];
        }

        $params[task][id] = $id + 1;

        $taskList[] = array('task' => $params[task]);
        file_put_contents('./results.json', json_encode($taskList));
        unset($taskList);
    }

    public function saveTasks($params)
    {
        if (\App\Session::get('loggedIn') == true) {
            $file = file_get_contents('./results.json');
            $taskList = json_decode($file, true);
            unset($file);

            $id = $params[task][id];
            for ($i = 0; $i < count($taskList); $i++) {
                if ($taskList[$i][task][id] == $id) $taskList[$i][task] = $params[task];
            }

            file_put_contents('./results.json', json_encode($taskList));
            unset($taskList);
        }
        else {
            header('Location: /Login');
        }
    }

    public function checkUsers($login, $password)
    {
        $file = file_get_contents("./users.json");
        $users = json_decode($file, true);
        unset($file);

        foreach ($users as $user) {
            if ($user[user][login] == $login && $user[user][password] == $password) {
                Session::init();
                Session::set('loggedIn', true);
                header('Location: /Home');
            }
        }
    }
    public function logout()
    {
        Session::destroy();
        header('Location: /Login');
        exit();
    }
}
