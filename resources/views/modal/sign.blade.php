<div class="cd-user-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container">
        <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Авторизация</a></li>
            <li><a href="#0">Регистрация</a></li>
        </ul>

        <div id="cd-login">
            <!-- log in form -->
            <form class="cd-form" action="{{ route('sign-in') }}" method="post">
                {{ csrf_field() }}
                <p class="fieldset">
                    <label class="image-replace cd-phone" for="signin-phone">Email</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="Введите Email">
                    <span class="cd-error-message">Ошибка</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Пароль</label>
                    <input class="full-width has-padding has-border" id="signin-password" name="password" type="text" placeholder="Пароль">
                    <a href="#0" class="hide-password">скрыть</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" name="remember-me" checked>
                    <label for="remember-me">запомнить меня</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Войти">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Забыли пароль?</a></p>
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup">
            <!-- sign up form -->
            <form class="cd-form" action="{{ route('sign-up') }}" method="post">
                {{ csrf_field() }}
                <p class="fieldset">
                    <label class="image-replace cd-username" for="first_name">Имя</label>
                    <input class="full-width has-padding has-border" id="first_name" name="first_name" type="text" placeholder="Имя">
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-phone" for="signin-phone">Номер мобильного</label>
                    <input class="full-width has-padding has-border" id="signin-phone" name="phone" type="tel" placeholder="Номер мобильного">
                    <span class="cd-error-message">Ошибка</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" name="email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Пароль</label>
                    <input class="full-width has-padding has-border" id="signup-password" name="password" type="text" placeholder="Пароль">
                    <a href="#0" class="hide-password">Скрыть</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Подтверждение пароля</label>
                    <input class="full-width has-padding has-border" id="signup-password" name="confirm_password" type="text" placeholder="Подтверждение пароля">
                    <a href="#0" class="hide-password">Скрыть</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms" name="terms_of_registration">
                    <label for="accept-terms">*Проходя регистрация, Вы автоматически соглашаетесь с <a href="#0">публичной офертой</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" name="submit" value="Поехали!">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password">
            <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->