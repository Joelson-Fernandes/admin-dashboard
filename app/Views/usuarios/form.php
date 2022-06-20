<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= isset($usuario) ? "Editar " : "Novo " ?>usuário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>             
              <li class="breadcrumb-item"><a href="/usuarios">Usuários</a></li>
              <li class="breadcrumb-item active"><?= isset($usuario) ? "Editar " : "Novo " ?>usuário</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/usuarios" class="btn btn-primary">Voltar</a>
                        </div>
                        <form action="/usuarios/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" placeholder="Seu nome" name="nome" value="<?= isset($usuario) ? $usuario['nome'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Nome de usuário" name="username" value="<?= isset($usuario) ? $usuario['username'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" value="<?= isset($usuario) ? $usuario['senha'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Privilégio</label>
                                        <select class="custom-select rounded-0" name="privilege">
                                            <option>admin</option>
                                            <option>usuario</option>
                                        </select>
                                        </div>
                                    </div>
                                    <?php if(isset($usuario)): ?>
                                    <input type="hidden" value="<?=$usuario['id_usuario']?>" name="id_usuario">
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary w-100"><?= isset($usuario) ? 'Salvar' : 'Cadastrar' ?></button>
                            </div>
                        </form>
                    </div><!-- /.card card-primary-->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div> <!-- /.content-wrapper -->



