<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\HasMany $ExpReviews
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null)
 */
class MembersTable extends Table
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

        $this->table('members');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->hasMany('ExpReviews', [
            'foreignKey' => 'member_id'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->boolean('admin')
            ->requirePresence('admin', 'create')
            ->notEmpty('admin');

        $validator
            ->requirePresence('Username', 'create')
            ->notEmpty('Username')
            ->add('Username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('Password', 'create')
            ->notEmpty('Password');

        $validator
            ->allowEmpty('Email')
            ->add('Email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('First_Name');

        $validator
            ->allowEmpty('Last_Name');

        $validator
            ->integer('Age')
            ->allowEmpty('Age');

        $validator
            ->allowEmpty('city');

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
        $rules->add($rules->isUnique(['Username']));
        $rules->add($rules->isUnique(['Email']));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        return $rules;
    }
}
