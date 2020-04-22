CREATE TABLE pabrik (
  id_pabrik int IDENTITY(1,1) NOT NULL,
  nama_pabrik varchar(100) NOT NULL,
  kode_pabrik varchar(5) NOT NULL,
  harga_pasir decimal(13,2) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

ALTER TABLE pabrik
  ADD PRIMARY KEY (id_pabrik);




CREATE TABLE pemilik_truk (
  id_pemilik int IDENTITY(1,1) NOT NULL,
  nama_pemilik varchar(100) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

ALTER TABLE pemilik_truk
  ADD PRIMARY KEY (id_pemilik);

CREATE TABLE supir_truk (
  id_supir int IDENTITY(1,1) NOT NULL PRIMARY KEY,
  id_pemilik int NOT NULL FOREIGN KEY REFERENCES pemilik_truk(id_pemilik),
  nama_supir varchar(100) NOT NULL,
  nopol varchar(10) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)

  CREATE TABLE users (
  id_user int IDENTITY(1,1) NOT NULL,
  username varchar(100) NOT NULL,
  pwd  varchar(100) NOT NULL,
  updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
)