<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Actividad Entity
 *
 * @property int $id
 * @property string $descripcion
 * @property float $porcentaje
 * @property int $grupo_id
 * @property int $user_id
 * @property int $calificacion
 * @property \Cake\I18n\FrozenDate $fecha
 *
 * @property \App\Model\Entity\Grupo $grupo
 * @property \App\Model\Entity\User $user
 */
class Actividad extends Entity
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
        'descripcion' => true,
        'porcentaje' => true,
        'grupo_id' => true,
        'user_id' => true,
        'calificacion' => true,
        'fecha' => true,
        'grupo' => true,
        'user' => true
    ];
}
