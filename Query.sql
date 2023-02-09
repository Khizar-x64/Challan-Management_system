drop database if exists CHALLANAPP;
create database CHALLANAPP;
use CHALLANAPP;
 
create table Driver
(
	Fname varchar(10),
    Lname varchar(10),
    CNIC varchar(13), primary key(CNIC),
    Phone varchar(15),
    Adress varchar(30),
    DOB date
);
create table Officer
(
	Fname varchar(10),
    Lname varchar(10),
    CNIC varchar(13), primary key(CNIC),
    OfficerID varchar(15),
    Phone varchar(15),
    Adress varchar(30),
    
    DOB date
);
ALTER TABLE Officer
ADD UNIQUE (OfficerID);
create table Vehicle
(
	_Name varchar(15), 
	_Type varchar(15),
    Vehicle_Num varchar(15),
    Owner_CNIC varchar (13), foreign key (Owner_CNIC) references Driver(CNIC)
);
create table Rules
(
	_Type varchar(40), unique(_Type),
    Rule_Num int4,UNIQUE(Rule_Num),
    Fine float8,unique(Fine)
);
create table Challan
(
	Challan_Ticket varchar(20),
	CNIC varchar(13),foreign key (CNIC) references Driver(CNIC),
    Voilation_type varchar(40), foreign key (Voilation_type) references Rules(_Type),
    Fine_amount float8,  foreign key (Fine_amount) references Rules(Fine),
	Rule_Num int4, foreign key (Rule_Num) references Rules(Rule_Num),
	Payment VARCHAR(15),
    _Date date,
    Location varchar(20),
    issuedbyOfficerNo varchar(15),
    foreign key(issuedbyOfficerNo) references Officer(OfficerId)
);
create table Liscence
(
	LiscenceID VARCHAR(15),
	CNIC varchar(13),foreign key (CNIC) references Driver(CNIC),
	_Type varchar(20),
    IssueDate date,
    ExpireDate date
);
select * from driver;
INSERT INTO Driver (Fname, Lname, CNIC, Phone, Adress, DOB)
VALUES ('John', 'Doe', '1234567890123', '123-456-7890', '123 Main St', '2000-01-01'),
       ('Jane', 'Smith', '2345678901234', '123-456-7891', '456 Park Ave', '1995-01-01'),
       ('Bob', 'Johnson', '3456789012345', '123-456-7892', '789 Elm St', '1990-01-01'),
       ('Amy', 'Williams', '4567890123456', '123-456-7893', '321 Oak St', '1985-01-01'),
       ('Michael', 'Jones', '5678901234567', '123-456-7894', '159 Pine St', '1980-01-01'),
       ('Samantha', 'Brown', '6789012345678', '123-456-7895', '753 Cedar St', '1975-01-01'),
       ('David', 'Davis', '7890123456789', '123-456-7896', '964 Birch St', '1970-01-01'),
       ('William', 'Miller', '8901234567890', '123-456-7897', '147 Maple St', '1965-01-01'),
       ('Ashley', 'Moore', '9012345678901', '123-456-7898', '369 Cherry St', '1960-01-01'),
       ('Jessica', 'Taylor', '0123456789012', '123-456-7899', '753 Pear St', '1955-01-01');
INSERT INTO Officer (Fname, Lname, CNIC, OfficerID, Phone, Adress, DOB)
VALUES ('Jacob', 'Smith', '1112223334445', 'O001', '555-555-5555', '100 Elm St', '1990-05-01'),
       ('Emily', 'Johnson', '2223334445556', 'O002', '555-555-5556', '200 Oak St', '1992-07-01'),
       ('Michael', 'Williams', '3334445556667', 'O003', '555-555-5557', '300 Pine St', '1994-09-01'),
       ('Madison', 'Jones', '4445556667778', 'O004', '555-555-5558', '400 Cedar St', '1996-11-01'),
       ('Matthew', 'Brown', '5566677788899', 'O005', '555-555-5559', '500 Birch St', '1998-01-01'),
       ('Olivia', 'Davis', '6677888990000', 'O006', '555-555-5560', '600 Maple St', '2000-03-01'),
       ('Nicholas', 'Miller', '7788899001122', 'O007', '555-555-5561', '700 Cherry St', '2002-05-01'),
       ('Hannah', 'Moore', '8889900112233', 'O008', '555-555-5562', '800 Pear St', '2004-07-01'),
       ('Joshua', 'Taylor', '9990011223334', 'O009', '555-555-5563', '900 Apple St', '2006-09-01'),
       ('Avery', 'Anderson', '1112223334695', 'O010', '555-555-5564', '1000 Peach St', '2008-11-01');
INSERT INTO Rules (_Type, Rule_Num, Fine)
VALUES ('Speeding', 101, 100.00),
       ('Running a red light', 102, 150.00),
       ('Failure to stop', 103, 2.00),
       ('Driving under the influence', 104, 500.00),
       ('Driving without a license', 105, 250.00),
       ('Driving without insurance', 106, 300.00),
       ('Reckless driving', 107, 400.00),
       ('Hit and run', 108, 600.00),
       ('Seatbelt violation', 109, 50.00),
       ('Texting while driving', 110, 200.00);
INSERT INTO Liscence (LiscenceID, CNIC, _Type, IssueDate, ExpireDate)
VALUES ('L001', '1234567890123', 'Full', '2022-01-01', '2027-01-01'),
       ('L002', '2345678901234', 'HTV', '2022-02-01', '2027-02-01'),
       ('L003', '3456789012345', 'LTV', '2022-03-01', '2027-03-01'),
       ('L004', '4567890123456', 'Full', '2022-04-01', '2027-04-01'),
       ('L005', '5678901234567', 'LTV', '2022-05-01', '2027-05-01'),
       ('L006', '6789012345678', 'CAR MOTOR', '2022-06-01', '2027-06-01'),
       ('L007', '7890123456789', 'Full', '2022-07-01', '2027-07-01'),
       ('L008', '8901234567890', 'BIKE', '2022-08-01', '2027-08-01'),
       ('L009', '9012345678901', 'HTV', '2022-09-01', '2027-09-01'),
       ('L010', '0123456789012', 'Full', '2022-10-01', '2027-10-01');
INSERT INTO Challan (Challan_Ticket, CNIC, Voilation_type, Fine_amount, Rule_Num, Payment, _Date, Location,issuedbyOfficerNo)
VALUES ('C001', '1234567890123', 'Speeding', 100.00, 101, 'Paid', '2022-01-01', 'Main St', 'O001'),
       ('C002', '2345678901234', 'Running a red light', 150.00, 102, 'Paid', '2022-02-01', 'Park Ave','O006'),
       ('C003', '3456789012345', 'Failure to stop', 200.00, 103, 'Unpaid', '2022-03-01', 'Elm St','O008'),
       ('C004', '4567890123456', 'Driving under the influence', 500.00, 104, 'Paid', '2022-04-01', 'Oak St','O009'),
       ('C005', '5678901234567', 'Driving without a license', 250.00, 105, 'Paid', '2022-05-01', 'Pine St','O010'),
       ('C006', '6789012345678', 'Driving without insurance', 300.00, 106, 'Unpaid', '2022-06-01', 'Cedar St','O002'),
       ('C007', '7890123456789', 'Reckless driving', 400.00, 107, 'Paid', '2022-07-01', 'Birch St','O003'),
       ('C008', '8901234567890', 'Hit and run', 600.00, 108, 'Paid', '2022-08-01', 'Maple St','O001'),
       ('C009', '9012345678901', 'Seatbelt violation', 50.00, 109, 'Unpaid', '2022-09-01', 'Cherry St','O010'),
       ('C010', '0123456789012', 'Texting while driving', 200.00, 110, 'Paid', '2022-10-01', 'Pear St','O009'),
       ('C021', '4567890123456', 'Speeding', 100.00, 101, 'Paid', '2023-02-01', 'Oak St','O004'),
       ('C022', '5678901234567', 'Driving under the influence', 500.00, 104, 'Unpaid', '2023-03-01', 'Pine St','O007'),
       ('C023', '6789012345678', 'Reckless driving', 400.00, 107, 'Paid', '2023-04-01', 'Cedar St','O003'),
       ('C024', '7890123456789', 'Hit and run', 600.00, 108, 'Unpaid', '2023-05-01', 'Maple St','O004'),
       ('C025', '8901234567890', 'Driving without insurance', 300.00, 106, 'Paid', '2023-06-01', 'Willow St','O005'),
       ('C026', '9012345678901', 'Seatbelt violation', 100.00, 109, 'Unpaid', '2023-07-01', 'Birch St','O001'),
       ('C027', '0123456789012', 'Running a red light', 150.00, 102, 'Paid', '2023-08-01', 'Ash St','O006'),
       ('C028', '1234567890123', 'Failure to stop', 200.00, 103, 'Unpaid', '2023-09-01', 'Cherry St','O004'),
       ('C029', '2345678901234', 'Speeding', 100.00, 101, 'Paid', '2023-10-01', 'Elm St','O002'),
       ('C030', '3456789012345', 'Texting while driving', 200.00, 110, 'Unpaid', '2023-11-01', 'Oak St','O009');

INSERT INTO Vehicle (_Name, _Type, Vehicle_Num, Owner_CNIC)
VALUES ('Honda Civic', 'Sedan', 'ABC-123', '1234567890123'),
       ('Toyota Camry', 'Sedan', 'DEF-456', '2345678901234'),
       ('Ford Mustang', 'Sports', 'GHI-789', '3456789012345'),
       ('Chevrolet Tahoe', 'SUV', 'JKL-012', '4567890123456'),
       ('Dodge Challenger', 'Sports', 'MNO-345', '5678901234567'),
       ('Jeep Wrangler', 'SUV', 'PQR-678', '6789012345678'),
       ('Nissan Altima', 'Sedan', 'STU-901', '7890123456789'),
       ('BMW X5', 'SUV', 'VWX-234', '8901234567890'),
       ('Subaru Outback', 'SUV', 'YZ-567', '9012345678901'),
       ('Audi A4', 'Sedan', 'AAA-999', '0123456789012'),
       ('Ferrari 488', 'Sports', 'AAA-111', '1234567890123'),
       ('Lamborghini Aventador', 'Sports', 'BBB-222', '2345678901234'),
       ('Porsche 911', 'Sports', 'CCC-333', '3456789012345'),
       ('Aston Martin DB11', 'Sports', 'DDD-444', '4567890123456'),
       ('Bentley Continental', 'Luxury', 'EEE-555', '5678901234567'),
       ('Rolls Royce Ghost', 'Luxury', 'FFF-666', '6789012345678'),
       ('McLaren 720S', 'Sports', 'GGG-777', '7890123456789'),
       ('Bugatti Chiron', 'Sports', 'HHH-888', '8901234567890'),
       ('Koenigsegg Agera', 'Sports', 'III-999', '9012345678901'),
       ('Rimac C_Two', 'Electric', 'JJJ-000', '0123456789012');

select * from challan;
	   -- ---------------VIEWS -------------------
	   -- view to show the details of all unpaid challans
	   CREATE VIEW unpaid_challans AS
		SELECT Driver.Fname, Driver.Lname, Challan.Challan_Ticket, Challan.Voilation_type, Challan.Fine_amount, Challan._Date, Challan.Location,Challan.issuedbyOfficerNo
		FROM Driver
		JOIN Challan ON Driver.CNIC = Challan.CNIC
		WHERE Challan.Payment = 'Unpaid';
        select * from unpaid_challans;
		-- view to show the details of all vehicles and their owners
		CREATE VIEW vehicle_owners AS
		SELECT _Name, _Type, Vehicle_Num, Driver.Fname, Driver.Lname, Driver.Phone
		FROM Vehicle
		JOIN Driver ON Vehicle.Owner_CNIC = Driver.CNIC;
         select * from vehicle_owners;
		-- view to show the details of all drivers and their unpaid challans count
		CREATE VIEW unpaid_challans_count AS
		SELECT Driver.Fname, Driver.Lname, COUNT(Challan.CNIC) AS unpaid_challans
		FROM Driver
		JOIN Challan ON Driver.CNIC = Challan.CNIC
		WHERE Challan.Payment = 'Unpaid'
		GROUP BY Driver.Fname, Driver.Lname;
        select * from unpaid_challans_count;
		-- View for displaying drivers with outstanding fines:
CREATE VIEW OutstandingFines AS
SELECT Driver.Fname, Driver.Lname, Driver.CNIC, SUM(Challan.Fine_amount) AS TotalFine
FROM Driver
LEFT JOIN Challan ON Driver.CNIC = Challan.CNIC
GROUP BY Driver.CNIC
HAVING SUM(Challan.Fine_amount) > 0;
select * from OutstandingFines;
        


	   -- --------  PROCEDURES --------------
-- Procedure for renewing a license
DELIMITER $$
CREATE PROCEDURE IssueChallan (
	IN Challan_Ticket VARCHAR(20),
	IN CNIC VARCHAR(13),
	IN Voilation_type VARCHAR(40),
	IN Fine_amount FLOAT8,
	IN Rule_Num INT4,
	IN Payment VARCHAR(15),
	IN _Date DATE,
	IN Location VARCHAR(20),
	IN issuedbyOfficerNo VARCHAR(15)
)

BEGIN
	INSERT INTO Challan (Challan_Ticket, CNIC, Voilation_type, Fine_amount, Rule_Num, Payment, _Date, Location, issuedbyOfficerNo)
	VALUES (Challan_Ticket, CNIC, Voilation_type, Fine_amount, Rule_Num, Payment, _Date, Location, issuedbyOfficerNo);
END$$
DELIMITER ;
CAll IssueChallan('C037','8901234567890','Reckless driving',400,107,'Unpaid','2023-07-11','Birch St','O006');
select * from challan;
-- A stored procedure to update the address of a driver
DELIMITER $$
CREATE PROCEDURE update_driver_address (IN cnic VARCHAR(13), IN new_address VARCHAR(30))
BEGIN
    UPDATE Driver
    SET driver.Adress = new_address
    WHERE Driver.CNIC = cnic;
END$$
DELIMITER ;
-- drop procedure update_driver_address; 
CALL update_driver_address('1234567890123',"Newyork ,Street 46");
select * from driver;
-- A stored procedure to check if a driver has any paid challans
DELIMITER $$
CREATE PROCEDURE Check_Paid_challans (IN cnic VARCHAR(13))
BEGIN
  select * from challan where challan.CNIC=cnic and Payment='Paid';

END$$
DELIMITER ;
 -- drop procedure Check_Paid_challans;
CALL check_Paid_challans('8901234567890');
-- A stored procedure to get the total fine amount for a driver
DELIMITER $$
CREATE PROCEDURE get_total_fine_amount (IN cnic VARCHAR(13))
BEGIN
    SELECT SUM(Fine_amount) as total_fine
    FROM Challan
    WHERE Challan.CNIC = cnic;
END$$
DELIMITER ;
CALL get_total_fine_amount('1234567890123');
-- A stored procedure to get the number of challans for a specific rule violation type
DELIMITER $$
CREATE PROCEDURE get_challan_count_by_type (IN violation_type VARCHAR(40))
BEGIN
    SELECT COUNT(*) as challan_count
    FROM Challan
    WHERE Challan.Voilation_type = violation_type;
END$$
DELIMITER ;
CALL get_challan_count_by_type('Driving under the influence');