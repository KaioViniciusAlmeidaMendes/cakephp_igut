<h1>Pacientes</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Paciente</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalPacientes()">Adicionar Pacientes</button>
    
    <?php foreach ($pacientes as $paciente): ?>
        <tr >
            <td><?= $paciente['Paciente']['id']; ?></td>
            <td><?= $paciente ['Paciente']['nome']; ?></td>
            <td><?= $paciente['Paciente']['data_nascimento']; ?></td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluirPacientes(<?= $paciente['Paciente']['id']; ?>)">Excluir</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editarPacientes(<?= $paciente['Paciente']['id']; ?>)">Editar</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
