<h1>Tipos</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Ação</th>
        <th scope="col">Criado</th>
        <th scope="col">Modificado</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodaltipos()">Add Tipos</button>

    <button class="btn btn-info" onclick="getPost()">Post</button>

    <!-- Here's where we loop through our $posts array, printing out post info -->
    
    <?php foreach ($tipos as $tipo): ?>
        <tr >
            <td><?= $tipo['Tipo']['id']; ?></td>
            <td><?= $tipo ['Tipo']['titulo']; ?></td>
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluirtipo(<?= $tipo['Tipo']['id']?>)">Excluir</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editartipo(<?= $tipo['Tipo']['id']?>)">Editar</button>
            </td>
            <td><?= $tipo ['Tipo']['created_at']; ?></td>
            <td><?= $tipo ['Tipo']['updated_at']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<div id="teste"></div>