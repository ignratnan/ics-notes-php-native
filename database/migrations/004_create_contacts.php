<?php

if (!tableExists($conn, 'contacts')) {

    $sql = "
        CREATE TABLE contacts (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            user_id BIGINT NOT NULL,
            company_id BIGINT NOT NULL,
            contact_gender VARCHAR(255) NOT NULL,
            first_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            title VARCHAR(255) NOT NULL,
            phone_number VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            edited_by VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ";

    $conn->query($sql);
}
