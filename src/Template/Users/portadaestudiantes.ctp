<?php
?>

<h4>Bienvenido <?= h($yo->nombre_completo) ?></h4>



<ul id="tabs-swipe-demo" class="tabs">
    <li class="tab col s3"><a href="#test-swipe-1">Materias</a></li>

  </ul>
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($yo as $usuario): ?>

                        <tr>

                            <td><?= h($usuario->grupos->materias->name) ?></td>
                            <td><?= h($usuario->grupos->materias->grado) ?></td>
                            <td><?= h($usuario->grupos->materias->creditos) ?></td>
                        </tr>
                        <?php  endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
      

  </div>
  