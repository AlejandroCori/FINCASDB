 CREATE DATABASE FincasDBB1;
USE FincasDBB1;

-- Tabla Administrador
CREATE TABLE Administrador(
    nColegiado VARCHAR(8), -- número de colegiado
    DNI VARCHAR(11),
    Nombre VARCHAR(50),
    PRIMARY KEY (nColegiado)
);

-- Tabla ComunidadVecinos
CREATE TABLE ComunidadVecinos(
    colegioID VARCHAR(8),
    poblacion INT,
    nombre VARCHAR(50),
    calle VARCHAR(50),
    codigoPostal VARCHAR(10),
    nColegiado VARCHAR(8),
    PRIMARY KEY (colegioID),
    FOREIGN KEY (nColegiado) REFERENCES Administrador(nColegiado)
);

-- Tabla Compania
CREATE TABLE Compania(
    CIF VARCHAR(15),
    personaContacto VARCHAR(50),
    telefonoContacto VARCHAR(15),
    sector VARCHAR(50),
    direccion VARCHAR(100),
    nombre VARCHAR(50),
    telefono VARCHAR(15),
    PRIMARY KEY (CIF)
);

-- Tabla Contrata
CREATE TABLE Contrata(
    nContrato VARCHAR(20),
    CIF VARCHAR(15),
    colegioID VARCHAR(8),
    PRIMARY KEY (nContrato),
    FOREIGN KEY (CIF) REFERENCES Compania(CIF),
    FOREIGN KEY (colegioID) REFERENCES ComunidadVecinos(colegioID)
);

-- Tabla Recibo
CREATE TABLE Recibo(
    nRecibo VARCHAR(20),
    fecha DATE,
    importe DECIMAL(10, 2),
    numero INT,
    CIF VARCHAR(15),
    PRIMARY KEY (nRecibo),
    FOREIGN KEY (CIF) REFERENCES Compania(CIF)
);

-- Tabla Banco
CREATE TABLE Banco(
    codBanco VARCHAR(10),
    contacto VARCHAR(50),
    nombre VARCHAR(50),
    PRIMARY KEY (codBanco)
);

-- Tabla Cuenta
CREATE TABLE Cuenta(
    idCuenta VARCHAR(20),
    DC VARCHAR(10),
    sucursal VARCHAR(50),
    saldo DECIMAL(10, 2),
    nRecibo VARCHAR(20),
    nContrato VARCHAR(20),
    codBanco VARCHAR(10),
    PRIMARY KEY (idCuenta),
    FOREIGN KEY (nContrato) REFERENCES Contrata(nContrato),
    FOREIGN KEY (nRecibo) REFERENCES Recibo(nRecibo),
    FOREIGN KEY (codBanco) REFERENCES Banco(codBanco)
);

-- Tabla Propiedad
CREATE TABLE Propiedad(
    nCuenta VARCHAR(20),
    portal VARCHAR(5),
    porcentaje DECIMAL(5, 2),
    letra VARCHAR(5),
    planta VARCHAR(5),
    telefono VARCHAR(15),
    contacto VARCHAR(50),
    nInquilino VARCHAR(30),
    nPropietario VARCHAR(30),
    direccionPropietario VARCHAR(100),
    colegioID VARCHAR(8),
    PRIMARY KEY (nCuenta),
    FOREIGN KEY (colegioID) REFERENCES ComunidadVecinos(colegioID),
    FOREIGN KEY (nCuenta) REFERENCES Cuenta(idCuenta)
);

-- Tabla ReciboCuotaComunidad
CREATE TABLE ReciboCuotaComunidad(
    nReciboCuota VARCHAR(20),
    importe DECIMAL(10, 2),
    fecha DATE,
    estado VARCHAR(10),
    PRIMARY KEY (nReciboCuota)
);

-- Tabla ViviendaParticular
CREATE TABLE ViviendaParticular(
    codViviendaParticular VARCHAR(20),
    nHabitaciones INT,
    PRIMARY KEY (codViviendaParticular)
);

-- Tabla Oficina
CREATE TABLE Oficina(
    codOficina VARCHAR(20),
    actividad VARCHAR(200),
    PRIMARY KEY (codOficina)
);

-- Tabla LocalComercial
CREATE TABLE LocalComercial(
    codLocalComercial VARCHAR(20),
    tipo VARCHAR(50),
    horario VARCHAR(50),
    PRIMARY KEY (codLocalComercial)
);

-- Inserciones para la tabla Administrador
INSERT INTO Administrador (nColegiado, DNI, Nombre) VALUES 
('A1234567', '12345678A', 'Juan López'),
('B2345678', '23456789B', 'María Rodríguez'),
('C3456789', '34567890C', 'Carlos García'),
('D4567890', '45678901D', 'Ana Martínez'),
('E5678901', '56789012E', 'Pablo Sánchez');

-- Inserciones para la tabla ComunidadVecinos
INSERT INTO ComunidadVecinos (colegioID, poblacion, nombre, calle, codigoPostal, nColegiado) VALUES 
('CV001', 100, 'Residencial Los Pinos', 'Calle Robles', '12345', 'A1234567'),
('CV002', 200, 'Urbanización El Bosque', 'Avenida del Parque', '23456', 'B2345678'),
('CV003', 150, 'Condominio Las Flores', 'Calle Primavera', '34567', 'C3456789'),
('CV004', 300, 'Barrio San Juan', 'Calle Mayor', '45678', 'D4567890'),
('CV005', 250, 'Complejo La Montaña', 'Avenida Libertad', '56789', 'E5678901');

-- Inserciones para la tabla Compania
INSERT INTO Compania (CIF, personaContacto, telefonoContacto, sector, direccion, nombre, telefono) VALUES 
('CIF12345', 'Persona1', '123456789', 'Sector1', 'Calle Principal', 'Empresa A', '987654321'),
('CIF23456', 'Persona2', '234567890', 'Sector2', 'Avenida Central', 'Empresa B', '876543210'),
('CIF34567', 'Persona3', '345678901', 'Sector3', 'Calle Secundaria', 'Empresa C', '765432109'),
('CIF45678', 'Persona4', '456789012', 'Sector4', 'Avenida Norte', 'Empresa D', '654321098'),
('CIF56789', 'Persona5', '567890123', 'Sector5', 'Calle Sur', 'Empresa E', '543210987');

-- Inserciones para la tabla Contrata
INSERT INTO Contrata (nContrato, CIF, colegioID) VALUES 
('CT12345', 'CIF12345', 'CV001'),
('CT23456', 'CIF23456', 'CV002'),
('CT34567', 'CIF34567', 'CV003'),
('CT45678', 'CIF45678', 'CV004'),
('CT56789', 'CIF56789', 'CV005');

-- Inserciones para la tabla Recibo
INSERT INTO Recibo (nRecibo, fecha, importe, numero, CIF) VALUES 
('RECO001', '2024-04-01', 1000.00, 1, 'CIF12345'),
('RECP002', '2024-04-02', 1500.00, 2, 'CIF23456'),
('RECA003', '2024-04-03', 1200.00, 3, 'CIF34567'),
('RECC004', '2024-04-04', 2000.00, 4, 'CIF45678'),
('RECB005', '2024-04-05', 1800.00, 5, 'CIF56789');

-- Inserciones para la tabla Banco
INSERT INTO Banco (codBanco, contacto, nombre) VALUES 
('BancoA', 'Contacto1', 'Banco ABC'),
('BancoB', 'Contacto2', 'Banco XYZ'),
('BancoC', 'Contacto3', 'Banco XYZ'),
('BancoD', 'Contacto4', 'Banco 123'),
('BancoE', 'Contacto5', 'Banco ABCD');

-- Inserciones para la tabla Cuenta
INSERT INTO Cuenta (idCuenta, DC, sucursal, saldo, nRecibo, nContrato, codBanco) VALUES 
('CUENTA001', 'DC001', 'Sucursal A', 5000.00, 'RECO001', 'CT12345', 'BancoA'),
('CUENTA002', 'DC002', 'Sucursal B', 6000.00, 'RECP002', 'CT23456', 'BancoB'),
('CUENTA003', 'DC003', 'Sucursal C', 7000.00, 'RECA003', 'CT34567', 'BancoC'),
('CUENTA004', 'DC004', 'Sucursal D', 8000.00, 'RECC004', 'CT45678', 'BancoD'),
('CUENTA005', 'DC005', 'Sucursal E', 9000.00, 'RECB005', 'CT56789', 'BancoE');

-- Inserciones para la tabla Propiedad
INSERT INTO Propiedad (nCuenta, portal, porcentaje, letra, planta, telefono, contacto, nInquilino, nPropietario, direccionPropietario, colegioID) VALUES 
('CUENTA001', 'P-1', 50.00, 'A', 'B', '123456789', 'Contacto3', 'Inquilino1', 'Propietario1', 'Calle Principal 123', 'CV001'),
('CUENTA002', 'P-2', 30.00, 'B', '1', '987654321', 'Contacto4', 'Inquilino2', 'Propietario2', 'Avenida Central 456', 'CV002'),
('CUENTA003', 'P-3', 20.00, 'C', '2', '234567890', 'Contacto5', 'Inquilino3', 'Propietario3', 'Calle Secundaria 789', 'CV003'),
('CUENTA004', 'P-4', 40.00, 'D', '3', '345678901', 'Contacto8', 'Inquilino4', 'Propietario4', 'Avenida Norte 101', 'CV004'),
('CUENTA005', 'P-5', 60.00, 'E', '4', '456789012', 'Contacto9', 'Inquilino5', 'Propietario5', 'Calle Sur 202', 'CV005');

-- Inserciones para la tabla ReciboCuotaComunidad
INSERT INTO ReciboCuotaComunidad (nReciboCuota, importe, fecha, estado) VALUES 
('RC001', 200.00, '2024-04-01', '0'),
('RC002', 250.00, '2024-04-02', '1'),
('RC003', 180.00, '2024-04-03', '0');

-- Inserciones para la tabla ViviendaParticular
INSERT INTO ViviendaParticular (codViviendaParticular, nHabitaciones) VALUES 
('VP001', 3),
('VP002', 2),
('VP003', 4),
('VP004', 1),
('VP005', 5);

-- Inserciones para la tabla Oficina
INSERT INTO Oficina (codOficina, actividad) VALUES 
('OF001', 'Consultoría'),
('OF002', 'Despacho Legal'),
('OF003', 'Agencia de Viajes'),
('OF004', 'Estudio de Arquitectura'),
('OF005', 'Agencia de Seguros');

-- Inserciones para la tabla LocalComercial
INSERT INTO LocalComercial (codLocalComercial, tipo, horario) VALUES 
('LC001', 'Restaurante', '9am-10pm'),
('LC002', 'Tienda', '10am-8pm'),
('LC003', 'Gimnasio', '6am-10pm'),
('LC004', 'Oficina', '9am-6pm'),
('LC005', 'Cafetería', '7am-9pm');