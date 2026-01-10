INSERT INTO `shop_user` (`name`,`emaLl`,`password`) VALUES
('Иван', 'ivan@mail.ru','1234'),
('Петер', 'peter@mail.ru','1234'),
('Cтепан', 'stapa@mail.ru','1234');

SELECT * FROM `shop_user`;

CREATE TABLE category (
category_id INT(11) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(64)    
);


INSERT INTO category (name) VALUES
('Бытовая техника'),
('Компьютеры'),
('Смартфоны');

CREATE TABLE product (
product_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
    price FLOAT NOT NULL,
    category_id INT(11) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES category(category_id)
);


INSERT INTO product (name, price, category_id) VALUES
('Телевизор',25000,1),
('ПК',120000,2),
('Ноутбук',90000,2),
('телефон Xiaomi',40000,3),
('Телефон POCO',200000,3);

SELECT
     p.name,
     p.price,
     c.name
     FROM product AS p
     LEFT JOIN category AS c ON p.category_id=c.category_id;

//etriz.ru