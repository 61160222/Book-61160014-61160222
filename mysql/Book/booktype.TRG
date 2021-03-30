TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER SetUpperBookName\n    BEFORE INSERT ON BookType\n    FOR EACH ROW\nBEGIN\n    IF (New.BookTypeName IS NOT NULL) THEN\n        SET New.BookTypeName = UPPER(New.BookTypeName);\n    END IF;\n\nEND'
sql_modes=1436549152
definers='root@localhost'
client_cs_names='latin1'
connection_cl_names='latin1_swedish_ci'
db_cl_names='utf8_general_ci'
created=161669758054
