<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupos Model
 *
 * @property \App\Model\Table\MateriasTable|\Cake\ORM\Association\BelongsTo $Materias
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PeriodosTable|\Cake\ORM\Association\BelongsTo $Periodos
 * @property \App\Model\Table\ActividadesTable|\Cake\ORM\Association\HasMany $Actividades
 * @property \App\Model\Table\HorariosTable|\Cake\ORM\Association\HasMany $Horarios
 * @property \App\Model\Table\InscripcionesTable|\Cake\ORM\Association\HasMany $Inscripciones
 *
 * @method \App\Model\Entity\Grupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grupo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grupo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo findOrCreate($search, callable $callback = null, $options = [])
 */
class GruposTable extends Table
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

        $this->setTable('grupos');
        $this->setDisplayField('clave');
        $this->setPrimaryKey('id');

        $this->belongsTo('Materias');
        $this->belongsTo('Users');
        $this->hasMany('Actividades');
        $this->hasMany('Horarios');
        $this->hasMany('Inscripciones');
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
            ->scalar('clave')
            ->maxLength('clave', 50)
            ->requirePresence('clave', 'create')
            ->notEmpty('clave');

        $validator
            ->scalar('turno')
            ->maxLength('turno', 15)
            ->allowEmpty('turno');

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
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['periodo_id'], 'Periodos'));
        $rules->add($rules->isUnique('clave'));

        return $rules;
    }
}
