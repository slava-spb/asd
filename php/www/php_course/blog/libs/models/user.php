<?php

const ENTITY_USER = 'user';


function userGetBy($attribute, $criteria)
{
    return storageGetItemBy(ENTITY_USER, $attribute, $criteria);
}

