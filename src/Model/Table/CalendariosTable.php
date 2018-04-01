<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calendarios Model
 *
 * @property \App\Model\Table\PeriodosTable|\Cake\ORM\Association\BelongsTo $Periodos
 *
 * @method \App\Model\Entity\Calendario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calendario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calendario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calendario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calendario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calendario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calendario findOrCreate($search, callable $callback = null, $options = [])
 */
class CalendariosTable extends Table
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

        $this->setTable('calendarios');
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
            ->date('inicio_vacaciones')
            ->allowEmpty('inicio_vacaciones');

        $validator
            ->date('fin_vacaciones')
            ->allowEmpty('fin_vacaciones');

        $validator
            ->date('inicio_periodo')
            ->requirePresence('inicio_periodo', 'create')
            ->notEmpty('inicio_periodo');

        $validator
            ->date('fin_periodo')
            ->requirePresence('fin_periodo', 'create')
            ->notEmpty('fin_periodo');

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
