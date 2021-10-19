CREATE TABLE addresses
(
    id INTEGER NOT NULL auto_increment,
    name VARCHAR(32) NOT NULL,
    address VARCHAR(50) NOT NULL,
    phone VARCHAR(32) NOT NULL,
    email VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO addresses(name,address,phone,email)
VALUES('工科太郎','八王子','012-345-6789','tarou@exmple.com'),
('蒲田花子','蒲田','987-654-3210','hanako@example.com');

SELECT * FROM 'addresses';

SELECT * FROM 'addresses' WHERE address='八王子';