
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial=scale=1.0">
    <title>Адаптивная форма регистрации и авторизации</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>

<body>
<!--Контейнер-->
    <article class="container">
<!--    Внутренний блок-->
       <div class="block">
           <section class="block__item block-item">
               <h2 class="block-item__title">У вас уже есть аккаунт?</h2>
               <button class="block-item__btn signIn-btn">Войти</button>
           </section>
           <section class="block__item block-item">
               <h2 class="block-item__title">У вас нет аккаунта?</h2>
               <button class="block-item__btn signUp-btn">Зарегистрироватся</button>
           </section>

       </div>

<!--        Блок формы-->
        <div class="form-box">
<!--            Форма входа-->
            <form action="login.php" class="form form_vhod" method="post">
                <h3 class="form__title">Вход</h3>

                <p>
                    <input type="text" class="form__input" placeholder="Логин" name="login" required>
                </p>
                <p>
                    <input  type="password" class="form__input" placeholder="Пароль" name="password" required>
                </p>
                <p>
                    <button class="form__btn">Войти</button>
                </p>
                <p>
                    <a href="#" class="form__forgot">Восстановить пароль</a>
                </p>
            </form>
<!--            Форма регистрации-->
            <form action="register.php" class="form form_regist" method="post">
                <h3 class="form__title">Регистрация</h3>
                <p>
                    <input type="text" class="form__input" placeholder="Логин" name="login" required>
                </p>
                <p>
                    <input type="email" class="form__input" placeholder="Email" name="email" required>
                </p>
                <p>
                    <input  type="password" class="form__input" placeholder="Пароль" name="password" required>
                </p>
                <p>
                    <input type="text" class="form__input" placeholder="Подтвердите пароль" name="repeatPass" required>
                </p>
                <p>
                    <button class="form__btn form__btn_sighUp">Зарегистрироваться</button>
                </p>
            </form>
        </div>
    </article>

</body>

</html>