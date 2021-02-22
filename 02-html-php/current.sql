
USE p04_db ;

DROP TABLE if EXISTS koordinator;

CREATE TABLE koordinator (
			id_koordinator			VARCHAR(50)		NOT NULL,
			nama_koordinator		VARCHAR(50)		NOT NULL,
			email_koordinator		VARCHAR(50)		NOT NULL,
			pass_koordinator		VARCHAR(10)		NOT NULL,
			PRIMARY KEY (id_koordinator)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS pembimbing;

CREATE TABLE pembimbing (
			id_pembimbing			VARCHAR(50)		NOT NULL,
			nama_pembimbing		VARCHAR(50)		NOT NULL,
			email_pembimbing		VARCHAR(50) 	NOT NULL,
			pass_pembimbing		VARCHAR(10)		NOT NULL,
			PRIMARY KEY (id_pembimbing)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS penguji;
			
CREATE TABLE penguji (
			id_penguji				VARCHAR(50)		NOT NULL,
			nama_penguji			VARCHAR(50)		NOT NULL,
			email_pembimbing		VARCHAR(50)		NOT NULL,
			pass_penguji			VARCHAR(10)		NOT NULL,
			PRIMARY KEY (id_penguji)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS sesi;
			
CREATE TABLE sesi (
			nama_sesi	VARCHAR(50) NOT NULL,
			PRIMARY KEY (nama_sesi)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS prodi;
			
CREATE TABLE prodi (
			nama_prodi				VARCHAR(50)		NOT NULL,
			koordinator				VARCHAR(50)		NOT NULL,
			PRIMARY KEY(nama_prodi),
			KEY koordinator (koordinator),
			CONSTRAINT prod_fk1 FOREIGN KEY (koordinator) REFERENCES koordinator (id_koordinator)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS kelompok;

CREATE TABLE kelompok(
			id_kelompok				VARCHAR(50)					NOT NULL,
			no_kelompok				INTEGER(2)	UNSIGNED 	NOT NULL,
			jad_prasem				DATE							NOT NULL,
			jad_sem					DATE							NOT NULL,
			jad_prasid				DATE							NOT NULL,
			jad_sid					DATE							NOT NULL,
			prodi						VARCHAR(50)					NOT NULL,
			pembimbing				VARCHAR(50)					NOT NULL,
			penguji					VARCHAR(50)					NOT NULL,
			PRIMARY KEY (id_kelompok),
			KEY prodi (prodi),
			KEY pembimbing (pembimbing),
			KEY penguji (penguji),
			CONSTRAINT kel_fk1 FOREIGN KEY (prodi) REFERENCES prodi (nama_prodi),
			CONSTRAINT kel_fk2 FOREIGN KEY (pembimbing) REFERENCES pembimbing (id_pembimbing),
			CONSTRAINT kel_fk3 FOREIGN KEY (penguji) REFERENCES penguji (id_penguji)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS topik_ta;			
			
CREATE TABLE topik_ta (
			id_topik					VARCHAR(50)		NOT NULL,
			judul_topik				VARCHAR(50)		NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			PRIMARY KEY (id_topik),
			KEY kelompok (kelompok),
			CONSTRAINT topik_fk1 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS mahasiswa;			
			
CREATE TABLE mahasiswa (
			id_mahasiswa			VARCHAR(50)		NOT NULL,
			nim_mahasiswa			VARCHAR(10)		NOT NULL,
			nama_mahasiswa			VARCHAR(50)		NOT NULL,
			email_mahasiswa		VARCHAR(50)		NOT NULL,
			pass_mahasiswa			VARCHAR(10)		NOT NULL,
			prodi						VARCHAR(50)		NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			PRIMARY KEY (id_mahasiswa),
			KEY (prodi),
			KEY (kelompok),
			CONSTRAINT mahasiswa_fk1 FOREIGN KEY (prodi) REFERENCES prodi (nama_prodi),
			CONSTRAINT mahasiswa_fk2 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS laporan;			
			
CREATE TABLE laporan (
			id_laporan				VARCHAR(50)		NOT NULL,
			judul_laporan			VARCHAR(50)		NOT NULL,
			tanggal					DATE				NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			sesi						VARCHAR(50)		NOT NULL,
			PRIMARY KEY (id_laporan),
			KEY (kelompok),
			KEY (sesi),
			CONSTRAINT laporan_fk1 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok),
			CONSTRAINT laporan_fk2 FOREIGN KEY (sesi) REFERENCES sesi (nama_sesi)
			) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS artefak;			
			
CREATE TABLE artefak (
			id_artefak				VARCHAR(50)		NOT NULL,
			judul_artefak			VARCHAR(50)		NOT NULL,
			tanggal					DATE				NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			sesi						VARCHAR(50)		NOT NULL,
			PRIMARY KEY (id_artefak),
			KEY (kelompok),
			KEY (sesi),
			CONSTRAINT artefak_fk1 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok),
			CONSTRAINT artefak_fk2 FOREIGN KEY (sesi) REFERENCES sesi (nama_sesi)
			)	ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS absen;			
			
CREATE TABLE absen (
			tanggal					DATE				NOT NULL,
			pembimbing				VARCHAR(50)		NOT NULL,
			prodi						VARCHAR(50)		NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			topik						VARCHAR(100)	NOT NULL,
			KEY (pembimbing),
			KEY (prodi),
			KEY (kelompok),
			CONSTRAINT absen_fk1 FOREIGN KEY (pembimbing) REFERENCES pembimbing (id_pembimbing),
			CONSTRAINT absen_fk2 FOREIGN KEY (prodi) REFERENCES prodi (nama_prodi),
			CONSTRAINT absen_fk3 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok)
			) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			
DROP TABLE if EXISTS nilai;			
			
CREATE TABLE nilai (
			komp_1					FLOAT(2,2)		NOT NULL,
			komp_2					FLOAT(2,2)		NOT NULL,
			komp_3					FLOAT(2,2)		NOT NULL,
			prodi						VARCHAR(50)		NOT NULL,
			kelompok					VARCHAR(50)		NOT NULL,
			sesi						VARCHAR(50)		NOT NULL,
			KEY (prodi),
			KEY (kelompok),
			KEY (sesi),
			CONSTRAINT nilai_fk1 FOREIGN KEY (prodi) REFERENCES prodi (nama_prodi),
			CONSTRAINT nilai_fk2 FOREIGN KEY (kelompok) REFERENCES kelompok (id_kelompok),
			CONSTRAINT nilai_fk3 FOREIGN KEY (sesi) REFERENCES sesi (nama_sesi)
			) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
			

DROP TABLE if EXISTS user;		
CREATE TABLE user ( id 				INT(2) 			NOT NULL AUTO_INCREMENT ,
					username 		VARCHAR(8) 		NOT NULL ,
					password		VARCHAR(20) NOT NULL , 
					PRIMARY KEY (id)
					) ENGINE = DEFAULT CHARSET=LATIN1;			
			
					
			

			


	
