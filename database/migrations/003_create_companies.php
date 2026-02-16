<?php

if (!tableExists($conn, 'companies')) {

    $sql = "
        CREATE TABLE companies (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            user_id BIGINT NOT NULL,
            company_name VARCHAR(255) NOT NULL,
            agent_type VARCHAR(255) NOT NULL,
            business_source VARCHAR(255) NOT NULL,
            company_country VARCHAR(255) NOT NULL,
            company_notes TEXT NOT NULL,
            edited_by VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;
    ";

    $conn->query($sql);
}
