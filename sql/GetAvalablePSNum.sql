DELIMITER $$
CREATE DEFINER=`app`@`localhost` PROCEDURE `GetAvalablePSNum`(
IN Gnum varchar(3),
IN PSlevel numeric(1,0), 
IN PSarea varchar(1), 
IN PSemployeeOnly varchar(1),
IN PSsizeType varchar(1),
IN PSdiability varchar(1),
OUT numOfAvalablePS INT
)
BEGIN
	SET @sql = CONCAT('SELECT COUNT(*) INTO @num FROM GARAGE_CURRENT_TIME_STATE WHERE  empty = \'T\' ');
	IF PSarea IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND area =\'', PSarea,'\'');
	END IF;

	IF PSlevel IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND level =\'', PSlevel,'\'');
	END IF;

	IF PSsizeType IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND  size_type =\'',PSsizeType,'\'');
	END IF;

	IF PSdiability IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND  disability =\'',PSdiability,'\'');
	END IF;

	IF Gnum IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND garage_no = \'',Gnum,'\'');
	END IF;
	IF PSemployeeOnly IS NOT NULL THEN
	SET @sql = CONCAT( @sql,'AND  employee_only = \'',PSemployeeOnly,'\'');
	END IF;


	
    PREPARE stmt FROM @sql; 
    EXECUTE stmt;
    SET numOfAvalablePS = @num;
    deallocate PREPARE stmt;
END$$ 
DELIMITER ;