profile
name - 20
email -100 unique
phone - exactlty 10 digits unique
gender - male/female

CREATE TABLE profile(
	id int PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    email varchar(100) UNIQUE,
    phone varchar(10) UNIQUE,
    gender ENUM('Male', 'Female') DEFAULT 'Male'
);