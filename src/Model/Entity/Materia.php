<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materia Entity
 *
 * @property int $id
 * @property string $name
 * @property int $carrera_id
 * @property int $grado
 * @property float $creditos
 *
 * @property \App\Model\Entity\Carrera $carrera
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Materia extends Entity
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
        'name' => true,
        'carrera_id' => true,
        'grado' => true,
        'creditos' => true,
        'carrera' => true,
        'grupos' => true
    ];
}
