Author: Yogesh singh
Author URL: http://makitweb.com/
Author Email: yssyogesh@makitweb.com
Tutorial Link: http://makitweb.com/login-page-with-remember-me-in-php/

db create

CREATE TABLE users (
    id INTEGER PRIMARY KEY,
    username TEXT NOT NULL,
    password TEXT NOT NULL
);

INSERT into users(username,password) values('admin','admin');
