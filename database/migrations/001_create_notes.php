<?php

if (!tableExists($conn, 'notes')) {

    $sql = "
        CREATE TABLE notes (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            user_id BIGINT NOT NULL,
            contact_id BIGINT NOT NULL,
            event_id BIGINT NOT NULL,
            company_id BIGINT NOT NULL,
            title VARCHAR(255) NOT NULL,
            body TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ";

    $conn->query($sql);
}
