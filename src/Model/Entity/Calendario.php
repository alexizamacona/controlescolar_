<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calendario Entity
 *
 * @property int $id
 * @property int $periodo_id
 * @property \Cake\I18n\FrozenDate $inicio_vacaciones
 * @property \Cake\I18n\FrozenDate $fin_vacaciones
 * @property \Cake\I18n\FrozenDate $inicio_periodo
 * @property \Cake\I18n\FrozenDate $fin_periodo
 *
 * @property \App\Model\Entity\Periodo $periodo
 */
class Calendario extends Entity
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
        'inicio_vacaciones' => true,
        'fin_vacaciones' => true,
        'inicio_periodo' => true,
        'fin_periodo' => true,
        'periodo' => true
    ];
}
