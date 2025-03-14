CREATE TABLE GuitarProducts (
    GuitarProductID        INT(11)        NOT NULL,
    GuitarProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
    GuitarProductName      VARCHAR(255)   NOT NULL,
    GuitarDescription      TEXT           NOT NULL,
    GuitarCategoryID       INT(11)        NOT NULL,
    GuitarWholesalePrice   DECIMAL(10,2)  NOT NULL,
    GuitarListPrice        DECIMAL(10,2)  NOT NULL,
    GuitarStockQuantity    INT(11)        NOT NULL, 
    DateCreated            DATETIME       NOT NULL,
    PRIMARY KEY (GuitarProductID)
);

INSERT INTO GuitarProducts
(GuitarProductID, GuitarProductCode, GuitarProductName, GuitarDescription, GuitarCategoryID, GuitarWholesalePrice, GuitarListPrice, GuitarStockQuantity, DateCreated)
VALUES
(1000, 'STRAT', 'Fender Stratocaster', 'The Fender Stratocaster, colloquially known as the Strat, is a model of electric guitar designed between 1952 and 1954.', 100, 699.00, 799.00, 25, NOW()),
(2000, 'HOFNER', 'Hofner Violin Bass', 'The Hofner 500/1 Violin Bass (sometimes nicknamed the Beatle Bass) is a model of electric bass manufactured by Höfner.', 200, 499.00, 599.00, 15, NOW());
