DELIMITER $$

CREATE DEFINER=`app`@`localhost` FUNCTION `PS_Status`(estimated_end_time time, 
                              empty varchar(1),
                              PSstatus varchar(1) ) RETURNS varchar(10) CHARSET latin1
BEGIN
	DECLARE stat varchar(20);
	
	IF PSstatus = 'F'
	THEN SET stat = "Invalid";
    
	ELSEIF empty = 'T'
	THEN SET stat = "Empty";
    
	ELSEIF estimated_end_time IS NOT NULL
	THEN SET stat = TIMEDIFF(estimated_end_time, CURTIME());
    
    ELSE
    SET stat = "Unknown";
	END IF;
RETURN (stat);
END$$ 
DELIMITER ;