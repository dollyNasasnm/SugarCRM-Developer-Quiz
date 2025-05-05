<?php

class ContactLogicHooks
{
    public function beforeSaveMethod($bean, $event, $arguments)
    {
        $now = new DateTime("now", new DateTimeZone("UTC"));
        
        if (empty($bean->fetched_row['id'])) {
            $bean->counter_c = 1;
        } else {
            $bean->counter_c = (int)$bean->counter_c + 1;
        }

        $bean->epoch_time_c = time();

        // Formatted UTC timestamp with microseconds
        $bean->epoch_time_utc_c = $now->format("Y-m-d H:i:s.u");
    }
}
