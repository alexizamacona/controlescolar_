<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Asistencias Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\HorariosTable|\Cake\ORM\Association\BelongsTo $Horarios
 *
 * @method \App\Model\Entity\Asistencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Asistencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Asistencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Asistencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Asistencia findOrCreate($search, callable $callback = null, $options = [])
 */
class AsistenciasTable extends Table
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

        $this->setTable('asistencias');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users');
        $this->belongsTo('Horarios');
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
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->integer('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['horario_id'], 'Horarios'));

        return $rules;
    }
}
