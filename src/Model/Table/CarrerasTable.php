<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carreras Model
 *
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\HasMany $Materias
 *
 * @method \App\Model\Entity\Carrera get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrera newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carrera[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrera|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrera patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrera[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrera findOrCreate($search, callable $callback = null, $options = [])
 */
class CarrerasTable extends Table
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

        $this->setTable('carreras');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Materias', [
            'foreignKey' => 'carrera_id'
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('duracion')
            ->requirePresence('duracion', 'create')
            ->notEmpty('duracion');

        $validator
            ->scalar('modalidad')
            ->maxLength('modalidad', 50)
            ->requirePresence('modalidad', 'create')
            ->notEmpty('modalidad');

        return $validator;
    }
}
