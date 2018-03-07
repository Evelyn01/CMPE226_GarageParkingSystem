DELIMITER $$

CREATE DEFINER=`app`@`localhost` FUNCTION `PS_remainTime`(estimated_end_time time,
								empty varchar(1)) RETURNS varchar(10) CHARSET latin1
BEGIN
	DECLARE remainTime VARCHAR(10);
IF empty = 'T'
    THEN SET remainTime = 0;
	ELSEIF estimated_end_time IS NOT NULL
	THEN SET remainTime = TIMEDIFF(estimated_end_time, CURTIME());
	END IF;
RETURN (remainTime);
END$$ 
DELIMITER ;