-- crear tabla TipoUsuario
CREATE TABLE TipoUsuario (
    TipoUsuarioID INT PRIMARY KEY,
    Tipo VARCHAR(50)
);

-- insertar tipos de usuario
INSERT INTO TipoUsuario (TipoUsuarioID, Tipo) VALUES 
    (1, 'Profesor'),
    (2, 'Trabajador_UTP'),
    (3, 'Administrador');

-- crear tabla Nivel_Educativo
CREATE TABLE Nivel_Educativo (
    NivelEducativoID INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Abreviatura VARCHAR(10)
);

-- insertar niveles educativos
INSERT INTO Nivel_Educativo (NivelEducativoID, Nombre, Abreviatura) VALUES
    (1, 'Nivel 1 EDUCACION ESPECIAL TRASTORNOS ESPECIFICOS DEL LENGUAJE', 'N1'),
    (2, 'Nivel 2 EDUCACION PARVULARIA', 'N2'),
    (3, 'Nivel 3 ENSEÑANZA BÁSICA', 'N3');

-- crear tabla Cursos
CREATE TABLE Cursos (
    CursoID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    NivelEducativoID INT,
    Abreviatura VARCHAR(10),
    FOREIGN KEY (NivelEducativoID) REFERENCES Nivel_Educativo(NivelEducativoID)
);

-- insertar cursos
INSERT INTO Cursos (CursoID, Nombre, NivelEducativoID, Abreviatura) VALUES
    (1, 'Medio mayor', 1, 'MM'), 
    (2, 'Primer nivel de transición (prekinder)', 1, 'NT1'), 
    (3, 'Segundo nivel de transición', 1, 'NT2'),
    (4, 'Primer nivel de transición (prekinder)', 2, 'PK1'), 
    (5, 'Segundo nivel de Kinder', 2, 'K2'),
    (6, 'Primero básico', 3, '1B'), 
    (7, 'Segundo básico', 3, '2B'), 
    (8, 'Tercero básico', 3, '3B'), 
    (9, 'Cuarto básico', 3, '4B'), 
    (10, 'Quinto básico', 3, '5B'), 
    (11, 'Sexto básico', 3, '6B'), 
    (12, 'Séptimo básico', 3, '7B'), 
    (13, 'Octavo básico', 3, '8B');

-- crear tabla Asignatura
CREATE TABLE Asignatura (
    AsignaturaID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    CursoID INT,
    FOREIGN KEY (CursoID) REFERENCES Cursos(CursoID)
);

-- insertar asignaturas
INSERT INTO Asignatura (AsignaturaID, Nombre, CursoID) VALUES
    (1, 'Comunicación integral', 1),
    (2, 'Formación Personal y social', 1),
    (3, 'Integración y Comprensión con el Entorno', 1),
    (4, 'Plan especifico', 1),
    (5, 'Taller de Psicomotricidad', 1),
    (6, 'Comunicación integral', 2),
    (7, 'Formación Personal y social', 2),
    (8, 'Integración y Comprensión con el Entorno', 2),
    (9, 'Taller de Psicomotricidad', 2),
    (10, 'Taller inglés', 2),
    (11, 'Comunicación integral', 3),
    (12, 'Formación Personal y social', 3),
    (13, 'Integración y Comprensión con el Entorno', 3),
    (14, 'Plan especifico', 3),
    (15, 'Taller de Psicomotricidad', 3),
    (16, 'Taller inglés', 3),
    (17, 'Comunicación integral', 4),
    (18, 'Formación Personal y social', 4),
    (19, 'Integración y Comprensión con el Entorno', 4),
    (20, 'Taller de Psicomotricidad', 4),
    (21, 'Taller inglés', 4),
    (22, 'Comunicación integral', 5),
    (23, 'Formación Personal y social', 5),
    (24, 'Integración y Comprensión con el Entorno', 5),
    (25, 'Taller de Psicomotricidad', 5),
    (26, 'Taller inglés', 5),
    (27, 'Artes Visuales', 6),
    (28, 'Ciencias Naturales', 6),
    (29, 'Educación Física y salud', 6),
    (30, 'Historia, Geografía y Ciencias Sociales', 6),
    (31, 'Idioma Extranjero, Inglés', 6),
    (32, 'Lenguaje y Comunicación', 6),
    (33, 'Matemáticas', 6),
    (34, 'Música', 6),
    (35, 'Orientación', 6),
    (36, 'Religión', 6),
    (37, 'Tecnología', 6),
    (38, 'Artes Visuales', 7),
    (39, 'Ciencias Naturales', 7),
    (40, 'Educación Física y salud', 7),
    (41, 'Historia, Geografía y Ciencias Sociales', 7),
    (42, 'Idioma Extranjero, Inglés', 7),
    (43, 'Lenguaje y Comunicación', 7),
    (44, 'Matemáticas', 7),
    (45, 'Música', 7),
    (46, 'Orientación', 7),
    (47, 'Religión', 7),
    (48, 'Tecnología', 7),
    (49, 'Artes Visuales', 8),
    (50, 'Ciencias Naturales', 8),
    (51, 'Educación Física y salud', 8),
    (52, 'Historia, Geografía y Ciencias Sociales', 8),
    (53, 'Idioma Extranjero, Inglés', 8),
    (54, 'Lenguaje y Comunicación', 8),
    (55, 'Matemáticas', 8),
    (56, 'Música', 8),
    (57, 'Orientación', 8),
    (58, 'Religión', 8),
    (59, 'Taller', 8),
    (60, 'Taller Lenguaje', 8),
    (61, 'Taller Matemáticas', 8),
    (62, 'Tecnología', 8);

-- crear tabla Tipo_Cambio
CREATE TABLE Tipo_Cambio (
    TipoCambioID INT PRIMARY KEY,
    TipoCambio VARCHAR(50)
);

-- insertar tipos de cambio posibles
INSERT INTO Tipo_Cambio (TipoCambioID, TipoCambio) VALUES 
    (1, 'Inserción'),
    (2, 'Actualización'),
    (3, 'Eliminación');

-- crear tabla Usuario con TipoUsuario y AsignaturaID (puede ser NULL)
CREATE TABLE Usuario (
    UsuarioID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    CorreoElectronico VARCHAR(100),
    TipoUsuarioID INT,
    AsignaturaID INT NULL,
    FOREIGN KEY (TipoUsuarioID) REFERENCES TipoUsuario(TipoUsuarioID),
    FOREIGN KEY (AsignaturaID) REFERENCES Asignatura(AsignaturaID)
);

-- insertar usuarios
INSERT INTO Usuario (UsuarioID, Nombre, Apellido, CorreoElectronico, TipoUsuarioID, AsignaturaID) VALUES
    (1, 'admin1', 'admin1', 'admin1@example.com', 1, 1),
    (2, 'admin2', 'admin2', 'admin2@example.com', 1, 2),
    (3, 'admin3', 'admin3', 'admin3@example.com', 2, 3);

-- crear tabla Material_Educativo
CREATE TABLE Material_Educativo (
    MaterialID INT PRIMARY KEY,
    TipoArchivo VARCHAR(50),
    NombreArchivo VARCHAR(255),
    ProfesorID INT,
    AsignaturaID INT,
    CursoID INT,
    NivelEducativoID INT,
    Estado BOOLEAN,
    Visible BOOLEAN,
    RutaGoogleDrive VARCHAR(255),
    FechaSubida DATE,
    FOREIGN KEY (ProfesorID) REFERENCES Usuario(UsuarioID),
    FOREIGN KEY (AsignaturaID) REFERENCES Asignatura(AsignaturaID),
    FOREIGN KEY (CursoID) REFERENCES Cursos(CursoID),
    FOREIGN KEY (NivelEducativoID) REFERENCES Nivel_Educativo(NivelEducativoID)
);

-- insertar datos de prueba en la tabla Material_Educativo
INSERT INTO Material_Educativo (MaterialID, TipoArchivo, NombreArchivo, ProfesorID, AsignaturaID, CursoID, NivelEducativoID, Estado, Visible, RutaGoogleDrive, FechaSubida)
VALUES
    (1, 'Guía', 'ruta_guia1.pdf', 1, 1, 1, 1, true, true, 'ruta_guia1.pdf', '2023-10-06'),
    (2, 'Prueba', 'ruta_prueba1.pdf', 2, 2, 2, 2, true, true, 'ruta_prueba1.pdf', '2023-10-07'),
    (3, 'Planificación', 'ruta_planificacion1.pdf', 3, 3, 3, 3, true, true, 'ruta_planificacion1.pdf', '2023-10-08');

-- crear tabla Log para registro de cambios
CREATE TABLE Log (
    LogID INT PRIMARY KEY,
    UsuarioID INT,
    MaterialID INT,
    TipoCambioID INT,
    FechaCambio DATE,
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID),
    FOREIGN KEY (MaterialID) REFERENCES Material_Educativo(MaterialID),
    FOREIGN KEY (TipoCambioID) REFERENCES Tipo_Cambio(TipoCambioID)
);

-- crear tabla Comentario
CREATE TABLE Comentario (
    ComentarioID INT PRIMARY KEY,
    MaterialID INT,
    UsuarioID INT,
    Comentario VARCHAR(255),
    FechaComentario DATE,
    FOREIGN KEY (MaterialID) REFERENCES Material_Educativo(MaterialID),
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID)
);

-- insertar datos de prueba en la tabla Comentario
INSERT INTO Comentario (ComentarioID, MaterialID, UsuarioID, Comentario, FechaComentario)
VALUES
    (1, 1, 1, 'Comentario 1', '2023-10-06'),
    (2, 2, 2, 'Comentario 2', '2023-10-07'),
    (3, 3, 3, 'Comentario 3', '2023-10-08');

-- crear tabla Respuesta
CREATE TABLE Respuesta (
    RespuestaID INT PRIMARY KEY,
    ComentarioID INT,
    UsuarioID INT,
    Respuesta VARCHAR(255),
    FechaRespuesta DATE,
    FOREIGN KEY (ComentarioID) REFERENCES Comentario(ComentarioID),
    FOREIGN KEY (UsuarioID) REFERENCES Usuario(UsuarioID)
);

    -- insertar datos de prueba en la tabla Respuesta
INSERT INTO Respuesta (RespuestaID, ComentarioID, UsuarioID, Respuesta, FechaRespuesta)
VALUES
    (1, 1, 1, 'Respuesta 1', '2023-10-06'),
    (2, 2, 2, 'Respuesta 2', '2023-10-07'),
    (3, 3, 3, 'Respuesta 3', '2023-10-08');






    -- trigger para el nombre del archivo y visibilidad
DELIMITER //
CREATE TRIGGER Material_Educativo_BI BEFORE INSERT ON Material_Educativo FOR EACH ROW
BEGIN
    DECLARE NivelAbreviatura VARCHAR(10);
    DECLARE CursoAbreviatura VARCHAR(10);
    DECLARE AsignaturaNombre VARCHAR(255);
    DECLARE FechaArchivo DATE;
    DECLARE TipoArchivo VARCHAR(50);
    DECLARE CantidadArchivosMismoDia INT;
    
    -- obtener las abreviaturas del Curso y Nivel Educativo si están definidas, de lo contrario, establecerlas en blanco
    SELECT COALESCE(SUBSTRING(N.Abreviatura, 1, 3), ''), COALESCE(SUBSTRING(C.Abreviatura, 1, 3), '')
    INTO NivelAbreviatura, CursoAbreviatura
    FROM Nivel_Educativo AS N
    LEFT JOIN Cursos AS C ON NEW.CursoID = C.CursoID;
    
    -- obtener el nombre de la asignatura
    SELECT Nombre INTO AsignaturaNombre FROM Asignatura WHERE AsignaturaID = NEW.AsignaturaID;
    
    -- obtener la fecha del archivo
    SET FechaArchivo = NEW.FechaSubida;
    
    -- obtener el tipo de archivo
    SET TipoArchivo = NEW.TipoArchivo;
    
    -- contar la cantidad de archivos con el mismo nombre y fecha
    SELECT COUNT(*)
    INTO CantidadArchivosMismoDia
    FROM Material_Educativo
    WHERE FechaSubida = FechaArchivo
    AND TipoArchivo = TipoArchivo
    AND ProfesorID = NEW.ProfesorID;
    
    -- Establecer el nombre del archivo
    SET NEW.NombreArchivo = CONCAT(NivelAbreviatura, '_', CursoAbreviatura, '_', AsignaturaNombre, '_', TipoArchivo, '_', CantidadArchivosMismoDia + 1, '.pdf');
    
    -- Establecer la visibilidad inicial en verdadero
    SET NEW.Visible = TRUE;
END;
//
DELIMITER ;






    
    
    
    
    
    
    
    
    
    
    
    
    
    -- trigger para registro de cambios
DELIMITER //
CREATE TRIGGER Material_Educativo_AI AFTER INSERT ON Material_Educativo FOR EACH ROW
BEGIN
    -- Insertar registro de inserción en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.ProfesorID, NEW.MaterialID, 1, NEW.FechaSubida);
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER Material_Educativo_AU AFTER UPDATE ON Material_Educativo FOR EACH ROW
BEGIN
    -- Insertar registro de actualización en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.ProfesorID, NEW.MaterialID, 2, CURRENT_DATE());
END;
//
DELIMITER ;

DELIMITER //
CREATE TRIGGER Material_Educativo_AD AFTER DELETE ON Material_Educativo FOR EACH ROW
BEGIN
    -- Insertar registro de eliminación en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (OLD.ProfesorID, OLD.MaterialID, 3, CURRENT_DATE());
END;
//
DELIMITER ;












    -- Trigger para registro de comentarios
DELIMITER //
CREATE TRIGGER Comentario_AI AFTER INSERT ON Comentario FOR EACH ROW
BEGIN
    -- Insertar registro de comentario en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.MaterialID, 1, NEW.FechaComentario);
END;
//
DELIMITER ;

    -- Trigger para registro de respuestas
DELIMITER //
CREATE TRIGGER Respuesta_AI AFTER INSERT ON Respuesta FOR EACH ROW
BEGIN
    -- Insertar registro de respuesta en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.ComentarioID, 1, NEW.FechaRespuesta);
END;
//
DELIMITER ;









    -- trigger para registrar cambios en la visibilidad del material educativo
DELIMITER //
CREATE TRIGGER Material_Educativo_Visible_AI AFTER UPDATE ON Material_Educativo FOR EACH ROW
BEGIN
    -- Insertar registro de cambio de visibilidad en el log
    IF OLD.Visible <> NEW.Visible THEN
        INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
        VALUES (NEW.ProfesorID, NEW.MaterialID, 2, CURRENT_DATE());
    END IF;
END;
//
DELIMITER ;








    -- trigger para registrar cambios en los comentarios
DELIMITER //
CREATE TRIGGER Comentario_AU AFTER UPDATE ON Comentario FOR EACH ROW
BEGIN
    -- Insertar registro de actualización de comentario en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.MaterialID, 2, CURRENT_DATE());
END;
//
DELIMITER ;







    -- trigger para registrar cambios en las respuestas
DELIMITER //
CREATE TRIGGER Respuesta_AU AFTER UPDATE ON Respuesta FOR EACH ROW
BEGIN
    -- Insertar registro de actualización de respuesta en el log
    INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
    VALUES (NEW.UsuarioID, NEW.ComentarioID, 2, CURRENT_DATE());
END;
//
DELIMITER ;





    -- Desencadenador para registrar cambios en el estado del material educativo
DELIMITER //
CREATE TRIGGER Material_Educativo_Estado_AI AFTER UPDATE ON Material_Educativo FOR EACH ROW
BEGIN
    -- Insertar registro de cambio de estado en el log
    IF OLD.Estado <> NEW.Estado THEN
        INSERT INTO Log (UsuarioID, MaterialID, TipoCambioID, FechaCambio)
        VALUES (NEW.ProfesorID, NEW.MaterialID, 2, CURRENT_DATE());
    END IF;
END;
//
<<<<<<< HEAD
DELIMITER ;
=======
DELIMITER ;
>>>>>>> b0422ce6131b195955b226acec222a871f54e54f
