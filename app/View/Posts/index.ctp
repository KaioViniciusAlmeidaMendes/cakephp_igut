<h1>Blog posts</h1>
<table class="table">
    <thead>
    <tr >
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Tipo</th>
        <th scope="col">Ação</th>
        <th scope="col">Criado</th>
        <th scope="col">Modificado</th>
    </tr>
    </thead>
    <button class="btn btn-info" onclick="pegarformularioejogarnomodal()">Add</button>

    <button class="btn btn-info" onclick="getTipo()">Tipos</button>
    

    <!-- Here's where we loop through our $posts array, printing out post info -->
    
    <?php foreach ($posts as $post): ?>
        <tr >
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id']));
                    ?>
            </td>
            <td><?= $post['Tipo']['titulo']?></td>            
            <td>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="excluir(<?= $post['Post']['id']?>)">Excluir</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="editar(<?= $post['Post']['id']?>)">Editar</button>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
            <td><?php echo $post['Post']['modified']; ?></td>

        </tr>
    <?php endforeach; ?>

</table>

<div id="teste"></div>