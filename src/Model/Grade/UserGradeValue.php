<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\User\User;

/**
 * Description of UserGradeValue
 *
 * @author ktrist
 */
class UserGradeValue {

    private $user;
    private $gradeValue;

    public function __construct(User $user, GradeValue $grade) {

    }

}
