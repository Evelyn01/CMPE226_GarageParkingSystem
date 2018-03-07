DELIMITER $$
CREATE PROCEDURE GetPSbyPlate(
	IN car_plateNo varchar(8),
	OUT p_garageNo varchar(3),
    OUT P_level numeric(1,0),
    OUT P_area varchar(1),
	OUT P_parkSpaceNo varchar(3)
)
BEGIN 
	SELECT garage_no, space_no, level, area INTO p_garageNo, P_parkSpaceNo, p_level, p_area
	FROM GARAGE_CURRENT_TIME_STATE
	WHERE plate_no = car_plateNo;
END$$ 
DELIMITER ;