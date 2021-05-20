CREATE TABLE  cart  (
 id  int NOT NULL AUTO_INCREMENT,
 client_id  varchar(50) NOT NULL,
PRIMARY KEY(id)
);
CREATE TABLE  cart_item (
     id  int NOT NULL AUTO_INCREMENT,
     cart_id  int NOT NULL,
     product_id  int NOT NULL,
     quantity  int NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (CART_ID) REFERENCES cart(id),
    FOREIGN KEY (product_id)REFERENCES product(id)
);