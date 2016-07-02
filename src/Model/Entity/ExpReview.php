<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExpReview Entity
 *
 * @property string $id
 * @property string $Review
 * @property int $Exp_Rating
 * @property string $member_id
 * @property string $experience_id
 * @property bool $Recommend
 *
 * @property \App\Model\Entity\Member $member
 * @property \App\Model\Entity\Experience $experience
 */
class ExpReview extends Entity
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
