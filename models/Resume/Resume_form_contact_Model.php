<?php

class Resume_form_contact_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_data_m($mainObj){
//        mainObj = {
//            profilePic: null,
//        firstName: firstName,
//        lastName: lastName,
//        email: email,
//        phoneNumber: phoneNumber,
//        address: address,
//        city: city,
//        about: aboutYou,
//        experience_id: {'2a': true, '2b': false, '2c': false},
//        experience: [exp1, exp2, exp3],
//        education_id: {'3a': true, '3b': false, '3c': false},
//        education: [edu1, edu2, edu3],
//        skills: skillDetails,
//        project_id: {'5a': true, '5b': false, '5c': false},
//        project: [proj1, proj2, proj3]
//
//    }
       return $mainObj->firstName;
    }
}
