<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class RegisterForm extends Form {

    /**
     * Build Validator
     *
     * @param Validator $validator
     * @return Validator object
     */
    protected function _buildValidator(Validator $validator) {

        return $validator
            ->notEmpty('fullname', __('This field cannot be left empty'))
            ->notEmpty('email', __('This field cannot be left empty'))
            ->notEmpty('password', __('This field cannot be left empty'))
            ->minLength('password', 6, __('Must be greater than 6 characters'))
            ->notEmpty('re-password', __('This field cannot be left empty'))
            ->sameAs('re-password', 'password', __('Pasword does not match'));
    }
}

