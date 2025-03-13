CREATE DATABASE cisc3300;

CREATE TABLE workers;
{
    id          int(10) NOT NULL AUTO_INCREMENT,
    firstName   varchar(80) NOT NULL,
    lastName   varchar(80) NOT NULL,
    primary key (id)
};

INSERT INTO workers (name, id)
VALUES 
    ('Randy', 1),
    ('Brian', 2),
    ('Ted', 3),
    ('Bradley', 4);


select * from workers;

select id, name from workers;

select * from workers where id < 2;