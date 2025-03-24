"6. In it create tables called users and userComments. Give them columns that you might think they would need and include a foreign key on userComments that will reference the primary key of the users table. Give the tables some testing data to create multiple users and user comments for some of the users(but not all). 
a. Write a query to return all users and their comments if they have comments or not. 
b. Write a query to return all users and their comments only if they have comments."

CREATE DATABASE `in_class_18`;


CREATE TABLE users (
    userId int(6) NOT NULL AUTO_INCREMENT,
    username VARCHAR(12) NOT NULL,
    password VARCHAR(12) NOT NULL,
    primary key (userId)
);

CREATE TABLE userComments (
    commentId int AUTO_INCREMENT,
    comment VARCHAR(250) NOT NULL,    
);


insert into users (username, Password, userId)
values('Bshaw25', 'password!@#', 1);
insert into users (username, Password, userId)
values('Sfitzgerald26', '12345', 2);
insert into users (username, Password, userId)
values('Pburgess25', 'abcdefg', 3);

insert into userComments (userId, comment) values
(1, 'Comment number 1'), 
(1, 'Comment number 2'),
(3, 'Comment number 1')

SELECT * FROM users
LEFT JOIN userComments ON users.userId = userComments.userId;

SELECT * FROM users
JOIN userComments ON users.userId = userComments.userId;

SELECT * FROM usersJOIN userComments ON users.userId;