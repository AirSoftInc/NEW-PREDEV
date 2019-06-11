CREATE TABLE zone(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
);

INSERT INTO zone VALUES(DEFAULT, "HUASTECA ALTA");
INSERT INTO zone VALUES(DEFAULT, "HUASTECA BAJA");
INSERT INTO zone VALUES(DEFAULT, "TOTONACA");
INSERT INTO zone VALUES(DEFAULT, "NAUTLA");
INSERT INTO zone VALUES(DEFAULT, "CAPITAL");
INSERT INTO zone VALUES(DEFAULT, "LAS MONTANAS");
INSERT INTO zone VALUES(DEFAULT, "SOTAVENTO");
INSERT INTO zone VALUES(DEFAULT, "PAPALOAPAN");
INSERT INTO zone VALUES(DEFAULT, "LOS TUXTLA");
INSERT INTO zone VALUES(DEFAULT, "OLMECA");

CREATE TABLE case_data(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(300),
    link VARCHAR(300),
    date VARCHAR(100),
    isCase BOOLEAN,
    zone_id INT,
    status VARCHAR(50) DEFAULT "PENDING",
    CONSTRAINT user_user_id_fk
	FOREIGN KEY (zone_id) REFERENCES zone (id) ON DELETE CASCADE
);