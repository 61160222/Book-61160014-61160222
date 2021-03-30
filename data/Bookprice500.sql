DELIMITER $$

DROP TRIGGER IF EXISTS Bookprice500 $$

CREATE TRIGGER Bookprice500
    BEFORE INSERT ON Book
    FOR EACH ROW
BEGIN
    IF (New.BookPrice < 500) THEN
        SET New.BookPrice = (New.BookPrice+25);
    END IF;
END $$

DELIMITER ;