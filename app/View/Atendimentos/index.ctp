<h1>Convênios</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de atendimento</th>
        <th scope="col">Ação</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalAtendimentos()">Adicionar novo tipo de atendimento</button>
    
    <?php foreach ($atendimentos as $atendimento): ?>
        <tr >
            <td><?= $atendimento['Atendimento']['id']; ?></td>
            <td><?= $atendimento ['Atendimento']['nome']; ?></td>
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluirAtendimentos(<?= $atendimento['Atendimento']['id']; ?>)">Excluir</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editarAtendimentos(<?= $atendimento['Atendimento']['id']; ?>)">Editar</button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>