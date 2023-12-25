CREATE TABLE admin (
    adminID int NOT NULL,
    username varchar(20) NOT NULL, 
    password varchar(255) NOT NULL,
    PRIMARY KEY (adminID)
);

INSERT INTO admin (username, password)
VALUES ('Juan', SHA2('rahasia', 0));

ALTER TABLE admin
MODIFY COLUMN 
username varchar(64) NOT NULL;