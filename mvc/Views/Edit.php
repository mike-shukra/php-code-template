<div class="container marketing">

    <h1 class="featurette-heading mb-5">Задачи</h1>

    <div class="row featurette">
        <div class="col-md-7">
            <?
            if ($params[tipe] == 'save')
                echo 'Задача сохранена';

            foreach ($params[tasks] as $param) {
                if ($param != null) {
                    if ($param[done] == 'on') $done = 'Готово. ';
                    if ($param[edit] == 'on') $edit = 'Отредактировано.';
                    echo '
                        <div style="position: relative;" class="task">
                            <p><span>Id: </span>' . $param[id] . '</p>
                            <p><span>Имя: </span>' . $param[name] . '</p>
                            <p><span>email: </span>' . $param[email] . '</p>
                            <p><span>Текст: </span>' . $param[text] . '</p>
                            <p><span>Статус: </span>' . $done. ''.$edit.'</p>
                        </div>
                        ';
                }
            }

            ?>

        </div>
        <div class="col-md-5">
            <h2 class="featurette-heading">Создать задачку с корректными данными</h2>
            <form class="form-horizontal" action="/Edit/save">
                <input style="display:none;" type="text" id="id" name="id" value="<?php print_r($params[tasks][task][id]) ?>">
                <div class="form-group">
                    <label for="name">имя:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php print_r($params[tasks][task][name]) ?>">
                </div>
                <div class="form-group">
                    <label for="email">email: </label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php print_r($params[tasks][task][email]) ?>">
                </div>
                <div class="form-group">
                    <label for="text">текст:</label>
                    <textarea class="form-control" id="text" name="text" rows="5"><?php print_r($params[tasks][task][text]) ?></textarea>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="done" name="done" <?php if ($params[tasks][task][done] == 'on') echo 'checked'; ?>>
                    <label class="custom-control-label" for="done">Выполнено</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="edit" name="edit" <?php if ($params[tasks][task][edit] == 'on') echo 'checked'; ?>>
                    <label class="custom-control-label" for="edit">Отредактировано</label>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Сохранить задачу</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <hr class="featurette-divider">
</div>