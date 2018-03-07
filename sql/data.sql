use cmpe226_team_project;

/* data in Garage */
insert into Garage values ('G01', 'North Garage');
insert into Garage values ('G02', 'West Garage');
insert into Garage values ('G03', 'South Garage');

/* data in Parking_space */
/* G01 */
insert into Parking_space values ('S01', 'G01', 'T', 'T', 'T', 0, 'B', 1, 'A', 'F');
insert into Parking_space values ('S02', 'G01', 'T', 'T', 'T', 0, 'B', 1, 'A', 'F');
insert into Parking_space values ('S03', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S04', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'B', 'F');
insert into Parking_space values ('S05', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S06', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S07', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S08', 'G01', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S09', 'G01', 'T', 'T', 'F', 0, 'S', 1, 'C', 'T');
insert into Parking_space values ('S10', 'G01', 'F', 'T', 'F', 0, 'S', 1, 'C', 'T'); /* cannot park */
insert into Parking_space values ('S11', 'G01', 'T', 'F', 'T', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S12', 'G01', 'T', 'F', 'T', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S13', 'G01', 'T', 'F', 'T', 0, 'B', 2, 'A', 'F');
insert into Parking_space values ('S14', 'G01', 'T', 'F', 'T', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S15', 'G01', 'T', 'F', 'F', 30, 'S', 2, 'B', 'T');
insert into Parking_space values ('S16', 'G01', 'T', 'F', 'F', 30, 'B', 2, 'B', 'T');
insert into Parking_space values ('S17', 'G01', 'T', 'F', 'F', 30, 'B', 2, 'B', 'T');
insert into Parking_space values ('S18', 'G01', 'T', 'F', 'F', 30, 'B', 2, 'B', 'T');
insert into Parking_space values ('S19', 'G01', 'T', 'F', 'F', 30, 'B', 2, 'B', 'T');
insert into Parking_space values ('S20', 'G01', 'T', 'F', 'F', 60, 'S', 2, 'C', 'T');
insert into Parking_space values ('S21', 'G01', 'T', 'F', 'F', 60, 'B', 2, 'C', 'T');
insert into Parking_space values ('S22', 'G01', 'T', 'F', 'F', 60, 'B', 2, 'C', 'T');
insert into Parking_space values ('S23', 'G01', 'T', 'F', 'F', 120, 'S', 2, 'D', 'T');
insert into Parking_space values ('S24', 'G01', 'T', 'F', 'F', 120, 'B', 2, 'D', 'T');
insert into Parking_space values ('S25', 'G01', 'T', 'F', 'F', 120, 'B', 2, 'D', 'T');
insert into Parking_space values ('S26', 'G01', 'F', 'F', 'F', 0, 'B', 3, 'A', 'T'); /* cannot park */
insert into Parking_space values ('S27', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S28', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S29', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S30', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S31', 'G01', 'T', 'F', 'F', 0, 'S', 3, 'B', 'T');
insert into Parking_space values ('S32', 'G01', 'T', 'F', 'F', 0, 'S', 3, 'B', 'T');
insert into Parking_space values ('S33', 'G01', 'T', 'F', 'F', 0, 'S', 3, 'B', 'T');
insert into Parking_space values ('S34', 'G01', 'T', 'F', 'F', 0, 'S', 3, 'B', 'T');
insert into Parking_space values ('S35', 'G01', 'T', 'F', 'F', 0, 'S', 3, 'B', 'T');
insert into Parking_space values ('S36', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S37', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S38', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S39', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S40', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S41', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S42', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S43', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S44', 'G01', 'T', 'F', 'F', 0, 'B', 3, 'D', 'F');
insert into Parking_space values ('S45', 'G01', 'F', 'F', 'F', 0, 'B', 3, 'D', 'T'); /* cannot park */
/* G02 */
insert into Parking_space values ('S01', 'G02', 'T', 'T', 'T', 0, 'S', 1, 'A', 'T');
insert into Parking_space values ('S02', 'G02', 'T', 'T', 'T', 0, 'B', 1, 'A', 'T');
insert into Parking_space values ('S03', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'A', 'T');
insert into Parking_space values ('S04', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'A', 'T');
insert into Parking_space values ('S05', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'A', 'T');
insert into Parking_space values ('S06', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'A', 'T');
insert into Parking_space values ('S07', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S08', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'B', 'F');
insert into Parking_space values ('S09', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S10', 'G02', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S11', 'G02', 'T', 'F', 'F', 0, 'S', 1, 'B', 'T');
insert into Parking_space values ('S12', 'G02', 'T', 'F', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S13', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'F');
insert into Parking_space values ('S14', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S15', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S16', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S17', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S18', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'F');
insert into Parking_space values ('S19', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S20', 'G02', 'T', 'F', 'T', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S21', 'G02', 'T', 'F', 'F', 0, 'S', 2, 'A', 'T');
insert into Parking_space values ('S22', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S23', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S24', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S25', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'A', 'T');
insert into Parking_space values ('S26', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'B', 'T');
insert into Parking_space values ('S27', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'B', 'T');
insert into Parking_space values ('S28', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'B', 'T');
insert into Parking_space values ('S29', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'B', 'T');
insert into Parking_space values ('S30', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'B', 'T');
insert into Parking_space values ('S31', 'G02', 'T', 'F', 'F', 0, 'S', 2, 'C', 'T');
insert into Parking_space values ('S32', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'C', 'T');
insert into Parking_space values ('S33', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'C', 'T');
insert into Parking_space values ('S34', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'C', 'T');
insert into Parking_space values ('S35', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'C', 'T');
insert into Parking_space values ('S36', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'D', 'T');
insert into Parking_space values ('S37', 'G02', 'T', 'F', 'F', 0, 'B', 2, 'D', 'T');
insert into Parking_space values ('S38', 'G02', 'F', 'F', 'F', 0, 'B', 2, 'D', 'T'); /* cannot park */
insert into Parking_space values ('S39', 'G02', 'F', 'F', 'F', 0, 'B', 2, 'D', 'T'); /* cannot park */
insert into Parking_space values ('S40', 'G02', 'F', 'F', 'F', 0, 'B', 2, 'D', 'T'); /* cannot park */
insert into Parking_space values ('S41', 'G02', 'T', 'F', 'F', 0, 'S', 3, 'A', 'T');
insert into Parking_space values ('S42', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S43', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S44', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S45', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'A', 'T');
insert into Parking_space values ('S46', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'B', 'T');
insert into Parking_space values ('S47', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'B', 'T');
insert into Parking_space values ('S48', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'B', 'T');
insert into Parking_space values ('S49', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'B', 'T');
insert into Parking_space values ('S50', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'B', 'T');
insert into Parking_space values ('S51', 'G02', 'T', 'F', 'F', 0, 'S', 3, 'C', 'T');
insert into Parking_space values ('S52', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S53', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S54', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S55', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'C', 'T');
insert into Parking_space values ('S56', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S57', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S58', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S59', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S60', 'G02', 'T', 'F', 'F', 0, 'B', 3, 'D', 'T');
insert into Parking_space values ('S61', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'A', 'T');
insert into Parking_space values ('S62', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'A', 'T');
insert into Parking_space values ('S63', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'A', 'T');
insert into Parking_space values ('S64', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'A', 'T');
insert into Parking_space values ('S65', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'A', 'T');
insert into Parking_space values ('S66', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'B', 'T');
insert into Parking_space values ('S67', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'B', 'T');
insert into Parking_space values ('S68', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'B', 'T');
insert into Parking_space values ('S69', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'B', 'T');
insert into Parking_space values ('S70', 'G02', 'T', 'F', 'F', 0, 'B', 4, 'B', 'F');
insert into Parking_space values ('S71', 'G02', 'T', 'F', 'F', 0, 'S', 4, 'C', 'T');
insert into Parking_space values ('S72', 'G02', 'T', 'F', 'F', 0, 'S', 4, 'C', 'F');
insert into Parking_space values ('S73', 'G02', 'T', 'F', 'F', 0, 'S', 4, 'C', 'T');
insert into Parking_space values ('S74', 'G02', 'T', 'F', 'F', 0, 'S', 4, 'C', 'T');
insert into Parking_space values ('S75', 'G02', 'T', 'F', 'F', 0, 'S', 4, 'C', 'T');
/* G03 */
insert into Parking_space values ('S01', 'G03', 'T', 'T', 'F', 0, 'S', 1, 'A', 'F');
insert into Parking_space values ('S02', 'G03', 'T', 'T', 'F', 0, 'S', 1, 'A', 'T');
insert into Parking_space values ('S03', 'G03', 'T', 'T', 'F', 0, 'S', 1, 'A', 'T');
insert into Parking_space values ('S04', 'G03', 'T', 'T', 'F', 0, 'S', 1, 'A', 'T');
insert into Parking_space values ('S05', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'B', 'F');
insert into Parking_space values ('S06', 'G03', 'T', 'T', 'T', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S07', 'G03', 'T', 'T', 'T', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S08', 'G03', 'T', 'T', 'T', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S09', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S10', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'B', 'F');
insert into Parking_space values ('S11', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S12', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'B', 'T');
insert into Parking_space values ('S13', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S14', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S15', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S16', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S17', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S18', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S19', 'G03', 'T', 'T', 'F', 0, 'B', 1, 'C', 'T');
insert into Parking_space values ('S20', 'G03', 'F', 'T', 'F', 0, 'B', 1, 'C', 'T'); /* cannot park */
insert into Parking_space values ('S21', 'G03', 'F', 'F', 'T', 0, 'B', 1, 'D', 'T'); /* cannot park */
insert into Parking_space values ('S22', 'G03', 'T', 'F', 'T', 0, 'B', 1, 'D', 'T');
insert into Parking_space values ('S23', 'G03', 'T', 'F', 'T', 0, 'B', 1, 'D', 'T');
insert into Parking_space values ('S24', 'G03', 'T', 'F', 'T', 0, 'B', 1, 'D', 'T');
insert into Parking_space values ('S25', 'G03', 'T', 'F', 'T', 0, 'B', 1, 'D', 'T');
insert into Parking_space values ('S26', 'G03', 'T', 'F', 'F', 30, 'B', 1, 'E', 'T');
insert into Parking_space values ('S27', 'G03', 'T', 'F', 'F', 30, 'B', 1, 'E', 'T');
insert into Parking_space values ('S28', 'G03', 'T', 'F', 'F', 30, 'B', 1, 'E', 'T');
insert into Parking_space values ('S29', 'G03', 'T', 'F', 'F', 30, 'B', 1, 'E', 'T');
insert into Parking_space values ('S30', 'G03', 'T', 'F', 'F', 30, 'B', 1, 'E', 'T');
insert into Parking_space values ('S31', 'G03', 'T', 'F', 'F', 60, 'B', 1, 'F', 'T');
insert into Parking_space values ('S32', 'G03', 'T', 'F', 'F', 60, 'B', 1, 'F', 'T');
insert into Parking_space values ('S33', 'G03', 'T', 'F', 'F', 60, 'B', 1, 'F', 'T');
insert into Parking_space values ('S34', 'G03', 'T', 'F', 'F', 60, 'B', 1, 'F', 'T');
insert into Parking_space values ('S35', 'G03', 'T', 'F', 'F', 60, 'B', 1, 'F', 'F');
								  
/* data in Vehicle */
insert into Vehicle values ('ABC-111', 'E', '2017-12-31');
insert into Vehicle values ('ABC-222', 'E', '2017-12-31');
insert into Vehicle values ('ABC-333', 'E', '2017-12-31');
insert into Vehicle values ('ABC-444', 'E', '2017-12-31');
insert into Vehicle values ('ABC-555', 'E', '2017-12-31');
insert into Vehicle values ('ABC-666', 'E', '2017-12-31');
insert into Vehicle values ('ABC-777', 'E', '2017-12-31');
insert into Vehicle values ('ABC-888', 'E', '2017-12-31');
insert into Vehicle values ('ABC-999', 'E', '2017-12-31');
insert into Vehicle values ('BCD-111', 'S', '2017-10-15');  /* expired */
insert into Vehicle values ('BCD-222', 'S', '2017-12-31');
insert into Vehicle values ('BCD-333', 'S', '2017-10-15');  /* expired */
insert into Vehicle values ('BCD-444', 'S', '2017-12-31');
insert into Vehicle values ('BCD-555', 'S', '2017-12-31');
insert into Vehicle values ('BCD-666', 'S', '2017-12-31');
insert into Vehicle values ('BCD-777', 'S', '2017-12-31');
insert into Vehicle values ('BCD-888', 'S', '2017-12-31');
insert into Vehicle values ('BCD-999', 'S', '2017-12-31');
insert into Vehicle values ('CDE-111', null, null);
insert into Vehicle values ('CDE-222', null, null);
insert into Vehicle values ('CDE-333', null, null);
insert into Vehicle values ('CDE-444', null, null);
insert into Vehicle values ('CDE-555', null, null);
insert into Vehicle values ('CDE-666', null, null);
insert into Vehicle values ('CDE-777', null, null);
insert into Vehicle values ('CDE-888', null, null);
insert into Vehicle values ('CDE-999', null, null);

/* data in Park */  /* Should not park today G01: 10, 26, 45  G02: 38, 39, 40  G3: 20, 21 */
insert into Park values ('ABC-111', 'S08', 'G01', '11:12:38', '23:59:59', '18:31:51', 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-222', 'S01', 'G02', '08:55:24', '23:59:59', '17:12:08', 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-333', 'S01', 'G01', '11:45:07', '23:59:59', null, 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-444', 'S13', 'G03', '09:47:30', '23:59:59', '18:00:25', 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-555', 'S10', 'G03', '17:40:22', '23:59:59', null, 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-666', 'S07', 'G01', '11:41:09', '23:59:59', '19:00:00', 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-777', 'S05', 'G03', '16:25:50', '23:59:59', null, 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-888', 'S04', 'G01', '07:11:31', '23:59:59', null, 
						 '2017-11-08', 'T', 'E');
insert into Park values ('ABC-999', 'S08', 'G02', '12:01:19', '23:59:59', null, 
						 '2017-11-08', 'T', 'E');						 
insert into Park values ('BCD-111', 'S02', 'G01', '17:45:22', '23:59:59', null, 
						 '2017-11-08', 'T', 'S');
insert into Park values ('BCD-222', 'S13', 'G01', '12:15:50', '23:59:59', null, 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-333', 'S21', 'G02', '08:33:38', '23:59:59', '15:00:18', 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-444', 'S13', 'G02', '16:30:16', '23:59:59', null, 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-555', 'S70', 'G02', '06:51:00', '23:59:59', null, 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-666', 'S66', 'G02', '09:36:47', '23:59:59', '18:13:18', 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-777', 'S38', 'G02', '12:20:11', '23:59:59', '12:45:05', 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-888', 'S44', 'G01', '18:01:24', '23:59:59', null, 
						 '2017-11-08', 'F', 'S');
insert into Park values ('BCD-999', 'S35', 'G03', '17:08:29', '18:08:29', null, 
						 '2017-11-08', 'F', 'S');
insert into Park values ('CDE-111', 'S01', 'G03', '17:45:22', null, null, 
						 '2017-11-08', 'T', null);
insert into Park values ('CDE-222', 'S25', 'G01', '10:58:25', '12:28:25', '12:12:12', 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-333', 'S18', 'G02', '13:12:50', '23:59:59', null, 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-444', 'S26', 'G03', '11:15:22', '11:45:25', '11:40:40', 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-555', 'S35', 'G03', '10:45:23', '11:45:23', '11:48:30', 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-666', 'S27', 'G03', '09:10:04', '09:40:04', '09:39:12', 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-777', 'S72', 'G02', '09:38:22', '23:59:59', null, 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-888', 'S45', 'G01', '13:31:44', null, '14:02:02', 
						 '2017-11-08', 'F', null);
insert into Park values ('CDE-999', 'S27', 'G03', '15:15:15', null, '15:23:01', 
						 '2017-11-08', 'F', null);
