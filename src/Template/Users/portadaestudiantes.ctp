<h4>Bienvenido <?= h($yo->nombre_completo) ?></h4>
<div id="test-swipe-1" class="col s12 white">
    <div id="test-swipe-1" class="col s12 white">
    <div class="card-panel">
        <div class="users index large-9 medium-8 columns content-4">
            <h3><?= __('Historial de materias') ?></h3>
            <table >
                <thead>
                    <tr>

                        <th scope="col">Materia</th>
                        <th scope="col">Grado</th>
                        <th scope="col">Creditos</th>
                        <th scope="col">Grupo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Inscripciones as $i): ?>
                        

                            <tr>
                                <td><?php print_r(h($i->grupo->materia->name)) ?></td>
                                <td><?php print_r(h($i->grupo->materia->grado)) ?></td>
                                <td><?php print_r(h($i->grupo->materia->creditos)) ?></td>
                                <td><a href="/grupos/view/<?php echo $i->grupo->id?>"><?php print_r(h($i->grupo->clave)) ?></a></td>
                                
                            </tr>
                        <?php  endforeach; ?>
                        
                    </tbody>
                </table>
            

    </div>
</div>

