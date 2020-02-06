CREATE DATABASE IF NOT EXISTS store_master;
USE store_master;

CREATE TABLE IF NOT EXISTS Users(
    id  INT(255) AUTO_INCREMENT NOT NULL,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50),
    image VARCHAR(255),

    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB;
INSERT INTO Users VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'password', 'Admin', NULL);

CREATE TABLE Categories(
    id  INT(255) AUTO_INCREMENT NOT NULL,
    name VARCHAR(100) NOT NULL,

    CONSTRAINT pk_categories PRIMARY KEY(id)
)ENGINE=InnoDB;
INSERT INTO Categories VALUES(NULL, 'Manga corta');
INSERT INTO Categories VALUES(NULL, 'Tirantes');
INSERT INTO Categories VALUES(NULL, 'Manga larga');

CREATE TABLE Products(
    id  INT(255) AUTO_INCREMENT NOT NULL,
    category_id INT(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price FLOAT(100, 2) NOT NULL,
    stock INT(255) NOT NULL,
    offer VARCHAR(255),
    date DATE,
    image VARCHAR(255),

    CONSTRAINT pk_products PRIMARY KEY(id),
    CONSTRAINT fk_products_categories FOREIGN KEY(category_id) REFERENCES Categories(id)
)ENGINE=InnoDB;

CREATE TABLE Orders(
    id  INT(255) AUTO_INCREMENT NOT NULL,
    user_id INT(255) NOT NULL,
    country VARCHAR(100) NOT NULL,
    region VARCHAR(100) NOT NULL,
    postalCode VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,    
    coste FLOAT(100, 2),
    state VARCHAR(20) NOT NULL,
    date DATETIME,

    CONSTRAINT pk_orders PRIMARY KEY(id),
    CONSTRAINT fk_orders_users FOREIGN KEY(user_id) REFERENCES Users(id)
)ENGINE=InnoDB;

CREATE TABLE Orders_products(
    id  INT(255) AUTO_INCREMENT NOT NULL,
    order_id INT(255) NOT NULL,
    product_id INT(255) NOT NULL,
    units INT(255),

    CONSTRAINT pk_ordersProducts PRIMARY KEY(id),
    CONSTRAINT fk_ordersProducts_orders FOREIGN KEY(order_id) REFERENCES Orders(id),
    CONSTRAINT fk_ordersProducts_products FOREIGN KEY(product_id) REFERENCES Products(id)
)ENGINE=InnoDB;