CREATE DEFINER=`app`@`localhost` PROCEDURE `GetPSStatus`(
	IN ps_garage_no varchar(3),
	IN ps_space_no varchar(3),
	OUT ps_stat varchar(10)
)
BEGIN 
DECLARE startTime time;
DECLARE estiEndTime time;
DECLARE emptyStat varchar(1);
DECLARE statusStat varchar(1);

SELECT estimated_end_time, empty, status
INTO estiEndTime,emptyStat, statusStat
FROM GARAGE_CURRENT_TIME_STATE
WHERE garage_no = ps_garage_no  AND space_no =  ps_space_no;
SELECT PS_Status(estiEndTime, emptyStat, statusStat)
INTO ps_stat;
END