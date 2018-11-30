
--CREATE DATABASE SISFAC

--USE SISFAC
--GO

----Tablas


----Usuarios
--CREATE TABLE Usuarios(
--  Id_usuario INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_empleado INT NOT NULL,
--  Nombre varchar(50) NOT NULL,
--  Clave varchar(50) NOT NULL,
--  Nivel tinyint NOT NULL DEFAULT '1'
--)

----EMPLEADOS
--CREATE TABLE Empleados (
--  Id_empleado INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Cedula CHAR(11) NOT NULL,
--  Nombres VARCHAR(100) NOT NULL,
--  Apellidos VARCHAR(100) NOT NULL,
--  Fecha_nac varchar(50) NOT NULL,
--  Fecha_registro varchar(50) NOT NULL,
--  Cargo VARCHAR(50) NOT NULL,
--  Estado_civil VARCHAR(30) NOT NULL,
--  Grado_formacion VARCHAR(100) NOT NULL,
--  Ocupacion VARCHAR(100) NOT NULL,
--  Genero CHAR(1) NOT NULL,
--  [Status] VARCHAR(10) NOT NULL DEFAULT 'activo',
--  Nacionalidad VARCHAR(100) NOT NULL
--)

--CREATE TABLE Direccion_empleado (
--  Id_direccion_empleado INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_empleado INT NOT NULL,
--  Direccion_empleado VARCHAR(150) NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--)

--CREATE TABLE Email_empleado (
--  Id_email_empleado INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_empleado INT NOT NULL,
--  email_empleado VARCHAR(150) NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--)

--CREATE TABLE tel_empleado(
--  Id_tel_empleado int NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_empleado INT NOT NULL,
--  Telefono_empleado VARCHAR(15) NOT NULL,
--  [Status] INT NOT NULL DEFAULT '1'
--)

----Clientes 
--CREATE TABLE  Clientes(
--  ID_Cliente INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Cedula CHAR(11) NULL,
--  Nombre VARCHAR(50) NOT NULL,
--  Apellido VARCHAR(50) NOT NULL,
--  Genero CHAR(1) NOT NULL,
--  Nacionalidad VARCHAR(100) NOT NULL,
--  Fecha_Nac varchar(50) NOT NULL,
--  Fecha_Ing varchar(50) NOT NULL,
--  Hora_Ingreso time NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--)

--CREATE TABLE Direccion_cliente (
--  Id_direclt INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_cliente INT NOT NULL,
--  Direccion VARCHAR(300) NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--)

--CREATE TABLE tel_cliente (
--  Id_telcliente INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_cliente INT NOT NULL,
--  Telefono VARCHAR(20) NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--) 

----Productos
--CREATE TABLE Productos(
--  Id_producto INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_categoria INT NOT NULL,
--  Codigo_pro INT NOT NULL,
--  Nombre_pro VARCHAR(100) NOT NULL,
--  Existencia_pro INT NOT NULL,
--  Fecha_registro VARCHAR(10) NOT NULL,
--  CostoxU FLOAT NOT NULL,
--  PrecioxU FLOAT NOT NULL,
--  [Status] VARCHAR(10) NOT NULL DEFAULT 'activo'
--)
----Caterorias
--CREATE TABLE Categorias(
--  ID_Categoria INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Categoria VARCHAR(50) NOT NULL,
--  StatusCategory TINYINT NOT NULL DEFAULT 1
--)

----Carro de compras
--CREATE TABLE Carrito_Compras(
--  Cod INT NOT NULL,
--  Nombre_Product VARCHAR(100) DEFAULT NULL,
--  Cantidad INT DEFAULT NULL,
--  Precio FLOAT DEFAULT NULL,
--  Total as cantidad * precio --FLOAT NOT NULL
--)
--CREATE TABLE Facturas(
--  Id_factura INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_cliente INT NOT NULL,
--  Id_empleado INT NOT NULL,
--  Fecha_venta VARCHAR(10) NOT NULL,
--  Hora_venta VARCHAR(15) NOT NULL,
--  [Status] TINYINT NOT NULL DEFAULT '1'
--)

--CREATE TABLE Detalles_Facturas (
--  Id_producto INT NOT NULL PRIMARY KEY IDENTITY(1,1),
--  Id_factura INT NOT NULL,
--  PrecioXu DECIMAL(10,2) NOT NULL,
--  Cant INT NOT NULL,
--  Total DECIMAL(10,2) NOT NULL
--)

													-Constraint e Index- 
---- Filtros para la tabla `detalles_facturas`
----
--ALTER TABLE Detalles_facturas  ADD CONSTRAINT Detalles_facturas_fk_1 FOREIGN KEY (Id_producto) REFERENCES Productos (Id_producto)
  
--ALTER TABLE Detalles_facturas ADD CONSTRAINT Detalles_facturas_fk_2 FOREIGN KEY (Id_factura) REFERENCES Facturas (Id_factura);

----
---- Filtros para la tabla `direccion_cliente`
----
--ALTER TABLE Direccion_cliente ADD CONSTRAINT Direccion_cliente_fk_1 FOREIGN KEY (Id_cliente) REFERENCES Clientes (Id_cliente);

----
---- Filtros para la tabla `direccion_empleado`
----
--ALTER TABLE Direccion_empleado ADD CONSTRAINT Direccion_empleado_fk_1 FOREIGN KEY (Id_empleado) REFERENCES Empleados (Id_empleado);

----
---- Filtros para la tabla `email_empleado`
----
--ALTER TABLE Email_empleado ADD CONSTRAINT Email_empleado_fk_1 FOREIGN KEY (Id_empleado) REFERENCES Empleados (Id_empleado);

----
---- Filtros para la tabla `facturas`
----
--ALTER TABLE Facturas ADD CONSTRAINT Facturas_fk_1 FOREIGN KEY (Id_cliente) REFERENCES Clientes (Id_cliente)
--ALTER TABLE Facturas ADD CONSTRAINT Facturas_fk_2 FOREIGN KEY (Id_empleado) REFERENCES Empleados (Id_empleado);

----
---- Filtros para la tabla `productos`
----
--ALTER TABLE Productos ADD CONSTRAINT Productos_fk_1 FOREIGN KEY (Id_categoria) REFERENCES Categorias (Id_categoria);

----
---- Filtros para la tabla `tlf_cliente`
----
--ALTER TABLE tel_cliente ADD CONSTRAINT tel_cliente_fk_1 FOREIGN KEY (Id_cliente) REFERENCES Clientes (Id_cliente);

----
---- Filtros para la tabla `tlf_empleado`
----
--ALTER TABLE tel_empleado ADD CONSTRAINT tel_empleado_fk_1 FOREIGN KEY (Id_empleado) REFERENCES Empleados (Id_empleado);

----
---- Filtros para la tabla `usuarios`
----
--ALTER TABLE Usuarios ADD CONSTRAINT Usuarios_fk_1 FOREIGN KEY (Id_empleado) REFERENCES Empleados (Id_empleado);

--ALTER TABLE Empleados ADD CONSTRAINT Empleado_ck_Edad CHECK(Fecha_nac < '1999-12-31' )

--CREATE UNIQUE INDEX UDX_EMPLEADO_CEDULA ON empleados(cedula)

--CREATE UNIQUE INDEX UDX_PRODUCTO_NOMBRE ON productos(nombre_pro)
--CREATE UNIQUE INDEX UDX_PRODUCTO_CODIGO ON productos(codigo_pro)

--CREATE INDEX IDX_CATEGORIA_NOMBRE ON categorias(categoria)

--CREATE INDEX IDX_EMPLEADO_NOMBRE ON empleados(nombres)

--CREATE INDEX IDX_USUARIO_NOMBRE ON usuarios(nombre)

--CREATE INDEX IDX_USUARIO_IDEMPLEADO ON usuarios(id_empleado)

													-procedure-

--procedure PROC insertOrUpdateFactura(
--	@ID INT,
--	@ID_CLIENTE INT,
--	@ID_EMPLEADO INT,
--	@FECHA_VENTA VARCHAR(10),
--	@HORA_VENTA VARCHAR(15),
--	@STATUS TINYINT
--)AS BEGIN
--	IF(@ID='0')
--		BEGIN
--			INSERT INTO Facturas (Id_cliente,Id_empleado,Fecha_venta,Hora_venta,[Status])
--			VALUES(@ID_CLIENTE,@ID_EMPLEADO,@FECHA_VENTA,@HORA_VENTA,@STATUS)
--		END
--	ELSE
--		BEGIN
--			UPDATE Facturas set Id_cliente = @ID_CLIENTE, Id_empleado = @ID_EMPLEADO,
--			Fecha_venta = @FECHA_VENTA, Hora_venta = @HORA_VENTA, [Status] = @STATUS 
--			where Id_factura = @ID
--		END
--END

--CREATE PROC deleteFactura(@ID INT)
--AS 
--BEGIN
--	DELETE FROM Facturas WHERE Id_factura = @ID
--END

--ALTER PROC insertDetalleFactura(
--	@ID_PRODUCTO INT,
--	@ID_FACTURA INT,
--	@PRECIO DECIMAL(10,2),
--	@CANTIDAD INT
--)AS
--BEGIN
--	SET @ID_FACTURA = IDENT_CURRENT('FACTURAS')
--	INSERT INTO Detalles_Facturas(Id_producto,Id_factura,PrecioXu,Cant)
--	VALUES(@ID_PRODUCTO,@ID_FACTURA,@PRECIO,@CANTIDAD)
--END

--CREATE PROC insertCategorias(
--	@categoria varchar(50),
--	@status TINYINT
--)as
--begin
--	insert into Categorias(Categoria,StatusCategory)values(@categoria,@status)
--end

--create proc updateCategorias(
--	@id int,
--	@categoria varchar(50),
--	@status TINYINT
--)as
--begin
--	update Categorias set Categoria = @categoria, StatusCategory = @status where ID_Categoria = @id
--end

--create proc deleteCategorias(
--	@id int
--)as
--begin
--	delete from Categorias where ID_Categoria = @id
--end

--create proc insertCliente(
--	@cedula varchar(50),
--	@nombre varchar(50),
--	@apellido varchar(50),
--	@genero varchar(50),
--	@nacionalidad varchar(50),
--	@fecha_nac varchar(50),
--	@fecha_ing varchar(50),
--	@hora time,
--	@status TINYINT
--)as 
--begin
--	insert into Clientes (Cedula,Nombre,Apellido,Genero,Nacionalidad,Fecha_Nac,Fecha_Ing,Hora_Ingreso,[Status])
--	values(@cedula,@nombre,@apellido,@genero,@nacionalidad,@fecha_nac,@fecha_ing,@hora,@status)
--end

--create proc updateClientes(
--	@id int,
--	@cedula varchar(50),
--	@nombre varchar(50),
--	@apellido varchar(50),
--	@genero varchar(50),
--	@nacionalidad varchar(50),
--	@fecha_nac varchar(50),
--	@fecha_ing varchar(50),
--	@hora time,
--	@status TINYINT
--)as
--begin
--	update Clientes set Cedula = @cedula, Nombre = @nombre, Apellido = @apellido, Genero=@genero,
--	Nacionalidad=@nacionalidad,Fecha_Nac = @fecha_nac, Fecha_Ing = @fecha_ing, Hora_Ingreso = @hora,
--	[Status] = @status where ID_Cliente = @id  
--end

--create proc deleteCliente(
--	@id int
--)as
--begin
--	delete from Clientes where ID_Cliente = @id
--end

--create proc insertClienteTel(
--	@id_cliente int,
--	@telefono varchar(50),
--	@status TINYINT
--)as 
--begin
--	insert into tel_cliente (Id_cliente,Telefono,[Status])values(@id_cliente, @telefono,@status) 
--end

--create proc updateClienteTel(
--	@id int,
--	@id_cliente int,
--	@telefono varchar(50),
--	@status TINYINT
--)as 
--begin
--	update tel_cliente set Id_cliente=@id_cliente,Telefono=@telefono,[Status]=@status 
--	where Id_telcliente = @id
--end

--create proc delteClienteTel(
--	@id int
--)as
--begin
--	delete from tel_cliente where Id_telcliente = @id
--end

--create proc insertDireccionCliente(
--	@id_cliente int,
--	@direccion varchar(50),
--	@status tinyint
--)as
--begin
--	insert into Direccion_cliente (Id_cliente, Direccion, [Status])
--	values(@id_cliente,@direccion,@status) 
--end

--create proc updateDireccionCliente(
--	@id int,
--	@id_cliente int,
--	@direccion varchar(50),
--	@status tinyint
--)as
--begin
--	update Direccion_cliente set Id_cliente = @id_cliente, Direccion = @direccion, [Status] = @status
--	where Id_direclt = @id 
--end

--create proc deleteDireccionCliente(
--	@id int
--)as
--begin
--	delete from Direccion_cliente where Id_direclt = @id
--end

--create proc insertEmpleado(
--@Cedula CHAR(11),
--@Nombres VARCHAR(100),
--@Apellidos VARCHAR(100),
--@Fecha_nac varchar(50),
--@Fecha_registro varchar(50),
--@Cargo VARCHAR(50),
--@Estado_civil VARCHAR(30),
--@Grado_formacion VARCHAR(100),
--@Ocupacion VARCHAR(100),
--@Genero CHAR(1),
--@Status VARCHAR(10),
--@Nacionalidad VARCHAR(100)
--)as
--begin
--	insert into Empleados(
--Cedula,
--Nombres,
--Apellidos,
--Fecha_nac,
--Fecha_registro,
--Cargo,
--Estado_civil,
--Grado_formacion,
--Ocupacion,
--Genero,
--[Status],
--Nacionalidad ) values(
--@Cedula,
--@Nombres,
--@Apellidos,
--@Fecha_nac,
--@Fecha_registro,
--@Cargo,
--@Estado_civil,
--@Grado_formacion,
--@Ocupacion,
--@Genero,
--@Status,
--@Nacionalidad 
--)
--end

--create proc updateEmpleado(
--@id int,
--@Cedula CHAR(11),
--@Nombres VARCHAR(100),
--@Apellidos VARCHAR(100),
--@Fecha_nac varchar(50),
--@Fecha_registro varchar(50),
--@Cargo VARCHAR(50),
--@Estado_civil VARCHAR(30),
--@Grado_formacion VARCHAR(100),
--@Ocupacion VARCHAR(100),
--@Genero CHAR(1),
--@Status VARCHAR(10),
--@Nacionalidad VARCHAR(100)
--)as
--begin
--	update Empleados set
--Cedula = @Cedula,
--Nombres = @Nombres,
--Apellidos = @Apellidos,
--Fecha_nac = @Fecha_nac,
--Fecha_registro = @Fecha_registro,
--Cargo = @Cargo,
--Estado_civil = @Estado_civil,
--Grado_formacion = @Grado_formacion,
--Ocupacion = @Ocupacion,
--Genero = @Genero,
--[Status] = @Status
--where Id_empleado = @id
--end

--create procedure deleteEmpleado(
--@id int
--)as
--begin
--	delete from Empleados where Id_empleado = @id
--end

--create proc insertDireccionEmpleado(
--	@id_empleado int,
--	@direccion varchar(50),
--	@status tinyint
--)as
--begin
--	insert into  Direccion_empleado values(@id_empleado,@direccion,@status)
--end

--create proc updateDireccionEmpleado(
--	@id int,
--	@id_empleado int,
--	@direccion varchar(50),
--	@status tinyint
--)as
--begin
--	update Direccion_empleado set Id_empleado = @id_empleado, Direccion_empleado =  @direccion,
--	[Status] = @status where Id_direccion_empleado = @id
--end

--create proc deleteDireccionEmpleado(
--	@id int
--)as
--begin
--	delete from Direccion_empleado where Id_direccion_empleado = @id
--end

--create proc insertEmailEmpleado(
--	@id_empleado int,
--	@email varchar(50),
--	@status tinyint
--)as
--begin
--	insert into Email_empleado (Id_empleado, email_empleado, [Status])
--	values(@id_empleado,@email,@status)
--end

--create proc updateEmailEmpleado(
--	@id int,
--	@id_empleado int,
--	@email varchar(50),
--	@status tinyint
--)as
--begin
--	update Email_empleado set Id_empleado = @id_empleado, email_empleado = @email, [Status] = @status
--	where Id_email_empleado = @id
--end

--create proc deleteEmailEmpleado(
--	@id int
--)as
--begin
--	delete from Email_empleado where Id_email_empleado = @id
--end

--create proc insertTelefonoEmpledo(
--  @Id_empleado INT,
--  @Telefono_empleado VARCHAR(15),
--  @Status INT
--)as
--begin
--	insert into tel_empleado(Id_empleado,Telefono_empleado,[Status])
--	values(@Id_empleado,@Telefono_empleado,@Status)
--end

--create proc updateTelefonoEmpledo(
--  @id int,
--  @Id_empleado INT,
--  @Telefono_empleado VARCHAR(15),
--  @Status INT
--)as
--begin
--	update tel_empleado set Id_empleado = @Id_empleado, Telefono_empleado = @Telefono_empleado,
--	[Status] = @Status
--	where Id_tel_empleado = @id
--end

--create proc deleteTelefonoEmpleado(
--	@id int
--)as
--begin
--	delete from tel_empleado where Id_tel_empleado = @id
--end

--create proc insertUsuario(
--  @Id_empleado INT,
--  @Nombre varchar(50),
--  @Clave varchar(50),
--  @Nivel tinyint
--)as
--begin
--	insert into Usuarios (Id_empleado,Nombre,Clave,Nivel)
--	values(@Id_empleado,@Nombre,@Clave,@Nivel)
--end

--create proc updateUsuario(
--  @id int,
--  @Id_empleado INT,
--  @Nombre varchar(50),
--  @Clave varchar(50),
--  @Nivel tinyint
--)as
--begin
--	update Usuarios set Id_empleado = @Id_empleado, Nombre = @Nombre,
--	Clave = @Clave, Nivel = @Nivel
--	where Id_usuario = @id

--end

--create proc deleteUsuario(
--	@id int
--)as
--begin
--	delete from Usuarios where Id_usuario = @id
--end

--create proc insertProducto(
--  @Id_categoria INT,
--  @Codigo_pro INT,
--  @Nombre_pro VARCHAR(100),
--  @Existencia_pro INT,
--  @Fecha_registro VARCHAR(10),
--  @CostoxU FLOAT,
--  @PrecioxU FLOAT,
--  @Status VARCHAR(10)
--)as
--begin
--	insert into Productos(Id_categoria,Codigo_pro,Nombre_pro,Existencia_pro,Fecha_registro,CostoxU,PrecioxU,[Status])
--	values(@Id_categoria,@Codigo_pro,@Nombre_pro,@Existencia_pro,@Fecha_registro,@CostoxU,@PrecioxU,@Status)
--end


--create proc updateProducto(
--  @id int,
--  @Id_categoria INT,
--  @Codigo_pro INT,
--  @Nombre_pro VARCHAR(100),
--  @Existencia_pro INT,
--  @Fecha_registro VARCHAR(10),
--  @CostoxU FLOAT,
--  @PrecioxU FLOAT,
--  @Status VARCHAR(10)
--)as
--begin
--	update Productos set Id_categoria=@Id_categoria,Codigo_pro=@Codigo_pro,Nombre_pro=@Nombre_pro,
--	Existencia_pro=@Existencia_pro,Fecha_registro=@Fecha_registro,CostoxU=@CostoxU,PrecioxU=@PrecioxU,
--	[Status]=@Status where Id_producto = @id
--end

--create proc deleteProducto(
--	@id int
--)as 
--begin
--	delete from Productos where Id_producto = @id 
--end
												-View-
--create view vw_Facturas
--as select Facturas.Id_factura  as Codigo, Clientes.Nombre as Cliente, Empleados.Nombres as Empleado, 
--	   Facturas.Fecha_venta as Fecha, Facturas.Hora_venta as Hora, Facturas.[Status] as [Status] from Facturas
--	   inner join Clientes  on Facturas.Id_cliente = Clientes.ID_Cliente
--	   inner join Empleados on Facturas.Id_empleado = Empleados.Id_empleado

--create view vw_TotalFacturas
--as
--select count(id_factura) as Total from Facturas

--alter view vw_UltimasDiezFacturas as
--select top 10 Facturas.Id_factura as No_factura, Clientes.Nombre as Cliente, Empleados.Nombres as Empleado,
--Facturas.Fecha_venta as Fecha, Facturas.Hora_venta as Hora, Facturas.[Status] as [Status] from Facturas 
--inner join Clientes on Facturas.Id_cliente = Clientes.ID_Cliente
--inner join Empleados on Facturas.Id_empleado = Empleados.Id_empleado order by Id_factura desc

--create view vw_FacturasMesActual as
--select count(id_factura) as Cantidad, fecha_venta as Fecha from facturas Where DATEPART(MM,Fecha_venta) = MONTH(GETDATE()) and 
--DATEPART(YY,Fecha_venta) = YEAR(GETDATE())
--group by Fecha_venta

--create view vw_detalleFactura as
--select Productos.Nombre_pro as Producto, Detalles_Facturas.PrecioXu as Precio, 
--Detalles_Facturas.Cant as Cantidad, Detalles_Facturas.Total as Total, Detalles_Facturas.Id_factura from Detalles_Facturas
--inner join Productos on Detalles_Facturas.Id_producto = Productos.Id_producto

--create view vw_totalProductos as
--select COUNT(id_producto) as Total from Productos

--create view vw_ultimosDiezProductos as
--select top 10 Productos.Nombre_pro as Nombre, Categorias.Categoria as Categoria,
--Productos.Existencia_pro as Cantidad, Productos.Fecha_registro as [Fecha de Registro] from Productos
--inner join Categorias on Productos.Id_categoria = Categorias.ID_Categoria
--order by Id_producto desc

--create view vw_usuarios as
--select Usuarios.Id_usuario as Id, Empleados.Nombres as Empleado, Usuarios.Nombre as Usuario, 
--Usuarios.Clave as Clave, Usuarios.Nivel as Nivel from Usuarios
--inner join Empleados on Usuarios.Id_empleado =  Empleados.Id_empleado

--create view vw_productos as
--select Productos.Codigo_pro as Codigo, Productos.Nombre_pro as Nombre, Categorias.Categoria as Categoria,
--Productos.Existencia_pro as Cantidad, Productos.Fecha_registro as [Fecha de Registro],
--Productos.CostoxU as [Costo por unidad], Productos.PrecioxU as [Precio por unidad], Productos.[Status] from Productos
--inner join Categorias on Productos.Id_categoria = Categorias.ID_Categoria

--select Producto, Precio, Cantidad, Total from vw_detalleFactura where id_factura = 18

select * from vw_productos
select * from vw_totalProductos
select * from vw_ultimosDiezProductos
select * from vw_UltimasDiezFacturas
select * from vw_totalfacturas
select * from vw_Facturas where vw_Facturas.codigo = 16
select * from vw_FacturasMesActual
select * from vw_detalleFactura
select * from vw_usuarios

DELETE FROM Categorias where ID_Categoria > 7

--select * from Facturas
--select * from Detalles_Facturas
--select * from clientes
--select * from tel_cliente
--select * from Direccion_cliente
select * from Categorias
--select * from Empleados
--select * from Direccion_empleado
--select * from Email_empleado
--select * from tel_empleado
--select * from Usuarios
--select * from Productos
 exec insertDetalleFactura '1','','2','2'

 delete from Categorias where ID_Categoria = 3