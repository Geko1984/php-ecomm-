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
CREATE TABLE  user_type (
     id  INT NOT NULL AUTO_INCREMENT,
     name  varchar(50) NOT NULL,
     PRIMARY KEY (id),
    
);

INSERT INTO user_type(
id,name

)
VALUES (
    1,'Administrator'
),
 (
    2,'Regular'
);


CREATE TABLE  user  (
 id  int NOT NULL AUTO_INCREMENT,
 email  varchar(255) NOT NULL,
 password varchar(255) NOT NULL,
 user_type_id  varchar(50) NOT NULL,
 
PRIMARY KEY(id),
FOREIGN KEY (user_type_id) REFERENCES user_type(id)
 
);
INSERT INTO user_type(
email,password,user_type_id

)
VALUES (
    'admin@email.com',
    MDS('password'),
    1
),
 (
    'regular@email.com',
    MDS('password'),
    2

);