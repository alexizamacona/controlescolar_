<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Horario Entity
 *
 * @property int $id
 * @property int $grupo_id
 * @property string $dia
 * @property \Cake\I18n\FrozenTime $hora_inicio
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\Asistencia[] $asistencias
 */
class Horario extends Entity
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
        'grupo_id' => true,
        'dia' => true,
        'hora_inicio' => true,
        'grupo' => true,
        'asistencias' => true
    ];
}
