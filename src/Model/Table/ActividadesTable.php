<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actividades Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsTo $Grupos
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Actividad get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actividad newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actividad[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actividad|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actividad patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actividad[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actividad findOrCreate($search, callable $callback = null, $options = [])
 */
class ActividadesTable extends Table
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

        $this->setTable('actividades');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->belongsTo('Grupos');
        $this->belongsTo('Users');
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
            ->scalar('descripcion')
            ->maxLength('descripcion', 50)
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->numeric('porcentaje')
            ->requirePresence('porcentaje', 'create')
            ->notEmpty('porcentaje');

        $validator
            ->integer('calificacion')
            ->requirePresence('calificacion', 'create')
            ->notEmpty('calificacion');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

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
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
