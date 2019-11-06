CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password VARCHAR, --PHP5.5 bcrypt
    name VARCHAR,
    photoURL VARCHAR --not sure about this
);

CREATE TABLE tourist (
    username VARCHAR REFERENCES user
);

CREATE TABLE owner (
    username VARCHAR REFERENCES user
);

CREATE TABLE reservation (
    resNo INTEGER PRIMARY KEY,
    checkIn INTEGER, --epoch format
    checkOut INTEGER, --epoch format
    guests INTEGER, --number of guests
    cost REAL --cost of whole stay
    placeID INTEGER REFERENCES places,
    tourist VARCHAR REFERENCES tourist
);

CREATE TABLE place (
    ID INTEGER PRIMARY KEY,
    title VARCHAR,
    price REAL, --cost per night
    location VARCHAR, --Address formated as "Country,City,Street,HouseNº,PostalCode"
    description VARCHAR, 
    type VARCHAR, --House, apartment, etc
    photoURLlist VARCHAR, -- path to all images seperated by ','
    owner VARCHAR REFERENCES owner
);
