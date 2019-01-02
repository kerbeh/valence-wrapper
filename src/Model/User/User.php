<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\User;

/**
 * Description of User
 *
 * @author ktrist
 */
class User {

    /**
     * D2L UID for the user
     * @var String
     */
    private $identifier;

    /**
     * Combined Firstname + Lastname of the user
     * @var String
     */
    private $displayName;

    /**
     * email address of the user
     * @var String
     */
    private $emailAddress;

    /**
     * The ID of the user as set by the business i/e/ staff Id number
     * @var String
     */
    private $orgDefinedId;

    /**
     * Api URL to the users profile image
     * @var type
     */
    private $profileBadgeUrl;

    /**
     * Opaque UID for a d2l user.
     * Used in some routes in place of the Identifier.
     * i.e. when privacy is needed or enforced by permissions
     * @var String
     */
    private $profileIdentifier;

    public function __construct($user) {

        $this->identifier = (!empty($user["Identifier"])) ? $user["Identifier"] : Null;
        $this->displayName = (!empty($user["DisplayName"])) ? $user["DisplayName"] : Null;
        $this->emailAddress = (!empty($user["EmailAddress"])) ? $user["EmailAddress"] : Null;
        $this->orgDefinedId = (!empty($user["OrgDefinedId"])) ? $user["OrgDefinedId"] : Null;
        $this->profileBadgeUrl = (!empty($user["ProfileBadgeUrl"])) ? $user["ProfileBadgeUrl"] : Null;
        $this->profileIdentifier = (!empty($user["ProfileIdentifier"])) ? $user["ProfileIdentifier"] : Null;
    }

}
