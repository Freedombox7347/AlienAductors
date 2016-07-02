<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiences Model
 *
 * @property \Cake\ORM\Association\HasMany $ExpReviews
 *
 * @method \App\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experience newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experience|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experience findOrCreate($search, callable $callback = null)
 */
class ExperiencesTable extends Table
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

        $this->table('experiences');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('ExpReviews', [
            'foreignKey' => 'experience_id'
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
            ->requirePresence('Exp_Name', 'create')
            ->notEmpty('Exp_Name')
            ->add('Exp_Name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('Description');

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
        $rules->add($rules->isUnique(['Exp_Name']));
        return $rules;
    }
}
