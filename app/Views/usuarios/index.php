<?php
    $session = session();
    $alert = $session->get('alert');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuários</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Usuários</li>
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

                    <?php if($alert == 'success_create'): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissible">
                                    <?= "Usuário cadastrado com sucesso!" ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="card">
                        <div class="card-header">
                            <a href="/usuarios/novo" class="btn btn-primary"><i class="fa-solid fa-user-plus mr-2"></i>Novo usuário</a>
                        </div>

                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">Cód.:</th>
                                                    <th>Nome</th>                             
                                                    <th>Username</th>
                                                    <th>Privilégio</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <?php if(!empty($usuarios)): ?>
                                                <?php foreach($usuarios as $usuario): ?>
                                                    <tr>
                                                        <td><?= $usuario['id_usuario'] ?></td>
                                                        <td><?= $usuario['nome'] ?></td>                      
                                                        <td><?= $usuario['username'] ?></td>
                                                        <td><?= $usuario['privilege'] ?></td>                                                  
                                                        <td style="width: 100px">
                                                            <a href="/funcionarios/editar/<?= $usuario['id_usuario'] ?>" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a>
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirmacao-delete" onclick="document.getElementById('id_usuario').value = <?= $usuario['id_usuario'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            <?php else: ?>
                                                <tr>
                                                    <td colspan="11">Nenhum usuário cadastrado</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
</div> <!-- /.content-wrapper -->

