create database proyectoColegio
go

use proyectoColegio
go

create table notas(
	id_nota int primary key not null,
	nota1 int not null,
	nota2 int not null,
	nota3 int not null,
	nota4 int not null
	)
go

create table aula(
	id_aula int primary key not null,
	grado int not null,
	seccion char not null
	)
go

create table curso(
	id_curso int primary key not null,
	nomb_curso varchar(30) not null
	)
go

create table notaxcurso(
	id_notcur int primary key not null,
	id_nota int not null references notas,
	id_curso int not null references curso
	)
go

create table profesor(
	id_prof int primary key not null,
	nomb_prof varchar(30) not null,
	apemat_prof varchar(30) not null,
	apepat_prof varchar(30) not null,
	edad_prof int not null,
	dni_prof int not null,
	correop_prof varchar(50),
	correoi_prof varchar(50) not null,
	telef_prof int not null,
	distrito_prof varchar(30) not null,
	calle_prof varchar(30) not null,
	pass_prof varchar(20) not null
	)
go

create table profxcurso(
	id_profcur int primary key not null,
	id_prof int not null references profesor,
	id_curso int not null references curso
	)
go

create table padres(
	id_pad int primary key not null,
	nomb_pad varchar(30) not null,
	apemat_pad varchar(30) not null,
	apepat_pad varchar(30) not null,
	edad_pad int not null,
	dni_pad int not null,
	correop_pad varchar(50),
	correoi_pad varchar(50) not null,
	distrito_pad varchar(30) not null,
	calle_pad varchar(30) not null,
	telef_pad int not null,
	pass_pad varchar(20) not null,
	)
go

create table alumno(
	id_alu int primary key not null,
	nomb_alu varchar(30) not null,
	apemat_alu varchar(30) not null,
	apepat_alu varchar(30) not null,
	edad_alu int not null,
	dni_alu int not null,
	correop_alu varchar(50),
	correoi_alu varchar(50) not null,
	distrito_alu varchar(30) not null,
	calle_alu varchar(30) not null,
	pass_alu varchar(20) not null,
	id_curso int not null references curso,
	id_padre int not null references padres,
	id_aula int not null references aula
	)
go

create table alumnoxprof(
	id_aluprof int primary key not null,
	id_alu int not null references alumno,
	id_prof int not null references profesor
	)
go

create table matricula(
	id_matric int primary key not null,
	dia int not null,
	mes int not null,
	año int not null,
	id_alu int not null references alumno
	)
go

create table boleta(
	id_boleta int primary key not null,
	monto money not null,
	id_matric int not null references matricula
	)
go

--claves foraneas--
--constraint fk_tabla_campo a convertir foreing key (campo) references tabla(campo)--