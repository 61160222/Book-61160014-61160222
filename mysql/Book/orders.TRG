TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER SetPrice\n    BEFORE insert ON Orders\n    FOR EACH ROW\nBEGIN\n    IF New.OrderUint > 0 THEN\n        update Orders\n        SET New.Total = New.BookPrice+New.OrderUint;\n    END IF;\n\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER Totalll\n    BEFORE INSERT ON Orders\n    FOR EACH ROW\n\nBEGIN\n\nIF (New.Total < 0) THEN\n        SET New.Totall = (New.Total+New.Totall);\n    END IF;\n\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER Totall AFTER INSERT ON Orders\nFOR EACH ROW\nBEGIN\nDECLARE ttt DECIMAL(18,2) DEFAULT 0;\n\nSELECT SUM(Total) INTO ttt FROM Orders WHERE OrderNumber = new.OrderNumber;\n\nUPDATE Orders SET Total = ttt WHERE OrderNumber = new.OrderNumber;\n\nEND'
sql_modes=1436549152 1436549152 1436549152
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='latin1' 'latin1' 'latin1'
connection_cl_names='latin1_swedish_ci' 'latin1_swedish_ci' 'latin1_swedish_ci'
db_cl_names='utf8_general_ci' 'utf8_general_ci' 'utf8_general_ci'
created=161710891892 161711586172 161711471217
