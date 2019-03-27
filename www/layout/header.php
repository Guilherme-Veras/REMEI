 <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" onclick="inicio()"> REMEI </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a onclick="inicio()" class="nav-link">
                            Inicio
                        </a>
                    </li>

                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            Projeto
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="historia" class="dropdown-item">
                                História
                            </a>
                            <a href="integrantes" class="dropdown-item">
                                Equipe
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="contato" class="nav-link">
                            Contato
                        </a>
                    </li>
                    <?php
                        if ($user != 0) {
                            ?>
                                <li class="nav-item">
                                    <a href="perfil?user=<?php echo $user; ?>" class="nav-link">
                                        <?php echo explode(" ",$userNome)[0]; ?>
                                    </a>
                                </li>
                                <li class="dropdown nav-item">                                    <a href="perfil?user=<?php echo $user; ?>" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile-photo-small">
                                            <img src="imgs/perfil/<?php echo $user; ?>.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                                        </div>
                                        <div class="ripple-container"></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="perfil?user=<?php echo $user; ?>">Ver Perfil</a>
                                        <a href="novoPost" class="dropdown-item">Novo Post</a>
                                        <a onclick="logout()" class="dropdown-item">Sair</a>
                                    </div>
                                </li>
                            <?php
                        }else{
                            ?>
                                <li class="nav-item">
                                    <a href="login" class="nav-link">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cadastro" class="nav-link">
                                        Cadastro
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>