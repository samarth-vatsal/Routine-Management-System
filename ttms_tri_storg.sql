
CREATE PROCEDURE ClassroomsList()
SELECT * FROM classrooms;

DELIMITER $$
CREATE TRIGGER log_newClassrooms AFTER INSERT
ON classrooms
FOR EACH ROW BEGIN
	INSERT INTO logs (Lname, Laction) VALUES (NEW.name,"classroom Created");
END $$


DELIMITER $$
CREATE TRIGGER log_deleteClassrooms BEFORE DELETE
ON classrooms
FOR EACH ROW BEGIN
	INSERT INTO logs (Lname, Laction) VALUES (OLD.name,"classrooms Deleted");
END $$
