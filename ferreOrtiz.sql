SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*==============================================================*/
/* Base de datos: `ferreteria`                                 */
/*==============================================================*/
CREATE DATABASE IF NOT EXISTS `ferreteriaweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `ferreteriaweb`;

drop table if exists PRODUCTO;

/*==============================================================*/
/* Table: PRODUCTO                                                */
/*==============================================================*/
create table PRODUCTO (
   IDPRODUCTO                 bigint unsigned not null auto_increment,
   NOMBREPRODUCTO             varchar(100)          null,
   DESCRIPCIONPRODUCTO        varchar(100)          null,
   PRECIOUNITARIO             int          null,
   CATEGORIA                  varchar(100)          null,
   DESCUENTO                  int          null,
   FECHATERMINO               date         default 0,
   primary key (IDPRODUCTO)
);
