<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parcial Entity
 *
 * @property int $id
 * @property int $periodo_id
 * @property \Cake\I18n\FrozenDate $inicio_examenes
 * @property \Cake\I18n\FrozenDate $fin_examenes
 * @property string $descripcion
 *
 * @property \App\Model\Entity\Periodo $periodo
 */
class Parcial extends Entity
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
        'periodo_id' => true,
        'inicio_examenes' => true,
        'fin_examenes' => true,
        'descripcion' => true,
        'periodo' => true
    ];
}
