
<h1>Marque sua Consulta</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Data e Hora da Consulta</th>
            <th scope="col">Paciente</th>
            <th scope="col">Médico</th>
            <th scope="col">Convênio</th>
            <th scope="col">Tipo de Atendimento</th>
            <th scope="col">Status da Consulta</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalConsultas()">Adicionar novo tipo de atendimento</button>
    <tbody>
    <?php foreach ($consultas as $consulta): ?>
        <!-- Verifica o status e adiciona uma classe condicional -->
        <tr class="<?= $consulta['Consulta']['status'] === 'desmarcado' ? 'table-danger' : ''; ?>">
            <td><?= $consulta['Consulta']['data_consulta']; ?></td>
            <td><?= $consulta['Paciente']['PacienteNome']; ?></td>
            <td><?= $consulta['Medico']['MedicoNome']; ?></td>
            <td><?= $consulta['Convenio']['ConvenioNome']; ?></td>
            <td><?= $consulta['Atendimento']['AtendimentoNome']; ?></td>
            <td><?= $consulta['Consulta']['status'] === 'desmarcado' ? 'Desmarcado' : 'Marcado'; ?></td>
            <td>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editarConsultas(<?= $consulta['Consulta']['id']; ?>)">Editar</button>
                <button type="button" class="btn btn-danger" onclick="desmarcarConsultas(<?= $consulta['Consulta']['id']; ?>)">Desmarcar</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>