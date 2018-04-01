<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parciales Model
 *
 * @property \App\Model\Table\PeriodosTable|\Cake\ORM\Association\BelongsTo $Periodos
 *
 * @method \App\Model\Entity\Parcial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parcial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parcial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parcial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parcial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parcial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parcial findOrCreate($search, callable $callback = null, $options = [])
 */
class ParcialesTable extends Table
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

        $this->setTable('parciales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Periodos', [
            'foreignKey' => 'periodo_id',
            'joinType' => 'INNER'
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
            ->date('inicio_examenes')
            ->requirePresence('inicio_examenes', 'create')
            ->notEmpty('inicio_examenes');

        $validator
            ->date('fin_examenes')
            ->requirePresence('fin_examenes', 'create')
            ->notEmpty('fin_examenes');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 20)
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

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
        $rules->add($rules->existsIn(['periodo_id'], 'Periodos'));

        return $rules;
    }
}
