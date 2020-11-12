<!--
    CREATE TABLE applicants
    (
        applicant_id INT(10) NOT NULL AUTO_INCREMENT,
        application_date DATETIME NOT NULL DEFAULT NOW(),
        homeless CHAR(1) NULL,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50) NULL,
        phone VARCHAR(10) NULL,
        address VARCHAR(100) NULL,
        zip_code INT(5) NULL,
        services_id INT(10) NOT NULL,
        PRIMARY KEY (applicant_id)
    );

    CREATE TABLE services_requested
    (
        services_id INT(10) NOT NULL AUTO_INCREMENT,
        applicant_id INT(10) NOT NULL,
        rent CHAR(1) NULL,
        utilities CHAR(1) NULL,
        gas_voucher CHAR(1) NULL,
        thrift_store_voucher CHAR(1) NULL,
        emergency_food_toiletries CHAR(1) NULL,
        drivers_license CHAR(1) NULL,
        id_card CHAR(1) NULL,
        other VARCHAR(300) NULL,
        PRIMARY KEY (services_id)
    );
-->