CREATE TABLE files (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    datatype varchar(255) NOT NULL,
    data BLOB NOT NULL,
    PRIMARY KEY (id)
);
