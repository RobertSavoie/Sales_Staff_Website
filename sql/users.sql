-- Rob Savoie
-- 15 Sept 2021
-- WEBD3201
CREATE EXTENSION IF NOT EXISTS pgcrypto;
DROP SEQUENCE IF EXISTS users_id_seq CASCADE;
CREATE SEQUENCE users_id_seq START 1000;
DROP TABLE IF EXISTS users;
CREATE TABLE users(
	Id INT PRIMARY KEY DEFAULT nextval('users_id_seq'),
	EmailAddress VARCHAR(255) UNIQUE,
	Password VARCHAR(255) NOT NULL,
	FirstName VARCHAR(128),
	LastName VARCHAR(128),
	LastAccess TIMESTAMP,
	EnrolDate TIMESTAMP,
	Enable BOOLEAN,
	Type VARCHAR(2)
);

 INSERT INTO users(EmailAddress, Password, FirstName, LastName, LastAccess, EnrolDate, Enable, Type)
 VALUES ('robert.savoie1@dcmail.ca',
		crypt('some_password', gen_salt('bf')),
		'Rob',
		'Savoie',
		'2021-07-06 00:00:00',
		'2021-07-07 11:11:11',
		true,
		's'
		);