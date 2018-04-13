<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property int $id
 * @property int $materia_id
 * @property string $clave
 * @property string $turno
 * @property int $user_id
 * @property int $periodo_id
 *
 * @property \App\Model\Entity\Materia $materia
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Periodo $periodo
 * @property \App\Model\Entity\Actividad[] $actividades
 * @property \App\Model\Entity\Horario[] $horarios
 * @property \App\Model\Entity\Inscripcion[] $inscripciones
 */
class Grupo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'materia_id' => true,
        'clave' => true,
        'turno' => true,
        'user_id' => true,
        'materia' => true,
        'user' => true,
        'periodo' => true,
        'actividades' => true,
        'horarios' => true,
        'inscripciones' => true
    ];
}
