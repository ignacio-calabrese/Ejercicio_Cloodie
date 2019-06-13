CREATE DATABASE  chat_db;

USE chat_db;

CREATE TABLE chat(
    id          INT AUTO_INCREMENT PRIMARY KEY,
	user_name   VARCHAR(100),
	message	    TEXT NOT NULL,
	date        TIMESTAMP DEFAULT NOW() 
);


