<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property string $id
 * @property string $First_Name
 * @property string $Last_Name
 * @property int $Age
 * @property string $location_id
 * @property string $Username
 * @property string $Email
 * @property string $Password
 * @property string $privilege_id
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Privilege $privilege
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
}
