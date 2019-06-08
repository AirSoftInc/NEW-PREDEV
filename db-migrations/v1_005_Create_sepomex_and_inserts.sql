create table sepomex(
	d_codigo varchar(10),
	d_asenta varchar(100),
	d_tipo_asenta varchar(100),
	D_mnpio varchar(100),
	d_estado varchar(100),
	d_ciudad varchar(100),
	d_CP varchar(10),
	c_estado varchar(10),
	c_oficina varchar(10),
	c_CP varchar(10),
	c_tipo_asenta varchar(10),
	c_mnpio varchar(10),
	id_asenta_cpcons varchar(10),
	d_zona varchar(10),
	c_cve_ciudad varchar(10)
);

 LOAD DATA INFILE 'C:/sepomex.csv'
 INTO TABLE sepomex
 FIELDS TERMINATED BY  ',' OPTIONALLY ENCLOSED BY  '"' 
 LINES TERMINATED BY '\n'
 (d_codigo,d_asenta,d_tipo_asenta,D_mnpio,d_estado,d_ciudad,d_CP,c_estado,c_oficina,c_CP,c_tipo_asenta,c_mnpio,id_asenta_cpcons,d_zona,c_cve_ciudad);
 
 select distinct d_estado from sepomex order by d_estado;
 
 select distinct d_mnpio, d_CP from sepomex where d_estado = 'Veracruz de Ignacio de la Llave' order by D_mnpio;
 
 select distinct d_asenta from sepomex where d_estado = 'Veracruz de Ignacio de la Llave' and d_mnpio = 'Maltrata' order by d_asenta;
