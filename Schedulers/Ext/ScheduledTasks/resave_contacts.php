<?php


array_push($job_strings, 'resave_contacts');
function resave_contacts()
{
    $contactBean = BeanFactory::getBean('Contacts');

    $contacts = $contactBean->get_full_list();

    foreach ($contacts as $contact) {
        $contact->save();  
        $GLOBALS['db']->query("
            UPDATE contacts 
            SET date_modified = {$GLOBALS['db']->quoted($originalDateModified)} 
            WHERE id = {$GLOBALS['db']->quoted($contact->id)}
            ");
    }


    return true;
}



