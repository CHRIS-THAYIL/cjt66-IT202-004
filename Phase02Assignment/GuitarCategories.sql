CREATE TABLE GuitarCategories (
    GuitarCategoryID       INT(11)        NOT NULL,
    GuitarCategoryCode     VARCHAR(10)    NOT NULL   UNIQUE,
    GuitarCategoryName     VARCHAR(255)   NOT NULL,
    GuitarAisleNumber      VARCHAR(20)    NOT NULL, 
    DateCreated            DATETIME       NOT NULL,
    PRIMARY KEY (GuitarCategoryID)
);

INSERT INTO GuitarCategories
(GuitarCategoryID, GuitarCategoryCode, GuitarCategoryName, GuitarAisleNumber, DateCreated)
VALUES
(100, 'GTR', 'Guitars', 'A1', NOW()),
(200, 'BAS', 'Basses', 'A2', NOW()),
(300, 'AMP', 'Amps', 'B1', NOW()),
(400, 'DRM', 'Drums', 'B2', NOW()),
(500, 'ACC', 'Accessories', 'C1', NOW());

