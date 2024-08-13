<form id="AtendimentoEditForm" >
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Nome do Atendimento</span>
  <input type="text" name="nome" class="form-control" placeholder="Digite o nome do convênio" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>


    <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="salvarAtendimentos(<?= $atendimento['Atendimento']['id']; ?>)">Salvar Alterações</button>
    </div>
</form>