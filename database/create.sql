PRAGMA foreign_keys = ON;

CREATE TABLE IF NOT EXISTS user (
    username VARCHAR PRIMARY KEY,
    password VARCHAR NOT NULL, --PHP5.5 bcrypt
    name VARCHAR
);


CREATE TABLE IF NOT EXISTS reservation (
    resNo INTEGER PRIMARY KEY,
    checkIn INTEGER, --epoch format
    checkOut INTEGER, --epoch format
    guests INTEGER, --number of guests
    cost REAL --cost of whole stay
    placeID INTEGER REFERENCES places,
    tourist VARCHAR REFERENCES tourist
);

CREATE TABLE IF NOT EXISTS place (
    ID INTEGER PRIMARY KEY,
    title VARCHAR,
    price REAL, --cost per night
    location VARCHAR, --Address formated as "Country,City,Street,HouseNº,PostalCode"
    description VARCHAR, 
    type VARCHAR, --House, apartment, etc
    photoURLlist VARCHAR, -- path to all images seperated by ','
    owner_username text,
    foreign key(owner_username) references user(username)
);
