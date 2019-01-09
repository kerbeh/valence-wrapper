<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\User;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Description of User
 *
 * @author ktrist
 */
class User extends BaseValenceModel {

    /**
     * D2L UID for the user
     * @var String
     */
    protected $identifier;

    /**
     * Combined Firstname + Lastname of the user
     * @var String
     */
    protected $displayName;

    /**
     * email address of the user
     * @var String
     */
    protected $emailAddress;

    /**
     * The ID of the user as set by the business i/e/ staff Id number
     * @var String
     */
    protected $orgDefinedId;

    /**
     * Api URL to the users profile image
     * @var type
     */
    protected $profileBadgeUrl;

    /**
     * Opaque UID for a d2l user.
     * Used in some routes in place of the Identifier.
     * i.e. when privacy is needed or enforced by permissions
     * @var String
     */
    protected $profileIdentifier;

    public function __construct($user) {

        $this->identifier = (!empty($user["Identifier"])) ? $user["Identifier"] : Null;
        $this->displayName = (!empty($user["DisplayName"])) ? $user["DisplayName"] : Null;
        $this->emailAddress = (!empty($user["EmailAddress"])) ? $user["EmailAddress"] : Null;
        $this->orgDefinedId = (!empty($user["OrgDefinedId"])) ? $user["OrgDefinedId"] : Null;
        $this->profileBadgeUrl = (!empty($user["ProfileBadgeUrl"])) ? $user["ProfileBadgeUrl"] : Null;
        $this->profileIdentifier = (!empty($user["ProfileIdentifier"])) ? $user["ProfileIdentifier"] : Null;
    }

    public function getIdentifier() {
        return $this->identifier;
    }

    public function getDisplayName() {
        return $this->displayName;
    }

    public function getEmailAddress() {
        return $this->emailAddress;
    }

    public function getOrgDefinedId() {
        return $this->orgDefinedId;
    }

    public function getProfileBadgeUrl() {
        return $this->profileBadgeUrl;
    }

    public function getProfileIdentifier() {
        return $this->profileIdentifier;
    }

}
