TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER SetUpperName\n    BEFORE INSERT ON Member\n    FOR EACH ROW\nBEGIN\n    IF (New.Username IS NOT NULL) THEN\n        SET New.Username = UPPER(New.Username);\n        SET New.Name = UPPER(New.Name);\n    END IF;\n\nEND'
sql_modes=1436549152
definers='root@localhost'
client_cs_names='latin1'
connection_cl_names='latin1_swedish_ci'
db_cl_names='utf8_general_ci'
created=161669722627
