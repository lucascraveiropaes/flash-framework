<?php include 'functions.php'; ?>

<?php head(); ?>
    <body>
        <div class="wrapper">
            <div class="header header-filter" id="login">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                            <div class="card">
                                <form class="form" method="post" action="../../controller/login.php">
                                    <div class="card-header header-primary text-center" data-background-color="red">
                                        <h4>Login</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <input type="text" class="form-control" name="login" placeholder="Login ou Email...">
                                        </div>

                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                            <input type="password" name="password" placeholder="Password..." class="form-control" />
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <?php button("submit", "btn-danger", "Entrar") ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        window.onload = function() {
            bg = Math.floor(Math.random() * 7 + 1);
            document.getElementById("login").style.backgroundImage = "url('assets/img/login/"+ bg +".jpg')"
        }
    </script>
<?php scripts(); ?>