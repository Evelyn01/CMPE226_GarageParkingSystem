CREATE VIEW GARAGE_CURRENT_TIME_STATE
AS SELECT PS.garage_no garage_no, 
PS.space_no space_no, 
PS.status status, 
PS.employee_only employee_only, 
PS. disability disability, 
PS.time_limit time_limit, 
PS.size_type size_type, 
PS.level level, 
PS.area area, 
PS.empty empty, 
P.plate_no plate_no, 
P.start_time start_time, 
P.estimated_end_time estimated_end_time, 
P.real_end_time real_end_time, 
P.park_date park_date, 
P.permit_type permit_type 
	FROM Parking_space PS left JOIN Park P ON PS.garage_no = P.garage_no 
AND PS.space_no = P.space_no
AND P.park_date =  curdate()
AND P.real_end_time IS NULL;