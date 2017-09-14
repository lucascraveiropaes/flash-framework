<?php include 'functions.php'; ?>

<?php head(); ?>
<body>
    <div class="wrapper">
        <?php sidebar(2) ?>
        <div class="main-panel">
            <?php menu_bar() ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <?php input("Empresa (Desabilitado)", "text", "empresa", "disabled") ?>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <?php input("Usuário", "text", "user") ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <?php input("Email", "email", "email") ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <?php input("Primeiro Nome", "text", "first-name") ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <?php input("Último Nome", "text", "last-name") ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <?php input("Endereço", "text", "address") ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <?php input("Cidade", "text", "city") ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <?php input("País", "text", "country") ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <?php input("CEP", "text", "postal-code") ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <?php input("Sobre", "textarea", "about", "", "5", "Escreva um pouco sobre você") ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php button("submit", "btn-success pull-right", "Atualizar") ?>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="assets/img/faces/marc.jpg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">CEO / Co-Founder</h6>
                                    <h4 class="card-title">Alec Thompson</h4>
                                    <p class="card-content">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <?php button("link", "btn-success btn-round", "Seguir", "#") ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php footer(); ?>
        </div>
    </div>
</body>
<?php scripts(); ?>