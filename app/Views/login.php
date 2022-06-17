<?php
   $session = session();
   $alerta = $session->getFlashdata('alert');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin|Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css?v=3.2.0') ?>">

<body class="login-page" style="min-height: 466px;">
    
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Admin</b>Dashboard</a>
        </div>
    <div class="card-body">
        <p class="login-box-msg">Entre com seu usuário e senha</p>
            <form action="/validar-usuario" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Usuário" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Senha" name="senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                </div>
                <?php if($alerta == 'error_login'): ?>
                    <p class="text-danger text-center">Usuário ou senha incorretos!</p>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12 p-4">
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </div>
                </div>
            </form>
    </div>
</div>

</body>
</html>