<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\OrgUnit;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Immutable object representation of a D2L OrgUnit properties block
 * @see https://docs.valence.desire2learn.com/res/orgunit.html#OrgUnit.OrgUnitProperties
 * @author ktrist
 */
class OrgUnitProperties extends BaseValenceModel {

    public $identifier;
    public $name;

    /**
     * In rare cases, an org unit may have no code set for it; in that case,
     * you may get null for the code on actions that retrieve this structure.
     * This is most likely to happen for the root organization org unit only.
     * You may never provide null when setting the code for an org unit.
     * @var String
     */
    public $code;
    public $path;
    public $type;

    public function __construct($orgUnitProperties) {

        $this->identifier = (!empty($orgUnitProperties["Identifier"])) ? $orgUnitProperties["Identifier"] : 0;
        $this->name = (!empty($orgUnitProperties["Name"])) ? $orgUnitProperties["Name"] : "";
        $this->code = (!empty($orgUnitProperties["Code"])) ? $orgUnitProperties["Code"] : null;
        $this->path = (!empty($orgUnitProperties["Path"])) ? $orgUnitProperties["Path"] : "";
        $this->type = (!empty($orgUnitProperties["Type"])) ? $orgUnitProperties["Type"] : 0;
    }

}
