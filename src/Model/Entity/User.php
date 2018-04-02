<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $sexo
 * @property string $email
 * @property string $rol
 *
 * @property \App\Model\Entity\Actividad[] $actividades
 * @property \App\Model\Entity\Asistencia[] $asistencias
 * @property \App\Model\Entity\Grupo[] $grupos
 * @property \App\Model\Entity\Inscripcion[] $inscripciones
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'nombre' => true,
        'apellido_paterno' => true,
        'apellido_materno' => true,
        'sexo' => true,
        'email' => true,
        'rol' => true,
        'actividades' => true,
        'asistencias' => true,
        'grupos' => true,
        'inscripciones' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if(strlen($password)>0)
        {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
