<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ActividadesTable|\Cake\ORM\Association\HasMany $Actividades
 * @property \App\Model\Table\AsistenciasTable|\Cake\ORM\Association\HasMany $Asistencias
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\HasMany $Grupos
 * @property \App\Model\Table\InscripcionesTable|\Cake\ORM\Association\HasMany $Inscripciones
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');

        $this->hasMany('Actividades', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Asistencias', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Grupos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Inscripciones', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 50)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 20)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellido_paterno')
            ->maxLength('apellido_paterno', 17)
            ->requirePresence('apellido_paterno', 'create')
            ->notEmpty('apellido_paterno');

        $validator
            ->scalar('apellido_materno')
            ->maxLength('apellido_materno', 17)
            ->requirePresence('apellido_materno', 'create')
            ->notEmpty('apellido_materno');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 10)
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('rol')
            ->maxLength('rol', 11)
            ->requirePresence('rol', 'create')
            ->notEmpty('rol');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
