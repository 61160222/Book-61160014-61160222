DELIMITER  $$

DROP PROCEDURE IF EXISTS CheckRate $$

CREATE PROCEDURE CheckRate(IN ID INT)
BEGIN
    DECLARE Del  VARCHAR(50);
    DECLARE Del1 VARCHAR(50);

    SELECT Rate INTO Del FROM BookType WHERE BookTypeCode=ID;

    IF (Del = "G") THEN
        SET Del1 = "General";
        UPDATE BookType SET Rate=Del1 WHERE BookTypeCode=ID;
    END IF;

    IF (Del = "PG") THEN
        SET Del1 = "Parental Guidance";
        UPDATE BookType SET Rate=Del1 WHERE BookTypeCode=ID;
    END IF;

    IF (Del = "R") THEN
        SET Del1 = "Restricted";
        UPDATE BookType SET Rate=Del1 WHERE BookTypeCode=ID;
    END IF;

    IF (Del = "NC-17") THEN
        SET Del1 = "No one 17 and under admitted";
        UPDATE BookType SET Rate=Del1 WHERE BookTypeCode=ID;
    END IF;

END $$

DELIMITER  ;