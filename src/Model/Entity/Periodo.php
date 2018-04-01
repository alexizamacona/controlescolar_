<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Periodo Entity
 *
 * @property int $id
 * @property string $tipo
 * @property string $plural
 * @property string $descripcion
 * @property string $ciclo
 *
 * @property \App\Model\Entity\Calendario[] $calendarios
 * @property \App\Model\Entity\Grupo[] $grupos
 * @property \App\Model\Entity\Parcial[] $parciales
 */
class Periodo extends Entity
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
        'tipo' => true,
        'plural' => true,
        'descripcion' => true,
        'ciclo' => true,
        'calendarios' => true,
        'grupos' => true,
        'parciales' => true
    ];
}
