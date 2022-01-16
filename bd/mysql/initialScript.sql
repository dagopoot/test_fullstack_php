CREATE DATABASE IF NOT EXISTS Testing_fullstack CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;

CREATE USER 'propiedades_user'@'%' IDENTIFIED BY 'r210U8Zv';

GRANT ALL PRIVILEGES ON Testing_fullstack.* TO 'propiedades_user'@'%';
