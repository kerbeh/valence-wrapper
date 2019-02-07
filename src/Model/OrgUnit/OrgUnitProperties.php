<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\OrgUnit;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Immutable object representation of a D2L OrgUnit Permissions properties block
 * @see https://docs.valence.desire2learn.com/res/orgunit.html#OrgUnit.Permissions
 * @author ktrist
 */
class Permissions extends BaseValenceModel {

    public $canDelete;
    public $canEdit;

    public function __construct($permissions) {

        $this->id = (!empty($permissions["CanDelete"])) ? $permissions["CanDelete"] : FALSE;
        $this->code = (!empty($permissions["CanEdit"])) ? $permissions["CanEdit"] : FALSE;
    }

}
