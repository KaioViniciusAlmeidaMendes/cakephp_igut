<h1>Convênios</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Convênio</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalConvenios()">Adicionar Convênio</button>
    
    <?php foreach ($convenios as $convenio): ?>
        <tr >
            <td><?= $convenio['Convenio']['id']; ?></td>
            <td><?= $convenio ['Convenio']['nome']; ?></td>
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluirConvenios(<?= $convenio['Convenio']['id']; ?>)">Excluir</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editarConvenios(<?= $convenio['Convenio']['id']; ?>)">Editar</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>