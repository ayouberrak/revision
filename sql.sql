CREATE TABLE Produits(
    id INT primary KEY AUTO_INCREMENT ,
    nom varchar(45) not null ,
    prix INT not null ,
    stok INT not null,
);

INSERT INTO Produits(nom , prix , stok)
VAlUES('banana',21,10) , ('pomme',10 , 22) , ('monge',2,0);

UPDATE Produits SET prix = prix + prix *10 /100 WHERE id = 1;

delete Produits WHERE stok = 0