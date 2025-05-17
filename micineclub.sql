CREATE DATABASE IF NOT EXISTS micineclub;
USE micineclub;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  usuario VARCHAR(50) UNIQUE,
  clave VARCHAR(255),
  nivel VARCHAR(50)
);
