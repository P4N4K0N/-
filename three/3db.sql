use bd3;
create table tests(
    id int auto_increment primary key   NOT NULL,
    script_name varchar(25)            NOT NULL,
    start_time int            NOT NULL,
    end_time int            NOT NULL,
    result enum('normal', 'illegal', 'failed', 'success')         NOT NULL
);

INSERT INTO `tests` VALUES 
    (1,'tempore',0,621,'normal'),
    (2,'quae',808,257093375,'illegal'),
    (3,'earum',86,3,'illegal'),
    (4,'nihil',5221,123,'illegal'),
    (5,'aut',51843403,79008,'illegal'),
    (6,'ducimus',608,19750,'normal'),
    (7,'et',14798574,37415351,'illegal'),
    (8,'hic',46759,18,'illegal'),
    (9,'quasi',62994022,31,'illegal'),
    (10,'quo',1604,81824,'normal'),
    (11,'omnis',976,3720487,'failed'),
    (12,'temporibus',197573411,992,'success'),
    (13,'eligendi',57411552,6098137,'illegal'),
    (14,'nihil',0,43188762,'illegal'),
    (15,'corrupti',82,6456,'success'),
    (16,'aut',87732,44996871,'normal'),
    (17,'culpa',4669,18,'success'),
    (18,'consectetur',97554165,543493882,'illegal'),
    (19,'sit',0,0,'normal'),
    (20,'ad',124,9096660,'normal'),
    (21,'harum',50,44802,'normal'),
    (22,'libero',613475355,0,'failed'),
    (23,'numquam',2,0,'success'),
    (24,'nihil',105505,1838,'failed'),
    (25,'alias',35974161,841048138,'failed')