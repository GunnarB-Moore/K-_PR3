CREATE TABLE Todo (
    id varchar(30) PRIMARY KEY,
    bezeichnung varchar(255) NOT NULL,
    faelligkeit date NOT NULL,
    status int(1) NOT NULL
);