<form id="PacienteAdForm" >
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Nome do Paciente</span>
  <input type="text" name="nome" class="form-control" placeholder="Nome do Paciente" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

<div class="input-group flex-nowrap">
<span class="input-group-text" id="addon-wrapping">Data de nascimento</span>
<input type="date" name="data_nascimento" class="form-control" placeholder="data de nascimento" aria-label="Username" aria-describedby="addon-wrapping" required>
</div>

    <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="adicionarPacientesNaTabela()">Salvar Alterações</button>
    </div>
</form>
