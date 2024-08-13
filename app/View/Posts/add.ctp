<form id="PostAdForm" >
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Title</span>
  <input type="text" name="title" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

<div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" required rows="3"
            cols="30" id="body" name="body"></textarea>
        <label for="body">Body</label>
    </div>

    <div>
        <p>Selecione o tipo: </p>
    </div>
    
    <select name="tipo_id" id="tiposId" class="form-select" aria-label="Default select example">
    <option selected>Selecione</option>
      <?php foreach($tipos as $tipo):?>
        <option value="<?= $tipo['Tipo']['id'] ?>"><?= $tipo['Tipo']['titulo']?></option>
      <?php endforeach ?>
    </select>
   
    <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="adicionarPostNaTabela()">Salvar Alterações</button>
        </div>
</form>
