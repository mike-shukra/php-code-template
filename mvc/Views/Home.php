<div class="container marketing">

    <h1 class="featurette-heading mb-5">Задачи</h1>

    <div class="row featurette">
        <div class="col-md-7">
            <?
            switch ($params[tipe]) {
                case 'add':
                    echo 'Задача добавлена';
                    break;
                case 'save':
                    echo 'Задача сохранена';
                    break;
                case 'sort':
                    echo 'Сотриторвать по: <a href="?sort=name">имя</a> | <a href="?sort=email">email</a> | <a href="?sort=staus">статус</a>';
                    break;
            }


            foreach ($params[tasks] as $param) {
                if ($param != null) {
                    if ($param[done] == 'on') $done = 'Готово. ';
                    if ($param[edit] == 'on') $edit = 'Отредактировано.';
                    else $edit = 'Создано. ';
                    echo '
                        <div style="position: relative;" class="task">
                            <p><span>Id: </span>' . $param[id] . '</p>
                            <p><span>Имя: </span>' . $param[name] . '</p>
                            <p><span>email: </span>' . $param[email] . '</p>
                            <p><span>Текст: </span>' . $param[text] . '</p>
                            <p><span>Статус: </span>' . $done. ''.$edit.'</p>';
                    if ($params[edit]) echo '<div style="position:absolute; top:10px; right:10px;" class="edit"><p><a href="/Edit?id=' . $param[id] . '">Редактировать</a></p></div>';
                    echo '
                        </div>
                        ';
                }
            }
            for ($i = 0; $i < $params[pagination]; $i++) {
                echo "<a href='?page=" . $i . "'> " . ($i + 1) . " </a>";
            }
            ?>

        </div>
        <div class="col-md-5">
            <h2 class="featurette-heading">Создать задачку с корректными данными</h2>
            <form class="form-horizontal" action="/Home/createTask">
                <div class="form-group">
                    <label for="name">имя:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="введите имя">
                </div>
                <div class="form-group">
                    <label for="email">email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="text">текст:</label>
                    <textarea class="form-control" id="text" name="text" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Создать задачу</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <hr class="featurette-divider">
</div>