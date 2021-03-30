DELIMITER $$

DROP TRIGGER IF EXISTS SetUpperName $$

CREATE TRIGGER SetUpperName
    BEFORE INSERT ON Member
    FOR EACH ROW
BEGIN
    IF (New.Username IS NOT NULL) THEN
        SET New.Username = UPPER(New.Username);
        SET New.Name = UPPER(New.Name);
    END IF;

END $$
DELIMITER ;