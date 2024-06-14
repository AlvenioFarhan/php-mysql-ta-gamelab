create database db_shoesmarket_gamelab;

use db_shoesmarket_gamelab;

CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    email varchar(255) not null,
    password varchar(255) NOT NULL,
    PRIMARY KEY (id)
)engine InnoDB;

-- Membuat tabel categories
CREATE TABLE categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT
);

-- Membuat tabel products
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    category_id INT,
    image VARCHAR(255),
    CONSTRAINT fk_category FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

-- Membuat tabel cart
CREATE TABLE cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_product FOREIGN KEY (product_id) REFERENCES products(product_id)
);


SELECT * FROM cart;
SELECT * FROM products;
SELECT * FROM users;
SELECT * FROM cart WHERE user_id = 'test';

INSERT INTO cart (user_id, product_id, quantity) VALUES ('test', 1, 2);


-- Menambahkan data contoh ke tabel categories
INSERT INTO categories (name, description)
VALUES
    ('Nike', 'Lorem ipsum dolor sit amet.'),
    ('Adidas', 'Lorem ipsum dolor sit amet.'),
    ('Converse', 'Lorem ipsum dolor sit amet.'),
    ('Vans', 'Lorem ipsum dolor sit amet.');

-- Menambahkan data contoh ke tabel products
INSERT INTO products (name, description, price, stock_quantity, category_id, image)
VALUES
    ('Nike1', 'Lorem ipsum dolor sit amet.', 1500.00, 10, 1, 'http://example.com/nike.jpg'),
    ('Adidas1', 'Lorem ipsum dolor sit amet.', 25.99, 15, 2, 'http://example.com/adidas.jpg'),
    ('Converse1', 'Lorem ipsum dolor sit amet.', 70.00, 10, 3, 'http://example.com/converse.jpg'),
   ('Vans1', 'Lorem ipsum dolor sit amet.', 120.00, 5, 4, 'http://example.com/vans.jpg');

-- Memeriksa data dalam tabel products dengan kategori
SELECT p.product_id, p.name, p.description, p.price, p.stock_quantity, p.image, c.name AS category_name
FROM products p
LEFT JOIN categories c ON p.category_id = c.category_id;