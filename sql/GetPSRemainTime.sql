DELIMITER $$

CREATE DEFINER=`app`@`localhost` PROCEDURE `GetPSRemainTime`(
	IN ps_garage_no varchar(3),
	IN ps_space_no varchar(4),
	OUT ps_remainTime varchar(10)
)
BEGIN 
DECLARE estiEndTime time;
DECLARE emptyStat varchar(1);

SELECT estimated_end_time,empty
	    INTO estiEndTime, emptyStat
FROM GARAGE_CURRENT_TIME_STATE
WHERE garage_no = ps_garage_no AND space_no =  ps_space_no;

SELECT PS_remainTime(estiEndTime, emptyStat)
INTO ps_remainTime;

END$$ 
DELIMITER ;