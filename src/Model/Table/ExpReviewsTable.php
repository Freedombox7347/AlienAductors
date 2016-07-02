<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExpReviews Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Members
 * @property \Cake\ORM\Association\BelongsTo $Experiences
 *
 * @method \App\Model\Entity\ExpReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\ExpReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ExpReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ExpReview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ExpReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ExpReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ExpReview findOrCreate($search, callable $callback = null)
 */
class ExpReviewsTable extends Table
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

        $this->table('exp_reviews');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Experiences', [
            'foreignKey' => 'experience_id',
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('Review');

        $validator
            ->integer('Exp_Rating')
            ->allowEmpty('Exp_Rating');

        $validator
            ->boolean('Recommend')
            ->allowEmpty('Recommend');

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
        $rules->add($rules->existsIn(['member_id'], 'Members'));
        $rules->add($rules->existsIn(['experience_id'], 'Experiences'));
        return $rules;
    }
}
