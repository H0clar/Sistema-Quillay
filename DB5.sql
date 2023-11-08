-- Crear tabla TipoUsuario
CREATE TABLE TipoUsuario (
    TipoUsuarioID INT AUTO_INCREMENT PRIMARY KEY,
    Tipo VARCHAR(50)
);

-- Insertar tipos de usuario
INSERT INTO TipoUsuario (Tipo) VALUES 
    ('Profesor'),
    ('Trabajador_UTP'),
    ('Administrador');

-- Crear tabla Nivel_Educativo
CREATE TABLE Nivel_Educativo (
    NivelEducativoID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255),
    Abreviatura VARCHAR(10)
);

-- Insertar niveles educativos
INSERT INTO Nivel_Educativo (Nombre, Abreviatura) VALUES
    ('Nivel 1 EDUCACION ESPECIAL TRASTORNOS ESPECIFICOS DEL LENGUAJE', 'N1'),
    ('Nivel 2 EDUCACION PARVULARIA', 'N2'),
    ('Nivel 3 ENSEÑANZA BÁSICA', 'N3');

-- Crear tabla Cursos
CREATE TABLE Cursos (
    CursoID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    NivelEducativoID INT,
    Abreviatura VARCHAR(10)
);

-- Insertar cursos
INSERT INTO Cursos (Nombre, NivelEducativoID, Abreviatura) VALUES
    ('Medio mayor', 1, 'MM'), 
    ('Primer nivel de transición (prekinder)', 1, 'NT1'), 
    ('Segundo nivel de transición', 1, 'NT2'),
    ('Primer nivel de transición (prekinder)', 2, 'PK1'), 
    ('Segundo nivel de Kinder', 2, 'K2'),
    ('Primero básico', 3, '1B'), 
    ('Segundo básico', 3, '2B'), 
    ('Tercero básico', 3, '3B'), 
    ('Cuarto básico', 3, '4B'), 
    ('Quinto básico', 3, '5B'), 
    ('Sexto básico', 3, '6B'), 
    ('Séptimo básico', 3, '7B'), 
    ('Octavo básico', 3, '8B');

-- Crear tabla Asignatura
CREATE TABLE Asignatura (
    AsignaturaID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    CursoID INT
);

-- Insertar asignaturas
INSERT INTO Asignatura (Nombre, CursoID) VALUES 
    ('Comunicación integral', 1),
    ('Formación Personal y social', 1),
    ('Integración y Comprensión con el Entorno', 1),
    ('Plan especifico', 1),
    ('Taller de Psicomotricidad', 1),
    ('Comunicación integral', 2),
    ('Formación Personal y social', 2),
    ('Integración y Comprensión con el Entorno', 2),
    ('Taller de Psicomotricidad', 2),
    ('Taller Inglés', 2),
    ('Comunicación integral', 3),
    ('Formación Personal y social', 3),
    ('Integración y Comprensión con el Entorno', 3),
    ('Plan Especifico', 3),
    ('Taller de Psicomotricidad', 3),
    ('Taller Inglés', 3),
    ('Comunicación integral', 4),
    ('Formación Personal y social', 4),
    ('Integración y Comprensión con el Entorno', 4),
    ('Taller de Psicomotricidad', 4),
    ('Taller Inglés', 4),
    ('Comunicación integral', 5),
    ('Formación Personal y social', 5),
    ('Integración y Comprensión con el Entorno', 5),
    ('Taller de Psicomotricidad', 5),
    ('Taller Inglés', 5),
    ('Artes Visuales', 6),
    ('Ciencias Naturales', 6),
    ('Educación Física y Salud', 6),
    ('Historia, Geografía y Ciencias Sociales', 6),
    ('Inglés', 6),
    ('Lenguaje y Comunicación', 6),
    ('Matemática', 6),
    ('Música', 6),
    ('Orientación', 6),
    ('Religión', 6),
    ('Tecnología', 6),
    ('Artes Visuales', 7),
    ('Ciencias Naturales', 7),
    ('Educación Física y Salud', 7),
    ('Historia, Geografía y Ciencias Sociales', 7),
    ('Inglés', 7),
    ('Lenguaje y Comunicación', 7),
    ('Matemática', 7),
    ('Música', 7),
    ('Orientación', 7),
    ('Religión', 7),
    ('Tecnología', 7),
    ('Artes Visuales', 8),
    ('Ciencias Naturales', 8),
    ('Educación Física y Salud', 8),
    ('Historia, Geografía y Ciencias Sociales', 8),
    ('Inglés', 8),
    ('Lenguaje y Comunicación', 8),
    ('Matemática', 8),
    ('Música', 8),
    ('Orientación', 8),
    ('Religión', 8),
    ('Taller', 8),
    ('Taller Lenguaje', 8),
    ('Taller Matemática', 8),
    ('Tecnología', 8),
    ('Artes Visuales', 9),
    ('Ciencias Naturales', 9),
    ('Educación Física y Salud', 9),
    ('Historia, Geografía y Ciencias Sociales', 9),
    ('Inglés', 9),
    ('Lenguaje y Comunicación', 9),
    ('Matemática', 9),
    ('Música', 9),
    ('Orientación', 9),
    ('Religión', 9),
    ('Taller Computacion', 9),
    ('Taller Lenguaje', 9),
    ('Taller Matematica', 9),
    ('Tecnología', 9),
    ('Artes Visuales', 10),
    ('Ciencias Naturales', 10),
    ('Educación Física y Salud', 10),
    ('Historia, Geografía y Ciencias Sociales', 10),
    ('Inglés', 10),
    ('Lenguaje y Comunicación', 10),
    ('Matemáticas', 10),
    ('Música', 10),
    ('Orientación', 10),
    ('Religión', 10),
    ('Taller Computacion', 10),
    ('Taller Lenguaje', 10),
    ('Taller Matematica', 10),
    ('Tecnología', 10),
    ('Artes Visuales', 11),
    ('Ciencias Naturales', 11),
    ('Educación Física y Salud', 11),
    ('Historia, Geografía y Ciencias Sociales', 11),
    ('Inglés', 11),
    ('Lenguaje y Comunicación', 11),
    ('Matemática', 11),
    ('Música', 11),
    ('Orientación', 11),
    ('Religión', 11),
    ('Taller Computacion', 11),
    ('Taller Lenguaje', 11),
    ('Taller Matematica', 11),
    ('Tecnología', 11),
    ('Artes Visuales', 12),
    ('Ciencias Naturales', 12),
    ('Educación Física y Salud', 12),
    ('Historia, Geografía y Ciencias Sociales', 12),
    ('Inglés', 12),
    ('Lengua y Literatura', 12),
    ('Matemáticas', 12),
    ('Música', 12),
    ('Orientación', 12),
    ('Religión', 12),
    ('Taller Computacion', 12),
    ('Taller Lenguaje', 12),
    ('Taller Matematica', 12),
    ('Tecnología', 12);


   
    

-- Crear tabla Tipo_Cambio
CREATE TABLE Tipo_Cambio (
    TipoCambioID INT AUTO_INCREMENT PRIMARY KEY,
    TipoCambio VARCHAR(50)
);

-- Insertar tipos de cambio posibles
INSERT INTO Tipo_Cambio (TipoCambio) VALUES 
    ('Inserción'),
    ('Actualización'),
    ('Eliminación');

-- Crear tabla Usuario con TipoUsuario y AsignaturaID (puede ser NULL)
CREATE TABLE Usuario (
    UsuarioID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    CorreoElectronico VARCHAR(100),
    TipoUsuarioID INT,
    AsignaturaID INT NULL,
    FOREIGN KEY (TipoUsuarioID) REFERENCES TipoUsuario(TipoUsuarioID),
    FOREIGN KEY (AsignaturaID) REFERENCES Asignatura(AsignaturaID)
);

-- Insertar usuarios
INSERT INTO Usuario (Nombre, Apellido, CorreoElectronico, TipoUsuarioID, AsignaturaID) VALUES
    ('admin1', 'admin1', 'admin1@example.com', 1, 1),
    ('profe1', 'profe1', 'profe1@example.com', 1, 2),
    ('utp1', 'utp1', 'utp1@example.com', 2, 3);

-- Crear tabla TipoArchivo
CREATE TABLE TipoArchivo (
    TipoArchivoID INT AUTO_INCREMENT PRIMARY KEY,
    Tipo VARCHAR(50)
);

-- Insertar tipos de archivo
INSERT INTO TipoArchivo (Tipo) VALUES 
    ('Guías'),
    ('Informes'),
    ('Pruebas');

-- Crear tabla Material_Educativo
CREATE TABLE Material_Educativo (
    MaterialID INT AUTO_INCREMENT PRIMARY KEY,
    TipoArchivoID INT,
    NombreArchivo VARCHAR(255),
    UsuarioID INT,
    AsignaturaID INT,
    CursoID INT,
    NivelEducativoID INT,
    Estado BOOLEAN,
    RutaGoogleDrive VARCHAR(255),
    FechaSubida DATE,
    FOREIGN KEY (TipoArchivoID) REFERENCES TipoArchivo(TipoArchivoID),
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID),
    FOREIGN KEY (AsignaturaID) REFERENCES Asignatura(AsignaturaID),
    FOREIGN KEY (CursoID) REFERENCES Cursos(CursoID),
    FOREIGN KEY (NivelEducativoID) REFERENCES Nivel_Educativo(NivelEducativoID) ON DELETE CASCADE
);

-- Insertar datos de prueba en la tabla Material_Educativo
INSERT INTO Material_Educativo (TipoArchivoID, NombreArchivo, UsuarioID, AsignaturaID, CursoID, NivelEducativoID, Estado, RutaGoogleDrive, FechaSubida) VALUES 
    (1, 'N1_MM_Comunicación integral_pdf_1.pdf', 1, 1, 1, 1, TRUE, 'ASDAS', '2023-10-06'),
    (2, 'N1_MM_Comunicación integral_pdf_2.pdf', 2, 1, 1, 1, TRUE, 'ASDAS', '2023-10-07'),
    (3, 'N1_MM_Comunicación integral_pdf_3.pdf', 3, 1, 1, 1, TRUE, 'ASDAS', '2023-10-08');

-- Crear tabla Log para registro de cambios
CREATE TABLE Log (
    LogID INT AUTO_INCREMENT PRIMARY KEY,
    UsuarioID INT,
    MaterialID INT,
    TipoCambioID INT,
    FechaCambio DATE,
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID),
    FOREIGN KEY (MaterialID) REFERENCES Material_Educativo(MaterialID),
    FOREIGN KEY (TipoCambioID) REFERENCES Tipo_Cambio(TipoCambioID)
);

-- Crear tabla Comentario
CREATE TABLE Comentario (
    ComentarioID INT AUTO_INCREMENT PRIMARY KEY,
    MaterialID INT,
    UsuarioID INT,
    Comentario VARCHAR(255),
    FechaComentario DATE,
    FOREIGN KEY (MaterialID) REFERENCES Material_Educativo(MaterialID) ON DELETE CASCADE,
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID)
);

-- Insertar datos de prueba en la tabla Comentario
INSERT INTO Comentario (MaterialID, UsuarioID, Comentario, FechaComentario)
VALUES
    (1, 1, 'Comentario 1', '2023-10-06'),
    (2, 2, 'Comentario 2', '2023-10-07'),
    (3, 3, 'Comentario 3', '2023-10-08');

-- Crear tabla Respuesta
CREATE TABLE Respuesta (
    RespuestaID INT AUTO_INCREMENT PRIMARY KEY,
    ComentarioID INT,
    UsuarioID INT,
    Respuesta VARCHAR(255),
    FechaRespuesta DATE,
    FOREIGN KEY (ComentarioID) REFERENCES Comentario(ComentarioID) ON DELETE CASCADE,
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID)
);

-- Insertar datos de prueba en la tabla Respuesta
INSERT INTO Respuesta (ComentarioID, UsuarioID, Respuesta, FechaRespuesta)
VALUES
    (1, 1, 'Respuesta 1', '2023-10-06'),
    (2, 2, 'Respuesta 2', '2023-10-07'),
    (3, 3, 'Respuesta 3', '2023-10-08');




















DELIMITER //

CREATE TRIGGER Material_Educativo_BI BEFORE INSERT ON Material_Educativo FOR EACH ROW
BEGIN
    DECLARE NivelAbreviatura VARCHAR(10);
    DECLARE CursoAbreviatura VARCHAR(10);
    DECLARE AsignaturaNombre VARCHAR(255);
    DECLARE FechaArchivo DATE;
    DECLARE TipoArchivo VARCHAR(50);
    DECLARE CantidadArchivosMismoDia INT;

    -- Obtener las abreviaturas del Curso y Nivel Educativo si están definidas, de lo contrario, establecerlas en blanco
    SELECT COALESCE(SUBSTRING(N.Abreviatura, 1, 3), '') INTO NivelAbreviatura
    FROM Nivel_Educativo AS N
    WHERE N.NivelEducativoID = NEW.NivelEducativoID;

    SELECT COALESCE(SUBSTRING(C.Abreviatura, 1, 3), '') INTO CursoAbreviatura
    FROM Cursos AS C
    WHERE C.CursoID = NEW.CursoID;

    -- Obtener el nombre de la asignatura
    SELECT COALESCE(A.Nombre, '') INTO AsignaturaNombre
    FROM Asignatura AS A
    WHERE A.AsignaturaID = NEW.AsignaturaID;

    -- Obtener la fecha del archivo
    SET FechaArchivo = NEW.FechaSubida;

    -- Obtener el tipo de archivo
    SELECT COALESCE(T.Tipo, '') INTO TipoArchivo
    FROM TipoArchivo AS T
    WHERE T.TipoArchivoID = NEW.TipoArchivoID;

    -- Contar la cantidad de archivos con el mismo nombre y fecha
    SELECT COUNT(*) INTO CantidadArchivosMismoDia
    FROM Material_Educativo
    WHERE FechaSubida = FechaArchivo
    AND TipoArchivoID = NEW.TipoArchivoID
    AND UsuarioID = NEW.UsuarioID;

    -- Establecer el nombre del archivo
    SET NEW.NombreArchivo = CONCAT(NivelAbreviatura, '_', CursoAbreviatura, '_', AsignaturaNombre, '_', TipoArchivo, '_', CantidadArchivosMismoDia + 1, '.pdf');
END;
//

DELIMITER ;















DELIMITER //
CREATE TRIGGER Material_Educativo_AI 
AFTER INSERT ON Material_Educativo 
FOR EACH ROW
BEGIN
    -- Registro de inserción en la tabla Log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.MaterialID, 1, CURDATE());
END;
//
CREATE TRIGGER Material_Educativo_AU 
AFTER UPDATE ON Material_Educativo 
FOR EACH ROW
BEGIN
    -- Registro de actualización en la tabla Log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.MaterialID, 2, CURDATE());
END;
//
CREATE TRIGGER Material_Educativo_AD 
AFTER DELETE ON Material_Educativo 
FOR EACH ROW
BEGIN
    -- Registro de eliminación en la tabla Log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (OLD.UsuarioID, OLD.MaterialID, 3, CURDATE());
END;
//
DELIMITER ;
