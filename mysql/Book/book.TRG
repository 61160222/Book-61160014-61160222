TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER Bookprice500\n    BEFORE INSERT ON Book\n    FOR EACH ROW\nBEGIN\n    IF (New.BookPrice < 500) THEN\n        SET New.BookPrice = (New.BookPrice+25);\n    END IF;\nEND'
sql_modes=1436549152
definers='root@localhost'
client_cs_names='latin1'
connection_cl_names='latin1_swedish_ci'
db_cl_names='utf8_general_ci'
created=161709478805
