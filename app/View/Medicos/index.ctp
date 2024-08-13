<h1>Médicos</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Médico</th>
        <th scope="col">CRM</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalMedicos()">Adicionar Médico</button>
    
    <?php foreach ($medicos as $medico): ?>
        <tr >
            <td><?= $medico['Medico']['id']; ?></td>
            <td><?= $medico ['Medico']['nome']; ?></td>
            <td><?= $medico['Medico']['crm']; ?></td>
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluirMedicos(<?= $medico['Medico']['id']; ?>)">Excluir</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editarMedicos(<?= $medico['Medico']['id']; ?>)">Editar</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
