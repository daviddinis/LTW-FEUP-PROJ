PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS user (
    username VARCHAR PRIMARY KEY,
    password VARCHAR NOT NULL,
    name VARCHAR
    -- email VARCHAR, --TO BE IMPLEMENTED
);


CREATE TABLE IF NOT EXISTS reservation (
    resNo INTEGER PRIMARY KEY,
    checkIn DATE, --epoch format
    checkOut DATE, --epoch format
    guests INTEGER, --number of guests
    cost REAL, --cost of whole stay
    placeID INTEGER,
    buyer_username VARCHAR,
    foreign key(placeID) references place(id),
    foreign key(buyer_username) references user(username)
);

CREATE TABLE IF NOT EXISTS place (
    id INTEGER PRIMARY KEY,
    title VARCHAR,
    price REAL, --cost per night
    location VARCHAR, --Address formated as "Country,City,Street,HouseNº,PostalCode"
    description VARCHAR, 
    type VARCHAR, --House, apartment, etc
    owner_username text,
    foreign key(owner_username) references user(username)
);
