<h1>Marque sua consulta</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Paciente</th>
        <th scope="col">Médico</th>
        <th scope="col">Convênio</th>
        <th scope="col">Tipo de Atendimento</th>

    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodalAtendimentos()">Adicionar novo tipo de atendimento</button>
    
    <?php foreach ($consultas as $consulta): ?>
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
