<?php

$hook_array['before_save'][] = [
    1,
    'Increment counter and set timestamps',
    'custom/modules/Contacts/ContactLogicHooks.php',
    'ContactLogicHooks',
    'beforeSaveMethod'
];
