<form id="ConsultaAdForm" >


    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Data e hora da Consulta</span>
        <input type="datetime-local" name="data_consulta" class="form-control" placeholder="Dia da consulta" aria-label="Username" aria-describedby="addon-wrapping" required>
    </div>

    <div class="form-group">
        <label for="paciente_id">Paciente: </label>
        <select name="paciente_id" id="paciente_id" class="form-select" required>
            <?php foreach ($pacienteList as $id => $nome): ?>
                <option value="<?= h($id) ?>">
                    <?= h($nome) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="medico_id">Médico: </label>
        <select name="medico_id" id="medico_id" class="form-select" required>
            <?php foreach ($medicoList as $id => $nome): ?>
                <option value="<?= h($id) ?>">
                    <?= h($nome) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="convenio_id">Convênio: </label>
        <select name="convenio_id" id="convenio_id" class="form-select" required>
            <?php foreach ($convenioList as $id => $nome): ?>
                <option value="<?= h($id) ?>">
                    <?= h($nome) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="atendimento_id">Atendimento: </label>
        <select name="atendimento_id" id="atendimento_id" class="form-select" required>
            <?php foreach ($atendimentoList as $id => $nome): ?>
                <option value="<?= h($id) ?>">
                    <?= h($nome) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>


    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="adicionarConsultasNaTabela()">Salvar Alterações</button>
    </div>
</form>




