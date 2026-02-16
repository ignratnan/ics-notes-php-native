<?php

if (!tableExists($conn, 'events')) {

    $sql = "
        CREATE TABLE events (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            user_id BIGINT NOT NULL,
            event_name VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ";

    $conn->query($sql);
}
