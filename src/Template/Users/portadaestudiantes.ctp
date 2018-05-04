
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
                    <?php foreach ($yo->inscripciones as $usuario): ?>
                        

                            <tr>
                                <td><?php print_r(h($usuario->grupo->materia['name'])) ?></td>
                                <td><?php print_r(h($usuario->grupo->materia['grado'])) ?></td>
                                <td><?php print_r(h($usuario->grupo->materia['creditos'])) ?></td>
                                <td><?php print_r(h($usuario->grupo['clave'])) ?></td>
                                
                            </tr>
                        <?php  endforeach; ?>
                        
                    </tbody>
                </table>
            

    </div>
</div>


