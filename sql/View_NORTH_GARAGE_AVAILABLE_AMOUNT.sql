CREATE VIEW NORTH_GARAGE_AVAILABLE_AMOUNT
AS SELECT G.garage_name As GarageName, SUM(P.space_no) AS AvailableAmount
	FROM Garage G JOIN Parking_space P ON G.garage_no = P.Garage_no
	where G.garage_name = 'NorthGarage' AND P.Empty = 'T';