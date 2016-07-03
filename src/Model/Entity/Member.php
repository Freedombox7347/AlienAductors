<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property string $id
 * @property bool $admin
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property string $First_Name
 * @property string $Last_Name
 * @property int $Age
 * @property string $city
 * @property string $state_id
 * @property string $country_id
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\ExpReview[] $exp_reviews
 */
class Member extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
