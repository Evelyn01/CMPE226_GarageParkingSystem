DELIMITER $$

CREATE TRIGGER update_real_end_time
AFTER UPDATE ON Parking_space
FOR EACH ROW
BEGIN
	IF NEW.Empty != 'F' 
    THEN
		UPDATE Park
		SET real_end_time = CURRENT_TIME()
        WHERE space_no = OLD.space_no AND real_end_time IS NULL;
	END IF;
END$$ 
DELIMITER ;