CREATE TABLE customers(
    user_id int(11) AUTO_INCREAMENT PRIMARY KEY not null,
    user_firstname varchar(250) not null,
    user_secondname varchar(50) not null,
    user_phone bigint(50) not null,
    user_idnumber bigint(50) not null,
    user_passengers varchar(50) not null,
    user_origin varchar(50) not null,
    user_destination varchar(50) not null,
    user_date date(30) not null,

);