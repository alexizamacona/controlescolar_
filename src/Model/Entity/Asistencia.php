<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asistencia Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $horario_id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $valor
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Horario $horario
 */
class Asistencia extends Entity
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
        'user_id' => true,
        'horario_id' => true,
        'fecha' => true,
        'valor' => true,
        'user' => true,
        'horario' => true
    ];
}
