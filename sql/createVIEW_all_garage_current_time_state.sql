CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `app`@`localhost` 
    SQL SECURITY DEFINER
VIEW `all_garage_current_time_state` AS
    SELECT 
        `PS`.`garage_no` AS `garage_no`,
        `PS`.`space_no` AS `space_no`,
        `PS`.`status` AS `status`,
        `PS`.`employee_only` AS `employee_only`,
        `PS`.`disability` AS `disability`,
        `PS`.`time_limit` AS `time_limit`,
        `PS`.`size_type` AS `size_type`,
        `PS`.`level` AS `level`,
        `PS`.`area` AS `area`,
        `PS`.`empty` AS `empty`,
        `P`.`plate_no` AS `plate_no`,
        `P`.`start_time` AS `start_time`,
        `P`.`estimated_end_time` AS `estimated_end_time`,
        `P`.`real_end_time` AS `real_end_tiupdate_real_end_timeme`,
        `P`.`park_date` AS `park_date`,
        `P`.`permit_type` AS `permit_type`
    FROM
        (`parking_space` `PS`
        LEFT JOIN `park` `P` ON (((`PS`.`garage_no` = `P`.`garage_no`)
            AND (`PS`.`space_no` = `P`.`space_no`)
            AND (`P`.`park_date` = '2017-11-08'))))