<form id="MedicoEditForm" >
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Nome do Médico</span>
  <input type="text" name="nome" class="form-control" placeholder="Nome do Médico" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

<div class="input-group flex-nowrap">
<span class="input-group-text" id="addon-wrapping">Informe o CRM</span>
<input type="text" name="crm" class="form-control" placeholder="Digite o CRM" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

    <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="salvarMedicos(<?= $medico['Medico']['id']?>)">Salvar Alterações</button>
    </div>
</form>