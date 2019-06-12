CREATE TABLE assigned_cases(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(300),
    link VARCHAR(300),
    date VARCHAR(100),
    status VARCHAR(50) DEFAULT "PENDIENTE",
    isDeleted BOOLEAN  DEFAULT false,
    case_id int,
    institution_id int,
    CONSTRAINT case_data_id_fk
	FOREIGN KEY (case_id) REFERENCES case_data (id) ON DELETE CASCADE,
    CONSTRAINT institution_id_fk
	FOREIGN KEY (institution_id) REFERENCES users (id) ON DELETE CASCADE
);