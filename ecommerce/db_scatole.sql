DROP DATABASE if exists ecommerce;

CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE scatole (
    idScatola               varchar(10) not null,
    nome                    varchar(10),
    spessore                int,
    lunghezza               int,
    larghezza               int,
    altezza                 int,
    ConfezioneDa            numeric,
    minore100               decimal(10,2),  /* se la quantità è minore di 100*/
    uguale100epiu           decimal(10,2),  /* se la quantità è maggiore o uguale a 100*/
    uguale200epiu           decimal(10,2),  /* se la quantità è maggiore o uguale a 200*/
    uguale400epiu           decimal(10,2),  /* se la quantità è maggiore o uguale a 400*/
    uguale800epiu           decimal(10,2),  /* se la quantità è maggiore o uguale a 800*/

    PRIMARY KEY (idScatola)
);

INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl001', 'MS- 1', 3, 200, 200, 200, 10, 0.15, 0.14, 0.13, 0.12, 0.11);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl002', 'MS- 2', 3, 200, 200, 250, 10, 0.19, 0.17, 0.16, 0.15, 0.13);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl003', 'MS- 3', 3, 200, 200, 300, 10, 0.20, 0.18, 0.17, 0.16, 0.14);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl005', 'MS- 5', 3, 250, 250, 150, 10, 0.20, 0.18, 0.17, 0.16, 0.14);
/* scatole con doppio prezzo */
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl007', 'MS- 7', 3, 250, 250, 200, 10, 0.27, 0.25, 0.24, 0.22, 0.20);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl070', 'MS- 70', 3, 250, 250, 250, 10, 0.27, 0.25, 0.24, 0.22, 0.20);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl009', 'MS- 9', 3, 250, 250, 300, 10, 0.43, 0.39, 0.37, 0.34, 0.31);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl090', 'MS- 90', 3, 250, 250, 350, 10, 0.43, 0.39, 0.37, 0.34, 0.31);
/**/
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl010', 'MS- 10', 3, 250, 250, 450, 10, 0.56, 0.51, 0.48, 0.45, 0.40);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl011', 'MS- 11', 4, 300, 300, 200, 10, 0.43, 0.39, 0.37, 0.34, 0.31);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl012', 'MS- 12', 4, 300, 300, 250, 10, 0.51, 0.46, 0.43, 0.40, 0.36);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl013', 'MS- 13', 4, 300, 300, 300, 10, 0.56, 0.51, 0.48, 0.45, 0.40);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl014', 'MS- 14', 4, 300, 300, 350, 10, 0.65, 0.59, 0.55, 0.52, 0.46);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl015', 'MS- 15', 4, 350, 350, 200, 10, 0.62, 0.56, 0.53, 0.49, 0.44);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl016', 'MS- 16', 4, 350, 350, 250, 10, 0.71, 0.65, 0.61, 0.57, 0.51);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl017', 'MS- 17', 4, 350, 350, 300, 10, 0.81, 0.74, 0.69, 0.65, 0.58);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl018', 'MS- 18', 4, 350, 350, 350, 10, 0.91, 0.83, 0.78, 0.73, 0.65);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl019', 'MS- 19', 4, 400, 400, 200, 10, 0.88, 0.80, 0.75, 0.70, 0.63);
/* scatole con doppio prezzo */
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl020', 'MS- 20', 4, 400, 400, 250, 10, 1.10, 1.00, 0.94, 0.88, 0.78);
INSERT INTO scatole(idScatola, nome, spessore, lunghezza, larghezza, altezza, confezioneDa, minore100, uguale100epiu, uguale200epiu, uguale400epiu, uguale800epiu)
VALUES ('sctl200', 'MS- 200', 4, 400, 400, 300, 10, 1.10, 1.00, 0.94, 0.88, 0.78);
/**/