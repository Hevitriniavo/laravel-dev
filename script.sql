CREATE TABLE hotel (
    id INT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    country VARCHAR(50) NOT NULL,
    postal_code VARCHAR(20) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    url VARCHAR(255)
);

CREATE TABLE room (
    id INT PRIMARY KEY,
    hotel_id INT,
    room_number INT,
    room_type VARCHAR(50),
    night_price DECIMAL(10, 2),
    available BOOLEAN,
    PRIMARY KEY (room_id),
    FOREIGN KEY (hotel_id) REFERENCES hotel(hotel_id)
);

CREATE TABLE reservation (
    id INT PRIMARY KEY,
    client_id INT,
    room_id INT,
    arrival_date DATE,
    departure_date DATE,
    total_amount DECIMAL(10, 2),
    PRIMARY KEY (reservation_id),
    FOREIGN KEY (client_id) REFERENCES client(client_id),
    FOREIGN KEY (room_id) REFERENCES room(room_id)
);

CREATE TABLE client (
    id INT PRIMARY KEY,
    last_name VARCHAR(100) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    email VARCHAR(255),
    phone_number VARCHAR(20),
    url VARCHAR(255),
    PRIMARY KEY (client_id)
);


composer require --dev --with-all-dependencies barryvdh/laravel-ide-helper:^2.13.0
php artisan ide-helper:generate
composer require barryvdh/laravel-debugbar --dev
php artisan ide-helper:models -M
php artisan ide-helper:meta
