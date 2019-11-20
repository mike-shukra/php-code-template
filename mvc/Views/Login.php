<div class="container marketing">

    <h1>Авторизация</h1>

    <div class="row featurette">
        <div class="col col-md-4">
            <form action="/Login/run" method="post" class=" mb-3">
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="text" class="form-control" id="login" name="login" value="">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input class="btn btn-primary" type="submit" value="Войти" name="send">
            </form>
        </div>
    </div>
</div>