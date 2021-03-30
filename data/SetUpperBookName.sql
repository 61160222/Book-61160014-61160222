DELIMITER $$

DROP TRIGGER IF EXISTS SetUpperBookName $$

CREATE TRIGGER SetUpperBookName
    BEFORE INSERT ON BookType
    FOR EACH ROW
BEGIN
    IF (New.BookTypeName IS NOT NULL) THEN
        SET New.BookTypeName = UPPER(New.BookTypeName);
    END IF;

END $$
DELIMITER ;