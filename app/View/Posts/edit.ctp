<form id="PostAdForm" method="post">
    <div class="input-group flex-nowrap">
        <span class="input-group-text">Title</span>
        <input type="text" class="form-control" name="title" placeholder="Title" aria-label="Title"
            aria-describedby="addon-wrapping " id="title<?= $post['Post']['id']; ?>"
            value="<?php echo h($post['Post']['title']); ?>" required>
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" required rows="3"
            cols="30" id="body<?= $post['Post']['id']; ?>" name="body">
  <?php echo h($post['Post']['body']); ?>
  </textarea>
        <label for="floatingTextarea2">Body</label>
    </div>
    <div>
        <p>Selecione o tipo: </p>
    </div>

    <select name="tipo_id" id="tiposId" class="form-select" aria-label="Default select example">
      <?php foreach($tipos as $tipo):?>
        <?php
          ($post['Post']['tipo_id'] == $tipo['Tipo']['id']) ?  $selected = 'selected' :  $selected = '';      
        ?>
        <option <?= $selected ?> value="<?= $tipo['Tipo']['id'] ?>"><?= $tipo['Tipo']['titulo']?></option>
      <?php endforeach ?>
    </select>
    <div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" onclick="salvaredit('<?= $post['Post']['id'] ?>')">Salvar
                alterações</button>
        </div>
    </div>
</form>