<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
* User Entity
*
* @property int $id_users
* @property string $username
* @property string $password
* @property string $name
* @property string $lastname
* @property \Cake\I18n\FrozenTime $birthdate
* @property string $email
*/
class User extends Entity
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
        'username' => true,
        'password' => true,
        'name' => true,
        'lastname' => true,
        'birthdate' => true,
        'email' => true
    ];

    /**
    * Fields that are excluded from JSON versions of the entity.
    *
    * @var array
    */
    protected $_hidden = [
        'password'
    ];

    // Rend les champs assignables en masse sauf pour le champ clé primaire "id".

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

}
