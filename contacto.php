<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

    <div class="domain">
        <div class="container-contact100" style="background-image: url('https://images.unsplash.com/photo-1533094588965-900f4014f4c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80');">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" method="post" action="/mail.php" onsubmit="miFuncion()">
                    <span class="contact100-form-title">
                        Lorem ipsum dolor sit.
                    </span>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                        <label for="name" class="label-input100">
                            Nombre</label>
                        <input class="input100" type="text" name="name" placeholder="Introduce nombre" id="mail-name" required>
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: test@test.es">
                        <label for="email" class="label-input100">
                            Email</label>
                        <input class="input100" type="text" name="email" placeholder="Introduce email" id="mail-email">
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="wrap-input100">
                        <label for="asunto" class="label-input100">
                            Asunto</label>
                        <input class="input100" type="text" name="asunto" placeholder="Introduce asunto" id="mail-asunto">
                        <p class="help-block text-danger"></p>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Message is required">
                        <label for="message" class="label-input100">
                            Mensaje</label>
                        <textarea class="input100" name="message" placeholder="Lorem ipsum dolor sit amet, consectetur." id="mail-message"></textarea>
                    </div>
                    <div id="success"></div>
                    <div id="mail-captcha" class="g-recaptcha" data-sitekey="6LeNLlsUAAAAAPue-s5Zn6IOnBnZXPip9-q5hffn"></div>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>

                            <!--<input id="mail-submit" type='submit' value='Enviar' class='contact100-form-btn' name='submit'> -->
                            <button class="contact100-form-btn" name='submit' type='submit' id="mail-submit">
                                Enviar
                            </button>
                        </div>
                    </div>
                    <div class="container-contact100-form-btn">
                        <p class="form-message"></p>
                    </div>

                </form>
            </div>

            <span class="contact100-more" style="color: black;">
                info@test.cat
            </span>
        </div>
        <!----- hosting-grids ----->
    </div>

    <script>
        $(document).ready(function() {

            $('form').submit(function(event) {
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var asunto = $("#mail-asunto").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".form-message").load("/mail.php", {
                    name: name,
                    email: email,
                    asunto: asunto,
                    message: message,
                    submit: submit
                });
            });

        });
    </script>

</body>

</html>