<main class="content">
  <?php
    renderTitle(
      'Cadastro de Usuário',
      'Crie e atualize o usuário',
      'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
  ?>

  <form action="#" method="post">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Informe o nome"
          class="form-control" <?= $errors['name'] ? 'is_invalid' : ''?>
          value="<?= $name ?>">
        <div class="invalid-feedback">
          <?= $errors['name'] ?>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Informe o email"
          class="form-control" <?= $errors['email'] ? 'is_invalid' : ''?>
          value="<?= $email ?>">
        <div class="invalid-feedback">
          <?= $errors['email'] ?>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Informe a senha"
          class="form-control" <?= $errors['password'] ? 'is_invalid' : ''?>>
        <div class="invalid-feedback">
          <?= $errors['password'] ?>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="confirm-password">Confirme a senha</label>
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirme a senha"
          class="form-control" <?= $errors['confirm-password'] ? 'is_invalid' : ''?>>
        <div class="invalid-feedback">
          <?= $errors['confirm-password'] ?>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="start_date">Data de admissão</label>
        <input type="date" id="start_date" name="start_date" placeholder="Informe a data de admissão"
          class="form-control" <?= $errors['start_date'] ? 'is_invalid' : ''?>
          value="<?= $start_date ?>">
        <div class="invalid-feedback">
          <?= $errors['start_date'] ?>
        </div>
      </div>
      <div class="form-group col-md-6">
        <label for="end_date">Data de desligamento</label>
        <input type="date" name="end_date" id="end_date" placeholder="Informe a data de desligamento"
          class="form-control" <?= $errors['end_date'] ? 'is_invalid' : ''?>
           value="<?= $end_date ?>" >
        <div class="invalid-feedback">
          <?= $errors['end_date'] ?>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="is_admin">Administrador?</label>
        <input type="checkbox" id="is_admin" name="is_admin" placeholder="Informe a data de admissão"
          class="form-control" <?= $errors['is_admin'] ? 'is_invalid' : ''?>
          <?= $is_admin ? 'checked' : ''?>>
        <div class="invalid-feedback">
          <?= $errors['is_admin'] ?>
        </div>
      </div>
    </div>
    <div>
      <button class="btn btn-priary btn-lg">Salvar</button>
      <a class="btn btn-secondary btn-lg" href="/users.php">Cancelar</a>
    </div>
  </form>
</main>