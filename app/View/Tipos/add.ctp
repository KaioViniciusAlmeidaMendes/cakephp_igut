<form id="TipoAdForm" >
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Title</span>
  <input type="text" name="titulo" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

<div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px" required rows="3"
            cols="30" id="body" name="body"></textarea>
        <label for="body">Body</label>
    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="adicionarTipoNaTabela()">Salvar Alterações</button>
        </div>
</form>