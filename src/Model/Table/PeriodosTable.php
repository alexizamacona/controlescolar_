<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Periodos Model
 *
 * @property \App\Model\Table\CalendariosTable|\Cake\ORM\Association\HasMany $Calendarios
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\HasMany $Grupos
 * @property \App\Model\Table\ParcialesTable|\Cake\ORM\Association\HasMany $Parciales
 *
 * @method \App\Model\Entity\Periodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Periodo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Periodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Periodo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Periodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Periodo findOrCreate($search, callable $callback = null, $options = [])
 */
class PeriodosTable extends Table
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

        $this->setTable('periodos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Calendarios', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->hasMany('Grupos', [
            'foreignKey' => 'periodo_id'
        ]);
        $this->hasMany('Parciales', [
            'foreignKey' => 'periodo_id'
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
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->scalar('plural')
            ->maxLength('plural', 50)
            ->requirePresence('plural', 'create')
            ->notEmpty('plural');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 50)
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->scalar('ciclo')
            ->maxLength('ciclo', 50)
            ->requirePresence('ciclo', 'create')
            ->notEmpty('ciclo');

        return $validator;
    }
}
