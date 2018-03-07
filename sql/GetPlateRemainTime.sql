DELIMITER $$
CREATE DEFINER=`app`@`localhost` PROCEDURE `GetPlateRemainTime`(
		IN car_plateNo varchar(8),
		OUT plate_remainTime varchar(10)
)
BEGIN 

DECLARE estiEndTime time;
DECLARE emptyStat varchar(1);

SELECT estimated_end_time, empty 
		INTO estiEndTime, emptyStat
FROM GARAGE_CURRENT_TIME_STATE
WHERE plate_no = car_plateNo;
SELECT PS_remainTime(estiEndTime, emptyStat)
INTO plate_remainTime;
END$$ 
DELIMITER ;