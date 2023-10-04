-- Crear tabla TipoUsuario
CREATE TABLE TipoUsuario (
    TipoUsuarioID INT PRIMARY KEY,
    Tipo VARCHAR(50)
);

-- Insertar tipo de usuario
INSERT INTO TipoUsuario (TipoUsuarioID, Tipo) VALUES 
    (1, 'Profesor'),
    (2, 'Trabajador_UTP'),
    (3, 'Administrador');

-- Crear tabla Nivel_Educativo
CREATE TABLE Nivel_Educativo (
    NivelEducativoID INT PRIMARY KEY,
    Nombre VARCHAR(50)
);

-- Insertar nivel educativo
INSERT INTO Nivel_Educativo (NivelEducativoID, Nombre) VALUES 
    (1, 'Nivel 1'),
    (2, 'Nivel 2'),
    (3, 'Nivel 3');

-- Crear tabla Cursos
CREATE TABLE Cursos (
    CursoID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    NivelEducativoID INT,
    FOREIGN KEY (NivelEducativoID) REFERENCES Nivel_Educativo(NivelEducativoID)
);

-- Insertar curso
INSERT INTO Cursos (CursoID, Nombre, NivelEducativoID) VALUES 
    (1, 'Curso 1', 1),
    (2, 'Curso 2', 1),
    (3, 'Curso 3', 2);

-- Crear tabla Asignatura
CREATE TABLE Asignatura (
    AsignaturaID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    CursoID INT,
    FOREIGN KEY (CursoID) REFERENCES Cursos(CursoID)
);

-- Crear tabla Tipo_Cambio
CREATE TABLE Tipo_Cambio (
    TipoCambioID INT PRIMARY KEY,
    TipoCambio VARCHAR(50)
);

-- Insertar tipo de cambio posible
INSERT INTO Tipo_Cambio (TipoCambioID, TipoCambio) VALUES 
    (1, 'Inserción'),
    (2, 'Actualización'),
    (3, 'Eliminación');

-- Crear tabla Usuario con TipoUsuario y AsignaturaID (puede ser NULL)
CREATE TABLE Usuario (
    UsuarioID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    CorreoElectronico VARCHAR(100),
    TipoUsuarioID INT,
    AsignaturaID INT NULL, -- Puede ser NULL
    FOREIGN KEY (TipoUsuarioID) REFERENCES TipoUsuario(TipoUsuarioID),
    FOREIGN KEY (AsignaturaID) REFERENCES Asignatura(AsignaturaID)
);

-- Crear tabla Material_Educativo
CREATE TABLE Material_Educativo (
    MaterialID INT PRIMARY KEY,
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

-- Crear tabla Log para registro de cambios
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
