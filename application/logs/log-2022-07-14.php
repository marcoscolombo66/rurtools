<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2022-07-14 12:12:13 --> Config Class Initialized
INFO - 2022-07-14 12:12:13 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:12:13 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:12:13 --> Utf8 Class Initialized
INFO - 2022-07-14 12:12:13 --> URI Class Initialized
INFO - 2022-07-14 12:12:13 --> Router Class Initialized
INFO - 2022-07-14 12:12:13 --> Output Class Initialized
INFO - 2022-07-14 12:12:13 --> Security Class Initialized
DEBUG - 2022-07-14 12:12:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:12:13 --> Input Class Initialized
INFO - 2022-07-14 12:12:13 --> Language Class Initialized
INFO - 2022-07-14 12:12:13 --> Loader Class Initialized
INFO - 2022-07-14 12:12:13 --> Helper loaded: url_helper
INFO - 2022-07-14 12:12:13 --> Helper loaded: text_helper
INFO - 2022-07-14 12:12:13 --> Helper loaded: form_helper
INFO - 2022-07-14 12:12:13 --> Database Driver Class Initialized
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 282
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> session_set_cookie_params(): Cannot change session cookie parameters when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 294
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 304
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 314
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 315
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 316
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 317
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 375
DEBUG - 2022-07-14 12:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> session_set_save_handler(): Cannot change save handler when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 110
ERROR - 2022-07-14 12:12:13 --> Severity: Warning --> session_start(): Cannot start session when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 143
INFO - 2022-07-14 12:12:13 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:12:13 --> Controller Class Initialized
DEBUG - 2022-07-14 12:12:13 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:12:13 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:12:13 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:12:13 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:12:13 --> Model "User_m" initialized
INFO - 2022-07-14 12:12:13 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:12:13 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:12:14 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:12:14 --> Language file loaded: language/english/db_lang.php
ERROR - 2022-07-14 12:12:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/librevia/public_html/admin/application/libraries/RestController.php:5) /home/librevia/public_html/admin/system/core/Common.php 564
INFO - 2022-07-14 12:12:22 --> Config Class Initialized
INFO - 2022-07-14 12:12:22 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:12:22 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:12:22 --> Utf8 Class Initialized
INFO - 2022-07-14 12:12:22 --> URI Class Initialized
INFO - 2022-07-14 12:12:22 --> Router Class Initialized
INFO - 2022-07-14 12:12:22 --> Output Class Initialized
INFO - 2022-07-14 12:12:22 --> Security Class Initialized
DEBUG - 2022-07-14 12:12:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:12:22 --> Input Class Initialized
INFO - 2022-07-14 12:12:22 --> Language Class Initialized
INFO - 2022-07-14 12:12:22 --> Loader Class Initialized
INFO - 2022-07-14 12:12:22 --> Helper loaded: url_helper
INFO - 2022-07-14 12:12:22 --> Helper loaded: text_helper
INFO - 2022-07-14 12:12:22 --> Helper loaded: form_helper
INFO - 2022-07-14 12:12:22 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:12:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:12:22 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:12:22 --> Controller Class Initialized
DEBUG - 2022-07-14 12:12:22 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:12:22 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:12:22 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:12:22 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:12:22 --> Model "User_m" initialized
INFO - 2022-07-14 12:12:22 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:12:22 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:12:22 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:12:22 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:13:28 --> Config Class Initialized
INFO - 2022-07-14 12:13:28 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:13:28 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:13:28 --> Utf8 Class Initialized
INFO - 2022-07-14 12:13:28 --> URI Class Initialized
INFO - 2022-07-14 12:13:28 --> Router Class Initialized
INFO - 2022-07-14 12:13:28 --> Output Class Initialized
INFO - 2022-07-14 12:13:28 --> Security Class Initialized
DEBUG - 2022-07-14 12:13:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:13:28 --> Input Class Initialized
INFO - 2022-07-14 12:13:28 --> Language Class Initialized
INFO - 2022-07-14 12:13:28 --> Loader Class Initialized
INFO - 2022-07-14 12:13:28 --> Helper loaded: url_helper
INFO - 2022-07-14 12:13:28 --> Helper loaded: text_helper
INFO - 2022-07-14 12:13:28 --> Helper loaded: form_helper
INFO - 2022-07-14 12:13:28 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:13:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:13:28 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:13:28 --> Controller Class Initialized
DEBUG - 2022-07-14 12:13:28 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:13:28 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:13:28 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:13:28 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:13:28 --> Model "User_m" initialized
INFO - 2022-07-14 12:13:28 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:13:28 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:13:28 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:13:28 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:15:25 --> Config Class Initialized
INFO - 2022-07-14 12:15:25 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:15:25 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:15:25 --> Utf8 Class Initialized
INFO - 2022-07-14 12:15:25 --> URI Class Initialized
INFO - 2022-07-14 12:15:25 --> Router Class Initialized
INFO - 2022-07-14 12:15:25 --> Output Class Initialized
INFO - 2022-07-14 12:15:25 --> Security Class Initialized
DEBUG - 2022-07-14 12:15:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:15:25 --> Input Class Initialized
INFO - 2022-07-14 12:15:25 --> Language Class Initialized
INFO - 2022-07-14 12:15:25 --> Loader Class Initialized
INFO - 2022-07-14 12:15:25 --> Helper loaded: url_helper
INFO - 2022-07-14 12:15:25 --> Helper loaded: text_helper
INFO - 2022-07-14 12:15:25 --> Helper loaded: form_helper
INFO - 2022-07-14 12:15:25 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:15:25 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:15:25 --> Controller Class Initialized
DEBUG - 2022-07-14 12:15:25 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:15:25 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:15:25 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:15:25 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:15:25 --> Model "User_m" initialized
INFO - 2022-07-14 12:15:25 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:15:25 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:15:25 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:15:25 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:15:30 --> Config Class Initialized
INFO - 2022-07-14 12:15:30 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:15:30 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:15:30 --> Utf8 Class Initialized
INFO - 2022-07-14 12:15:30 --> URI Class Initialized
INFO - 2022-07-14 12:15:30 --> Router Class Initialized
INFO - 2022-07-14 12:15:30 --> Output Class Initialized
INFO - 2022-07-14 12:15:30 --> Security Class Initialized
DEBUG - 2022-07-14 12:15:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:15:30 --> Input Class Initialized
INFO - 2022-07-14 12:15:30 --> Language Class Initialized
INFO - 2022-07-14 12:15:30 --> Loader Class Initialized
INFO - 2022-07-14 12:15:30 --> Helper loaded: url_helper
INFO - 2022-07-14 12:15:30 --> Helper loaded: text_helper
INFO - 2022-07-14 12:15:30 --> Helper loaded: form_helper
INFO - 2022-07-14 12:15:30 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:15:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:15:30 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:15:30 --> Controller Class Initialized
DEBUG - 2022-07-14 12:15:30 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:15:30 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:15:30 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:15:30 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:15:30 --> Model "User_m" initialized
INFO - 2022-07-14 12:15:30 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:15:30 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:15:30 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:15:30 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:16:46 --> Config Class Initialized
INFO - 2022-07-14 12:16:46 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:16:46 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:16:46 --> Utf8 Class Initialized
INFO - 2022-07-14 12:16:46 --> URI Class Initialized
INFO - 2022-07-14 12:16:46 --> Router Class Initialized
INFO - 2022-07-14 12:16:46 --> Output Class Initialized
INFO - 2022-07-14 12:16:46 --> Security Class Initialized
DEBUG - 2022-07-14 12:16:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:16:46 --> Input Class Initialized
INFO - 2022-07-14 12:16:46 --> Language Class Initialized
INFO - 2022-07-14 12:16:46 --> Loader Class Initialized
INFO - 2022-07-14 12:16:46 --> Helper loaded: url_helper
INFO - 2022-07-14 12:16:46 --> Helper loaded: text_helper
INFO - 2022-07-14 12:16:46 --> Helper loaded: form_helper
INFO - 2022-07-14 12:16:46 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:16:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:16:46 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:16:46 --> Controller Class Initialized
DEBUG - 2022-07-14 12:16:46 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:16:46 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:16:46 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:16:46 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:16:46 --> Model "User_m" initialized
INFO - 2022-07-14 12:16:46 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:16:46 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:16:46 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:16:46 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:17:05 --> Config Class Initialized
INFO - 2022-07-14 12:17:05 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:17:05 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:17:05 --> Utf8 Class Initialized
INFO - 2022-07-14 12:17:05 --> URI Class Initialized
INFO - 2022-07-14 12:17:05 --> Router Class Initialized
INFO - 2022-07-14 12:17:05 --> Output Class Initialized
INFO - 2022-07-14 12:17:05 --> Security Class Initialized
DEBUG - 2022-07-14 12:17:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:17:05 --> Input Class Initialized
INFO - 2022-07-14 12:17:05 --> Language Class Initialized
INFO - 2022-07-14 12:17:05 --> Loader Class Initialized
INFO - 2022-07-14 12:17:05 --> Helper loaded: url_helper
INFO - 2022-07-14 12:17:05 --> Helper loaded: text_helper
INFO - 2022-07-14 12:17:05 --> Helper loaded: form_helper
INFO - 2022-07-14 12:17:05 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:17:05 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:17:05 --> Controller Class Initialized
DEBUG - 2022-07-14 12:17:05 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:17:05 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:17:05 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:17:05 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:17:05 --> Model "User_m" initialized
INFO - 2022-07-14 12:17:05 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:17:05 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:17:05 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:17:05 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 12:17:11 --> Config Class Initialized
INFO - 2022-07-14 12:17:11 --> Hooks Class Initialized
DEBUG - 2022-07-14 12:17:11 --> UTF-8 Support Enabled
INFO - 2022-07-14 12:17:11 --> Utf8 Class Initialized
INFO - 2022-07-14 12:17:11 --> URI Class Initialized
INFO - 2022-07-14 12:17:11 --> Router Class Initialized
INFO - 2022-07-14 12:17:11 --> Output Class Initialized
INFO - 2022-07-14 12:17:11 --> Security Class Initialized
DEBUG - 2022-07-14 12:17:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 12:17:11 --> Input Class Initialized
INFO - 2022-07-14 12:17:11 --> Language Class Initialized
INFO - 2022-07-14 12:17:11 --> Loader Class Initialized
INFO - 2022-07-14 12:17:11 --> Helper loaded: url_helper
INFO - 2022-07-14 12:17:11 --> Helper loaded: text_helper
INFO - 2022-07-14 12:17:11 --> Helper loaded: form_helper
INFO - 2022-07-14 12:17:11 --> Database Driver Class Initialized
DEBUG - 2022-07-14 12:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 12:17:11 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 12:17:11 --> Controller Class Initialized
DEBUG - 2022-07-14 12:17:11 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 12:17:11 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 12:17:11 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 12:17:11 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 12:17:11 --> Model "User_m" initialized
INFO - 2022-07-14 12:17:11 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 12:17:11 --> Model "Email_m" initialized
ERROR - 2022-07-14 12:17:11 --> Query error: Unknown column 'destino.FOTO_DESTINO' in 'field list' - Invalid query: 
SELECT pilotos_destinos.idPILOTOS_DESTINOS,pilotos.NOMBRE_APELLIDO,pilotos.FOTO_PERFIL, pilotos_destinos.DIA_HORA,b.DESCRIPCION as SALIDA,destinos.DESCRIPCION AS DESTINO,
destino.FOTO_DESTINO, aviones.MARCA,aviones.MODELO,aviones.CAPACIDAD_PASAJEROS,aviones.FOTO_AVION,
pilotos_destinos.PRECIO,pilotos_destinos.ASIENTOS
FROM `pilotos_destinos`
 
INNER JOIN destinos ON pilotos_destinos.idDESTINOS=destinos.idDESTINOS 
INNER JOIN pilotos ON pilotos_destinos.idPILOTOS=pilotos.idPILOTOS
INNER JOIN aviones ON pilotos_destinos.idAVIONES=aviones.idAVIONES
INNER JOIN destinos AS b ON pilotos_destinos.idSALIDAS = b.idDESTINOS


WHERE pilotos_destinos.ASIENTOS>0

INFO - 2022-07-14 12:17:11 --> Language file loaded: language/english/db_lang.php
INFO - 2022-07-14 13:54:32 --> Config Class Initialized
INFO - 2022-07-14 13:54:32 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:54:32 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:54:32 --> Utf8 Class Initialized
INFO - 2022-07-14 13:54:32 --> URI Class Initialized
INFO - 2022-07-14 13:54:32 --> Router Class Initialized
INFO - 2022-07-14 13:54:32 --> Output Class Initialized
INFO - 2022-07-14 13:54:32 --> Security Class Initialized
DEBUG - 2022-07-14 13:54:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:54:32 --> Input Class Initialized
INFO - 2022-07-14 13:54:32 --> Language Class Initialized
INFO - 2022-07-14 13:54:32 --> Loader Class Initialized
INFO - 2022-07-14 13:54:32 --> Helper loaded: url_helper
INFO - 2022-07-14 13:54:32 --> Helper loaded: text_helper
INFO - 2022-07-14 13:54:32 --> Helper loaded: form_helper
INFO - 2022-07-14 13:54:32 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:54:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:54:32 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:54:32 --> Controller Class Initialized
DEBUG - 2022-07-14 13:54:32 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:54:32 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:54:32 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:54:32 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:54:32 --> Model "User_m" initialized
INFO - 2022-07-14 13:54:32 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:54:32 --> Model "Email_m" initialized
INFO - 2022-07-14 13:54:32 --> Final output sent to browser
DEBUG - 2022-07-14 13:54:32 --> Total execution time: 0.0140
INFO - 2022-07-14 13:54:35 --> Config Class Initialized
INFO - 2022-07-14 13:54:35 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:54:35 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:54:35 --> Utf8 Class Initialized
INFO - 2022-07-14 13:55:54 --> Config Class Initialized
INFO - 2022-07-14 13:55:54 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:55:54 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:55:54 --> Utf8 Class Initialized
INFO - 2022-07-14 13:55:54 --> URI Class Initialized
INFO - 2022-07-14 13:55:54 --> Router Class Initialized
INFO - 2022-07-14 13:55:54 --> Output Class Initialized
INFO - 2022-07-14 13:55:54 --> Security Class Initialized
DEBUG - 2022-07-14 13:55:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:55:54 --> Input Class Initialized
INFO - 2022-07-14 13:55:54 --> Language Class Initialized
INFO - 2022-07-14 13:55:54 --> Loader Class Initialized
INFO - 2022-07-14 13:55:54 --> Helper loaded: url_helper
INFO - 2022-07-14 13:55:54 --> Helper loaded: text_helper
INFO - 2022-07-14 13:55:54 --> Helper loaded: form_helper
INFO - 2022-07-14 13:55:54 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:55:55 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:55:55 --> Controller Class Initialized
DEBUG - 2022-07-14 13:55:55 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:55:55 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:55:55 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:55:55 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:55:55 --> Model "User_m" initialized
INFO - 2022-07-14 13:55:55 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:55:55 --> Model "Email_m" initialized
INFO - 2022-07-14 13:55:55 --> Final output sent to browser
DEBUG - 2022-07-14 13:55:55 --> Total execution time: 0.0123
INFO - 2022-07-14 13:56:37 --> Config Class Initialized
INFO - 2022-07-14 13:56:37 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:56:37 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:56:37 --> Utf8 Class Initialized
INFO - 2022-07-14 13:56:37 --> URI Class Initialized
INFO - 2022-07-14 13:56:37 --> Router Class Initialized
INFO - 2022-07-14 13:56:37 --> Output Class Initialized
INFO - 2022-07-14 13:56:37 --> Security Class Initialized
DEBUG - 2022-07-14 13:56:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:56:37 --> Input Class Initialized
INFO - 2022-07-14 13:56:37 --> Language Class Initialized
INFO - 2022-07-14 13:56:37 --> Loader Class Initialized
INFO - 2022-07-14 13:56:37 --> Helper loaded: url_helper
INFO - 2022-07-14 13:56:37 --> Helper loaded: text_helper
INFO - 2022-07-14 13:56:37 --> Helper loaded: form_helper
INFO - 2022-07-14 13:56:37 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:56:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:56:37 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:56:37 --> Controller Class Initialized
DEBUG - 2022-07-14 13:56:37 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:56:37 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:56:37 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:56:37 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:56:37 --> Model "User_m" initialized
INFO - 2022-07-14 13:56:37 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:56:37 --> Model "Email_m" initialized
INFO - 2022-07-14 13:56:37 --> Final output sent to browser
DEBUG - 2022-07-14 13:56:37 --> Total execution time: 0.0116
INFO - 2022-07-14 13:58:41 --> Config Class Initialized
INFO - 2022-07-14 13:58:41 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:58:41 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:58:41 --> Utf8 Class Initialized
INFO - 2022-07-14 13:58:41 --> URI Class Initialized
INFO - 2022-07-14 13:58:41 --> Router Class Initialized
INFO - 2022-07-14 13:58:41 --> Output Class Initialized
INFO - 2022-07-14 13:58:41 --> Security Class Initialized
DEBUG - 2022-07-14 13:58:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:58:41 --> Input Class Initialized
INFO - 2022-07-14 13:58:41 --> Language Class Initialized
INFO - 2022-07-14 13:58:41 --> Loader Class Initialized
INFO - 2022-07-14 13:58:41 --> Helper loaded: url_helper
INFO - 2022-07-14 13:58:41 --> Helper loaded: text_helper
INFO - 2022-07-14 13:58:41 --> Helper loaded: form_helper
INFO - 2022-07-14 13:58:41 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:58:41 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:58:41 --> Controller Class Initialized
DEBUG - 2022-07-14 13:58:41 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:58:41 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:58:41 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:58:41 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:58:41 --> Model "User_m" initialized
INFO - 2022-07-14 13:58:41 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:58:41 --> Model "Email_m" initialized
INFO - 2022-07-14 13:58:41 --> Final output sent to browser
DEBUG - 2022-07-14 13:58:41 --> Total execution time: 0.0113
INFO - 2022-07-14 13:59:12 --> Config Class Initialized
INFO - 2022-07-14 13:59:12 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:59:12 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:59:12 --> Utf8 Class Initialized
INFO - 2022-07-14 13:59:12 --> URI Class Initialized
INFO - 2022-07-14 13:59:12 --> Router Class Initialized
INFO - 2022-07-14 13:59:12 --> Output Class Initialized
INFO - 2022-07-14 13:59:12 --> Security Class Initialized
DEBUG - 2022-07-14 13:59:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:59:12 --> Input Class Initialized
INFO - 2022-07-14 13:59:12 --> Language Class Initialized
INFO - 2022-07-14 13:59:12 --> Loader Class Initialized
INFO - 2022-07-14 13:59:12 --> Helper loaded: url_helper
INFO - 2022-07-14 13:59:12 --> Helper loaded: text_helper
INFO - 2022-07-14 13:59:12 --> Helper loaded: form_helper
INFO - 2022-07-14 13:59:12 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:59:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:59:12 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:59:12 --> Controller Class Initialized
DEBUG - 2022-07-14 13:59:12 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:59:12 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:59:12 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:59:12 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:59:12 --> Model "User_m" initialized
INFO - 2022-07-14 13:59:12 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:59:12 --> Model "Email_m" initialized
INFO - 2022-07-14 13:59:12 --> Final output sent to browser
DEBUG - 2022-07-14 13:59:12 --> Total execution time: 0.0110
INFO - 2022-07-14 13:59:40 --> Config Class Initialized
INFO - 2022-07-14 13:59:40 --> Hooks Class Initialized
DEBUG - 2022-07-14 13:59:40 --> UTF-8 Support Enabled
INFO - 2022-07-14 13:59:40 --> Utf8 Class Initialized
INFO - 2022-07-14 13:59:40 --> URI Class Initialized
INFO - 2022-07-14 13:59:40 --> Router Class Initialized
INFO - 2022-07-14 13:59:40 --> Output Class Initialized
INFO - 2022-07-14 13:59:40 --> Security Class Initialized
DEBUG - 2022-07-14 13:59:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 13:59:40 --> Input Class Initialized
INFO - 2022-07-14 13:59:40 --> Language Class Initialized
INFO - 2022-07-14 13:59:40 --> Loader Class Initialized
INFO - 2022-07-14 13:59:40 --> Helper loaded: url_helper
INFO - 2022-07-14 13:59:40 --> Helper loaded: text_helper
INFO - 2022-07-14 13:59:40 --> Helper loaded: form_helper
INFO - 2022-07-14 13:59:40 --> Database Driver Class Initialized
DEBUG - 2022-07-14 13:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 13:59:40 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 13:59:40 --> Controller Class Initialized
DEBUG - 2022-07-14 13:59:40 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 13:59:40 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 13:59:40 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 13:59:40 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 13:59:40 --> Model "User_m" initialized
INFO - 2022-07-14 13:59:40 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 13:59:40 --> Model "Email_m" initialized
INFO - 2022-07-14 13:59:40 --> Final output sent to browser
DEBUG - 2022-07-14 13:59:40 --> Total execution time: 0.0332
INFO - 2022-07-14 14:08:19 --> Config Class Initialized
INFO - 2022-07-14 14:08:19 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:08:19 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:08:19 --> Utf8 Class Initialized
INFO - 2022-07-14 14:08:19 --> URI Class Initialized
INFO - 2022-07-14 14:08:19 --> Router Class Initialized
INFO - 2022-07-14 14:08:19 --> Output Class Initialized
INFO - 2022-07-14 14:08:19 --> Security Class Initialized
DEBUG - 2022-07-14 14:08:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:08:19 --> Input Class Initialized
INFO - 2022-07-14 14:08:19 --> Language Class Initialized
INFO - 2022-07-14 14:08:19 --> Loader Class Initialized
INFO - 2022-07-14 14:08:19 --> Helper loaded: url_helper
INFO - 2022-07-14 14:08:19 --> Helper loaded: text_helper
INFO - 2022-07-14 14:08:19 --> Helper loaded: form_helper
INFO - 2022-07-14 14:08:19 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:08:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:08:19 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:08:19 --> Controller Class Initialized
DEBUG - 2022-07-14 14:08:19 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:08:19 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:08:19 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:08:19 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:08:19 --> Model "User_m" initialized
INFO - 2022-07-14 14:08:19 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:08:19 --> Model "Email_m" initialized
INFO - 2022-07-14 14:08:19 --> Final output sent to browser
DEBUG - 2022-07-14 14:08:19 --> Total execution time: 0.0120
INFO - 2022-07-14 14:09:37 --> Config Class Initialized
INFO - 2022-07-14 14:09:37 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:09:37 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:09:37 --> Utf8 Class Initialized
INFO - 2022-07-14 14:09:37 --> URI Class Initialized
INFO - 2022-07-14 14:09:37 --> Router Class Initialized
INFO - 2022-07-14 14:09:37 --> Output Class Initialized
INFO - 2022-07-14 14:09:37 --> Security Class Initialized
DEBUG - 2022-07-14 14:09:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:09:37 --> Input Class Initialized
INFO - 2022-07-14 14:09:37 --> Language Class Initialized
INFO - 2022-07-14 14:09:37 --> Loader Class Initialized
INFO - 2022-07-14 14:09:37 --> Helper loaded: url_helper
INFO - 2022-07-14 14:09:37 --> Helper loaded: text_helper
INFO - 2022-07-14 14:09:37 --> Helper loaded: form_helper
INFO - 2022-07-14 14:09:37 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:09:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:09:37 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:09:37 --> Controller Class Initialized
DEBUG - 2022-07-14 14:09:37 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:09:37 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:09:37 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:09:37 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:09:37 --> Model "User_m" initialized
INFO - 2022-07-14 14:09:37 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:09:37 --> Model "Email_m" initialized
INFO - 2022-07-14 14:09:37 --> Final output sent to browser
DEBUG - 2022-07-14 14:09:37 --> Total execution time: 0.0150
INFO - 2022-07-14 14:10:25 --> Config Class Initialized
INFO - 2022-07-14 14:10:25 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:10:25 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:10:25 --> Utf8 Class Initialized
INFO - 2022-07-14 14:10:25 --> URI Class Initialized
INFO - 2022-07-14 14:10:25 --> Router Class Initialized
INFO - 2022-07-14 14:10:25 --> Output Class Initialized
INFO - 2022-07-14 14:10:25 --> Security Class Initialized
DEBUG - 2022-07-14 14:10:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:10:25 --> Input Class Initialized
INFO - 2022-07-14 14:10:25 --> Language Class Initialized
INFO - 2022-07-14 14:10:25 --> Loader Class Initialized
INFO - 2022-07-14 14:10:25 --> Helper loaded: url_helper
INFO - 2022-07-14 14:10:25 --> Helper loaded: text_helper
INFO - 2022-07-14 14:10:25 --> Helper loaded: form_helper
INFO - 2022-07-14 14:10:25 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:10:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:10:25 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:10:25 --> Controller Class Initialized
DEBUG - 2022-07-14 14:10:25 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:10:25 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:10:25 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:10:25 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:10:25 --> Model "User_m" initialized
INFO - 2022-07-14 14:10:25 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:10:25 --> Model "Email_m" initialized
INFO - 2022-07-14 14:10:25 --> Final output sent to browser
DEBUG - 2022-07-14 14:10:25 --> Total execution time: 0.0112
INFO - 2022-07-14 14:11:08 --> Config Class Initialized
INFO - 2022-07-14 14:11:08 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:11:08 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:11:08 --> Utf8 Class Initialized
INFO - 2022-07-14 14:11:08 --> URI Class Initialized
INFO - 2022-07-14 14:11:08 --> Router Class Initialized
INFO - 2022-07-14 14:11:08 --> Output Class Initialized
INFO - 2022-07-14 14:11:08 --> Security Class Initialized
DEBUG - 2022-07-14 14:11:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:11:08 --> Input Class Initialized
INFO - 2022-07-14 14:11:08 --> Language Class Initialized
INFO - 2022-07-14 14:11:08 --> Loader Class Initialized
INFO - 2022-07-14 14:11:08 --> Helper loaded: url_helper
INFO - 2022-07-14 14:11:08 --> Helper loaded: text_helper
INFO - 2022-07-14 14:11:08 --> Helper loaded: form_helper
INFO - 2022-07-14 14:11:08 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:11:08 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:11:08 --> Controller Class Initialized
DEBUG - 2022-07-14 14:11:08 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:11:08 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:11:08 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:11:08 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:11:08 --> Model "User_m" initialized
INFO - 2022-07-14 14:11:08 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:11:08 --> Model "Email_m" initialized
INFO - 2022-07-14 14:11:08 --> Final output sent to browser
DEBUG - 2022-07-14 14:11:08 --> Total execution time: 0.0125
INFO - 2022-07-14 14:11:12 --> Config Class Initialized
INFO - 2022-07-14 14:11:12 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:11:12 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:11:12 --> Utf8 Class Initialized
INFO - 2022-07-14 14:11:12 --> URI Class Initialized
INFO - 2022-07-14 14:11:12 --> Router Class Initialized
INFO - 2022-07-14 14:11:12 --> Output Class Initialized
INFO - 2022-07-14 14:11:12 --> Security Class Initialized
DEBUG - 2022-07-14 14:11:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:11:12 --> Input Class Initialized
INFO - 2022-07-14 14:11:12 --> Language Class Initialized
INFO - 2022-07-14 14:11:12 --> Loader Class Initialized
INFO - 2022-07-14 14:11:12 --> Helper loaded: url_helper
INFO - 2022-07-14 14:11:12 --> Helper loaded: text_helper
INFO - 2022-07-14 14:11:12 --> Helper loaded: form_helper
INFO - 2022-07-14 14:11:12 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:11:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:11:12 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:11:12 --> Controller Class Initialized
DEBUG - 2022-07-14 14:11:12 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:11:12 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:11:12 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:11:12 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:11:12 --> Model "User_m" initialized
INFO - 2022-07-14 14:11:12 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:11:12 --> Model "Email_m" initialized
INFO - 2022-07-14 14:11:12 --> Final output sent to browser
DEBUG - 2022-07-14 14:11:12 --> Total execution time: 0.0111
INFO - 2022-07-14 14:11:50 --> Config Class Initialized
INFO - 2022-07-14 14:11:50 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:11:50 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:11:50 --> Utf8 Class Initialized
INFO - 2022-07-14 14:11:50 --> URI Class Initialized
INFO - 2022-07-14 14:11:50 --> Router Class Initialized
INFO - 2022-07-14 14:11:50 --> Output Class Initialized
INFO - 2022-07-14 14:11:50 --> Security Class Initialized
DEBUG - 2022-07-14 14:11:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:11:50 --> Input Class Initialized
INFO - 2022-07-14 14:11:50 --> Language Class Initialized
INFO - 2022-07-14 14:11:50 --> Loader Class Initialized
INFO - 2022-07-14 14:11:50 --> Helper loaded: url_helper
INFO - 2022-07-14 14:11:50 --> Helper loaded: text_helper
INFO - 2022-07-14 14:11:50 --> Helper loaded: form_helper
INFO - 2022-07-14 14:11:50 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:11:50 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:11:50 --> Controller Class Initialized
DEBUG - 2022-07-14 14:11:50 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:11:50 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:11:50 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:11:50 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:11:50 --> Model "User_m" initialized
INFO - 2022-07-14 14:11:50 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:11:50 --> Model "Email_m" initialized
INFO - 2022-07-14 14:11:50 --> Final output sent to browser
DEBUG - 2022-07-14 14:11:50 --> Total execution time: 0.0121
INFO - 2022-07-14 14:12:14 --> Config Class Initialized
INFO - 2022-07-14 14:12:14 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:12:14 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:12:14 --> Utf8 Class Initialized
INFO - 2022-07-14 14:12:14 --> URI Class Initialized
INFO - 2022-07-14 14:12:14 --> Router Class Initialized
INFO - 2022-07-14 14:12:14 --> Output Class Initialized
INFO - 2022-07-14 14:12:14 --> Security Class Initialized
DEBUG - 2022-07-14 14:12:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:12:14 --> Input Class Initialized
INFO - 2022-07-14 14:12:14 --> Language Class Initialized
INFO - 2022-07-14 14:12:14 --> Loader Class Initialized
INFO - 2022-07-14 14:12:14 --> Helper loaded: url_helper
INFO - 2022-07-14 14:12:14 --> Helper loaded: text_helper
INFO - 2022-07-14 14:12:14 --> Helper loaded: form_helper
INFO - 2022-07-14 14:12:14 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:12:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:12:14 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:12:14 --> Controller Class Initialized
DEBUG - 2022-07-14 14:12:14 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:12:14 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:12:14 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:12:14 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:12:14 --> Model "User_m" initialized
INFO - 2022-07-14 14:12:14 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:12:14 --> Model "Email_m" initialized
INFO - 2022-07-14 14:12:14 --> Final output sent to browser
DEBUG - 2022-07-14 14:12:14 --> Total execution time: 0.0137
INFO - 2022-07-14 14:12:24 --> Config Class Initialized
INFO - 2022-07-14 14:12:24 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:12:24 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:12:24 --> Utf8 Class Initialized
INFO - 2022-07-14 14:12:24 --> URI Class Initialized
INFO - 2022-07-14 14:12:24 --> Router Class Initialized
INFO - 2022-07-14 14:12:24 --> Output Class Initialized
INFO - 2022-07-14 14:12:24 --> Security Class Initialized
DEBUG - 2022-07-14 14:12:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:12:24 --> Input Class Initialized
INFO - 2022-07-14 14:12:24 --> Language Class Initialized
INFO - 2022-07-14 14:12:24 --> Loader Class Initialized
INFO - 2022-07-14 14:12:24 --> Helper loaded: url_helper
INFO - 2022-07-14 14:12:24 --> Helper loaded: text_helper
INFO - 2022-07-14 14:12:24 --> Helper loaded: form_helper
INFO - 2022-07-14 14:12:24 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:12:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:12:24 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:12:24 --> Controller Class Initialized
DEBUG - 2022-07-14 14:12:24 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:12:24 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:12:24 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:12:24 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:12:24 --> Model "User_m" initialized
INFO - 2022-07-14 14:12:24 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:12:24 --> Model "Email_m" initialized
INFO - 2022-07-14 14:12:24 --> Final output sent to browser
DEBUG - 2022-07-14 14:12:24 --> Total execution time: 0.0110
INFO - 2022-07-14 14:14:11 --> Config Class Initialized
INFO - 2022-07-14 14:14:11 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:14:11 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:14:11 --> Utf8 Class Initialized
INFO - 2022-07-14 14:14:11 --> URI Class Initialized
INFO - 2022-07-14 14:14:11 --> Router Class Initialized
INFO - 2022-07-14 14:14:11 --> Output Class Initialized
INFO - 2022-07-14 14:14:11 --> Security Class Initialized
DEBUG - 2022-07-14 14:14:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:14:11 --> Input Class Initialized
INFO - 2022-07-14 14:14:11 --> Language Class Initialized
INFO - 2022-07-14 14:14:11 --> Loader Class Initialized
INFO - 2022-07-14 14:14:11 --> Helper loaded: url_helper
INFO - 2022-07-14 14:14:11 --> Helper loaded: text_helper
INFO - 2022-07-14 14:14:11 --> Helper loaded: form_helper
INFO - 2022-07-14 14:14:11 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:14:11 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:14:11 --> Controller Class Initialized
DEBUG - 2022-07-14 14:14:11 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:14:11 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:14:11 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:14:11 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:14:11 --> Model "User_m" initialized
INFO - 2022-07-14 14:14:11 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:14:11 --> Model "Email_m" initialized
INFO - 2022-07-14 14:14:11 --> Final output sent to browser
DEBUG - 2022-07-14 14:14:11 --> Total execution time: 0.0111
INFO - 2022-07-14 14:15:26 --> Config Class Initialized
INFO - 2022-07-14 14:15:26 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:15:26 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:15:26 --> Utf8 Class Initialized
INFO - 2022-07-14 14:15:26 --> URI Class Initialized
INFO - 2022-07-14 14:15:26 --> Router Class Initialized
INFO - 2022-07-14 14:15:26 --> Output Class Initialized
INFO - 2022-07-14 14:15:26 --> Security Class Initialized
DEBUG - 2022-07-14 14:15:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:15:26 --> Input Class Initialized
INFO - 2022-07-14 14:15:26 --> Language Class Initialized
INFO - 2022-07-14 14:15:26 --> Loader Class Initialized
INFO - 2022-07-14 14:15:26 --> Helper loaded: url_helper
INFO - 2022-07-14 14:15:26 --> Helper loaded: text_helper
INFO - 2022-07-14 14:15:26 --> Helper loaded: form_helper
INFO - 2022-07-14 14:15:26 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:15:26 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:15:26 --> Controller Class Initialized
DEBUG - 2022-07-14 14:15:26 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:15:27 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:15:27 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:15:27 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:15:27 --> Model "User_m" initialized
INFO - 2022-07-14 14:15:27 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:15:27 --> Model "Email_m" initialized
INFO - 2022-07-14 14:15:27 --> Final output sent to browser
DEBUG - 2022-07-14 14:15:27 --> Total execution time: 0.0119
INFO - 2022-07-14 14:16:01 --> Config Class Initialized
INFO - 2022-07-14 14:16:01 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:16:01 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:16:01 --> Utf8 Class Initialized
INFO - 2022-07-14 14:16:01 --> URI Class Initialized
INFO - 2022-07-14 14:16:01 --> Router Class Initialized
INFO - 2022-07-14 14:16:01 --> Output Class Initialized
INFO - 2022-07-14 14:16:01 --> Security Class Initialized
DEBUG - 2022-07-14 14:16:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:16:01 --> Input Class Initialized
INFO - 2022-07-14 14:16:01 --> Language Class Initialized
INFO - 2022-07-14 14:16:01 --> Loader Class Initialized
INFO - 2022-07-14 14:16:01 --> Helper loaded: url_helper
INFO - 2022-07-14 14:16:01 --> Helper loaded: text_helper
INFO - 2022-07-14 14:16:01 --> Helper loaded: form_helper
INFO - 2022-07-14 14:16:01 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:16:01 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:16:01 --> Controller Class Initialized
DEBUG - 2022-07-14 14:16:01 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:16:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:16:01 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:16:01 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:16:01 --> Model "User_m" initialized
INFO - 2022-07-14 14:16:01 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:16:01 --> Model "Email_m" initialized
INFO - 2022-07-14 14:16:01 --> Final output sent to browser
DEBUG - 2022-07-14 14:16:01 --> Total execution time: 0.0110
INFO - 2022-07-14 14:16:56 --> Config Class Initialized
INFO - 2022-07-14 14:16:56 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:16:56 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:16:56 --> Utf8 Class Initialized
INFO - 2022-07-14 14:16:56 --> URI Class Initialized
INFO - 2022-07-14 14:16:56 --> Router Class Initialized
INFO - 2022-07-14 14:16:56 --> Output Class Initialized
INFO - 2022-07-14 14:16:56 --> Security Class Initialized
DEBUG - 2022-07-14 14:16:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:16:56 --> Input Class Initialized
INFO - 2022-07-14 14:16:56 --> Language Class Initialized
INFO - 2022-07-14 14:16:56 --> Loader Class Initialized
INFO - 2022-07-14 14:16:56 --> Helper loaded: url_helper
INFO - 2022-07-14 14:16:56 --> Helper loaded: text_helper
INFO - 2022-07-14 14:16:56 --> Helper loaded: form_helper
INFO - 2022-07-14 14:16:56 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:16:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:16:56 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:16:56 --> Controller Class Initialized
DEBUG - 2022-07-14 14:16:56 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:16:56 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:16:56 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:16:56 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:16:56 --> Model "User_m" initialized
INFO - 2022-07-14 14:16:56 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:16:56 --> Model "Email_m" initialized
INFO - 2022-07-14 14:16:56 --> Final output sent to browser
DEBUG - 2022-07-14 14:16:56 --> Total execution time: 0.0121
INFO - 2022-07-14 14:19:16 --> Config Class Initialized
INFO - 2022-07-14 14:19:16 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:19:16 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:19:16 --> Utf8 Class Initialized
INFO - 2022-07-14 14:19:16 --> URI Class Initialized
INFO - 2022-07-14 14:19:16 --> Router Class Initialized
INFO - 2022-07-14 14:19:16 --> Output Class Initialized
INFO - 2022-07-14 14:19:16 --> Security Class Initialized
DEBUG - 2022-07-14 14:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:19:16 --> Input Class Initialized
INFO - 2022-07-14 14:19:16 --> Language Class Initialized
INFO - 2022-07-14 14:19:16 --> Loader Class Initialized
INFO - 2022-07-14 14:19:16 --> Helper loaded: url_helper
INFO - 2022-07-14 14:19:16 --> Helper loaded: text_helper
INFO - 2022-07-14 14:19:16 --> Helper loaded: form_helper
INFO - 2022-07-14 14:19:16 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:19:16 --> Controller Class Initialized
DEBUG - 2022-07-14 14:19:16 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:19:16 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:19:16 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:19:16 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:19:16 --> Model "User_m" initialized
INFO - 2022-07-14 14:19:16 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:19:16 --> Model "Email_m" initialized
INFO - 2022-07-14 14:19:16 --> Final output sent to browser
DEBUG - 2022-07-14 14:19:16 --> Total execution time: 0.0110
INFO - 2022-07-14 14:19:31 --> Config Class Initialized
INFO - 2022-07-14 14:19:31 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:19:31 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:19:31 --> Utf8 Class Initialized
INFO - 2022-07-14 14:19:31 --> URI Class Initialized
INFO - 2022-07-14 14:19:31 --> Router Class Initialized
INFO - 2022-07-14 14:19:31 --> Output Class Initialized
INFO - 2022-07-14 14:19:31 --> Security Class Initialized
DEBUG - 2022-07-14 14:19:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:19:31 --> Input Class Initialized
INFO - 2022-07-14 14:19:31 --> Language Class Initialized
INFO - 2022-07-14 14:19:31 --> Loader Class Initialized
INFO - 2022-07-14 14:19:31 --> Helper loaded: url_helper
INFO - 2022-07-14 14:19:31 --> Helper loaded: text_helper
INFO - 2022-07-14 14:19:31 --> Helper loaded: form_helper
INFO - 2022-07-14 14:19:31 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:19:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:19:31 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:19:31 --> Controller Class Initialized
DEBUG - 2022-07-14 14:19:31 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:19:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:19:31 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:19:31 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:19:31 --> Model "User_m" initialized
INFO - 2022-07-14 14:19:31 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:19:31 --> Model "Email_m" initialized
INFO - 2022-07-14 14:19:31 --> Final output sent to browser
DEBUG - 2022-07-14 14:19:31 --> Total execution time: 0.0105
INFO - 2022-07-14 14:20:48 --> Config Class Initialized
INFO - 2022-07-14 14:20:48 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:20:48 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:20:48 --> Utf8 Class Initialized
INFO - 2022-07-14 14:20:48 --> URI Class Initialized
INFO - 2022-07-14 14:20:48 --> Router Class Initialized
INFO - 2022-07-14 14:20:48 --> Output Class Initialized
INFO - 2022-07-14 14:20:48 --> Security Class Initialized
DEBUG - 2022-07-14 14:20:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:20:48 --> Input Class Initialized
INFO - 2022-07-14 14:20:48 --> Language Class Initialized
INFO - 2022-07-14 14:20:48 --> Loader Class Initialized
INFO - 2022-07-14 14:20:48 --> Helper loaded: url_helper
INFO - 2022-07-14 14:20:48 --> Helper loaded: text_helper
INFO - 2022-07-14 14:20:48 --> Helper loaded: form_helper
INFO - 2022-07-14 14:20:48 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:20:48 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:20:48 --> Controller Class Initialized
DEBUG - 2022-07-14 14:20:48 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:20:48 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:20:48 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:20:48 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:20:48 --> Model "User_m" initialized
INFO - 2022-07-14 14:20:48 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:20:48 --> Model "Email_m" initialized
INFO - 2022-07-14 14:20:48 --> Final output sent to browser
DEBUG - 2022-07-14 14:20:48 --> Total execution time: 0.0111
INFO - 2022-07-14 14:22:15 --> Config Class Initialized
INFO - 2022-07-14 14:22:15 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:22:15 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:22:15 --> Utf8 Class Initialized
INFO - 2022-07-14 14:22:15 --> URI Class Initialized
INFO - 2022-07-14 14:22:15 --> Router Class Initialized
INFO - 2022-07-14 14:22:15 --> Output Class Initialized
INFO - 2022-07-14 14:22:15 --> Security Class Initialized
DEBUG - 2022-07-14 14:22:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:22:15 --> Input Class Initialized
INFO - 2022-07-14 14:22:15 --> Language Class Initialized
INFO - 2022-07-14 14:22:15 --> Loader Class Initialized
INFO - 2022-07-14 14:22:15 --> Helper loaded: url_helper
INFO - 2022-07-14 14:22:15 --> Helper loaded: text_helper
INFO - 2022-07-14 14:22:15 --> Helper loaded: form_helper
INFO - 2022-07-14 14:22:15 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:22:15 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:22:15 --> Controller Class Initialized
DEBUG - 2022-07-14 14:22:15 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:22:15 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:22:15 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:22:15 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:22:15 --> Model "User_m" initialized
INFO - 2022-07-14 14:22:15 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:22:15 --> Model "Email_m" initialized
INFO - 2022-07-14 14:22:15 --> Final output sent to browser
DEBUG - 2022-07-14 14:22:15 --> Total execution time: 0.0113
INFO - 2022-07-14 14:24:06 --> Config Class Initialized
INFO - 2022-07-14 14:24:06 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:24:06 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:24:06 --> Utf8 Class Initialized
INFO - 2022-07-14 14:24:06 --> URI Class Initialized
INFO - 2022-07-14 14:24:06 --> Router Class Initialized
INFO - 2022-07-14 14:24:06 --> Output Class Initialized
INFO - 2022-07-14 14:24:06 --> Security Class Initialized
DEBUG - 2022-07-14 14:24:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:24:06 --> Input Class Initialized
INFO - 2022-07-14 14:24:06 --> Language Class Initialized
INFO - 2022-07-14 14:24:06 --> Loader Class Initialized
INFO - 2022-07-14 14:24:06 --> Helper loaded: url_helper
INFO - 2022-07-14 14:24:06 --> Helper loaded: text_helper
INFO - 2022-07-14 14:24:06 --> Helper loaded: form_helper
INFO - 2022-07-14 14:24:06 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:24:06 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:24:06 --> Controller Class Initialized
DEBUG - 2022-07-14 14:24:06 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:24:06 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:24:06 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:24:06 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:24:06 --> Model "User_m" initialized
INFO - 2022-07-14 14:24:06 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:24:06 --> Model "Email_m" initialized
INFO - 2022-07-14 14:24:06 --> Final output sent to browser
DEBUG - 2022-07-14 14:24:06 --> Total execution time: 0.0135
INFO - 2022-07-14 14:24:29 --> Config Class Initialized
INFO - 2022-07-14 14:24:29 --> Hooks Class Initialized
DEBUG - 2022-07-14 14:24:29 --> UTF-8 Support Enabled
INFO - 2022-07-14 14:24:29 --> Utf8 Class Initialized
INFO - 2022-07-14 14:24:29 --> URI Class Initialized
INFO - 2022-07-14 14:24:29 --> Router Class Initialized
INFO - 2022-07-14 14:24:29 --> Output Class Initialized
INFO - 2022-07-14 14:24:29 --> Security Class Initialized
DEBUG - 2022-07-14 14:24:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 14:24:29 --> Input Class Initialized
INFO - 2022-07-14 14:24:29 --> Language Class Initialized
INFO - 2022-07-14 14:24:29 --> Loader Class Initialized
INFO - 2022-07-14 14:24:29 --> Helper loaded: url_helper
INFO - 2022-07-14 14:24:29 --> Helper loaded: text_helper
INFO - 2022-07-14 14:24:29 --> Helper loaded: form_helper
INFO - 2022-07-14 14:24:29 --> Database Driver Class Initialized
DEBUG - 2022-07-14 14:24:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 14:24:29 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 14:24:29 --> Controller Class Initialized
DEBUG - 2022-07-14 14:24:29 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-07-14 14:24:29 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-07-14 14:24:29 --> Helper loaded: inflector_helper
DEBUG - 2022-07-14 14:24:29 --> Session class already loaded. Second attempt ignored.
INFO - 2022-07-14 14:24:29 --> Model "User_m" initialized
INFO - 2022-07-14 14:24:29 --> Model "Lvuelos_m" initialized
INFO - 2022-07-14 14:24:29 --> Model "Email_m" initialized
INFO - 2022-07-14 14:24:29 --> Final output sent to browser
DEBUG - 2022-07-14 14:24:29 --> Total execution time: 0.0106
INFO - 2022-07-14 16:37:03 --> Config Class Initialized
INFO - 2022-07-14 16:37:03 --> Hooks Class Initialized
DEBUG - 2022-07-14 16:37:03 --> UTF-8 Support Enabled
INFO - 2022-07-14 16:37:03 --> Utf8 Class Initialized
INFO - 2022-07-14 16:37:03 --> URI Class Initialized
INFO - 2022-07-14 16:37:03 --> Router Class Initialized
INFO - 2022-07-14 16:37:03 --> Output Class Initialized
INFO - 2022-07-14 16:37:03 --> Security Class Initialized
DEBUG - 2022-07-14 16:37:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 16:37:03 --> Input Class Initialized
INFO - 2022-07-14 16:37:03 --> Language Class Initialized
INFO - 2022-07-14 16:37:03 --> Loader Class Initialized
INFO - 2022-07-14 16:37:03 --> Helper loaded: url_helper
INFO - 2022-07-14 16:37:03 --> Helper loaded: text_helper
INFO - 2022-07-14 16:37:03 --> Helper loaded: form_helper
INFO - 2022-07-14 16:37:03 --> Database Driver Class Initialized
DEBUG - 2022-07-14 16:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 16:37:03 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 16:37:03 --> Controller Class Initialized
INFO - 2022-07-14 16:37:03 --> Model "Email_m" initialized
INFO - 2022-07-14 16:37:03 --> Model "Registro_m" initialized
INFO - 2022-07-14 16:37:03 --> File loaded: /home/librevia/public_html/admin/application/views/registropilotos.php
INFO - 2022-07-14 16:37:03 --> Final output sent to browser
DEBUG - 2022-07-14 16:37:03 --> Total execution time: 0.0161
INFO - 2022-07-14 16:37:05 --> Config Class Initialized
INFO - 2022-07-14 16:37:05 --> Hooks Class Initialized
DEBUG - 2022-07-14 16:37:05 --> UTF-8 Support Enabled
INFO - 2022-07-14 16:37:05 --> Utf8 Class Initialized
INFO - 2022-07-14 16:37:05 --> URI Class Initialized
INFO - 2022-07-14 16:37:05 --> Router Class Initialized
INFO - 2022-07-14 16:37:05 --> Output Class Initialized
INFO - 2022-07-14 16:37:05 --> Security Class Initialized
DEBUG - 2022-07-14 16:37:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 16:37:05 --> Input Class Initialized
INFO - 2022-07-14 16:37:05 --> Language Class Initialized
ERROR - 2022-07-14 16:37:05 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 16:37:05 --> Config Class Initialized
INFO - 2022-07-14 16:37:05 --> Hooks Class Initialized
DEBUG - 2022-07-14 16:37:05 --> UTF-8 Support Enabled
INFO - 2022-07-14 16:37:05 --> Utf8 Class Initialized
INFO - 2022-07-14 16:37:05 --> URI Class Initialized
INFO - 2022-07-14 16:37:05 --> Router Class Initialized
INFO - 2022-07-14 16:37:05 --> Output Class Initialized
INFO - 2022-07-14 16:37:05 --> Security Class Initialized
DEBUG - 2022-07-14 16:37:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 16:37:05 --> Input Class Initialized
INFO - 2022-07-14 16:37:05 --> Language Class Initialized
ERROR - 2022-07-14 16:37:05 --> 404 Page Not Found: RegistroPilotos/manifest.json
INFO - 2022-07-14 16:37:06 --> Config Class Initialized
INFO - 2022-07-14 16:37:06 --> Hooks Class Initialized
DEBUG - 2022-07-14 16:37:06 --> UTF-8 Support Enabled
INFO - 2022-07-14 16:37:06 --> Utf8 Class Initialized
INFO - 2022-07-14 16:37:06 --> URI Class Initialized
INFO - 2022-07-14 16:37:06 --> Router Class Initialized
INFO - 2022-07-14 16:37:06 --> Output Class Initialized
INFO - 2022-07-14 16:37:06 --> Security Class Initialized
DEBUG - 2022-07-14 16:37:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 16:37:06 --> Input Class Initialized
INFO - 2022-07-14 16:37:06 --> Language Class Initialized
ERROR - 2022-07-14 16:37:06 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 16:37:07 --> Config Class Initialized
INFO - 2022-07-14 16:37:07 --> Hooks Class Initialized
DEBUG - 2022-07-14 16:37:07 --> UTF-8 Support Enabled
INFO - 2022-07-14 16:37:07 --> Utf8 Class Initialized
INFO - 2022-07-14 16:37:07 --> URI Class Initialized
INFO - 2022-07-14 16:37:07 --> Router Class Initialized
INFO - 2022-07-14 16:37:07 --> Output Class Initialized
INFO - 2022-07-14 16:37:07 --> Security Class Initialized
DEBUG - 2022-07-14 16:37:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 16:37:07 --> Input Class Initialized
INFO - 2022-07-14 16:37:07 --> Language Class Initialized
INFO - 2022-07-14 16:37:07 --> Loader Class Initialized
INFO - 2022-07-14 16:37:07 --> Helper loaded: url_helper
INFO - 2022-07-14 16:37:07 --> Helper loaded: text_helper
INFO - 2022-07-14 16:37:07 --> Helper loaded: form_helper
INFO - 2022-07-14 16:37:07 --> Database Driver Class Initialized
DEBUG - 2022-07-14 16:37:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-07-14 16:37:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-07-14 16:37:07 --> Controller Class Initialized
INFO - 2022-07-14 16:37:07 --> Model "Email_m" initialized
INFO - 2022-07-14 16:37:07 --> Model "Registro_m" initialized
INFO - 2022-07-14 16:37:07 --> File loaded: /home/librevia/public_html/admin/application/views/registropilotos.php
INFO - 2022-07-14 16:37:07 --> Final output sent to browser
DEBUG - 2022-07-14 16:37:07 --> Total execution time: 0.0100
INFO - 2022-07-14 17:45:40 --> Config Class Initialized
INFO - 2022-07-14 17:45:40 --> Hooks Class Initialized
DEBUG - 2022-07-14 17:45:40 --> UTF-8 Support Enabled
INFO - 2022-07-14 17:45:40 --> Utf8 Class Initialized
INFO - 2022-07-14 17:45:40 --> URI Class Initialized
INFO - 2022-07-14 17:45:40 --> Router Class Initialized
INFO - 2022-07-14 17:45:40 --> Output Class Initialized
INFO - 2022-07-14 17:45:40 --> Security Class Initialized
DEBUG - 2022-07-14 17:45:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 17:45:40 --> Input Class Initialized
INFO - 2022-07-14 17:45:40 --> Language Class Initialized
ERROR - 2022-07-14 17:45:40 --> 404 Page Not Found: Php/index.php
INFO - 2022-07-14 19:01:33 --> Config Class Initialized
INFO - 2022-07-14 19:01:33 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:33 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:33 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:33 --> URI Class Initialized
INFO - 2022-07-14 19:01:33 --> Router Class Initialized
INFO - 2022-07-14 19:01:33 --> Output Class Initialized
INFO - 2022-07-14 19:01:33 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:33 --> Input Class Initialized
INFO - 2022-07-14 19:01:33 --> Language Class Initialized
ERROR - 2022-07-14 19:01:33 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:01:33 --> Config Class Initialized
INFO - 2022-07-14 19:01:33 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:33 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:33 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:33 --> URI Class Initialized
INFO - 2022-07-14 19:01:33 --> Router Class Initialized
INFO - 2022-07-14 19:01:33 --> Output Class Initialized
INFO - 2022-07-14 19:01:33 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:33 --> Input Class Initialized
INFO - 2022-07-14 19:01:33 --> Language Class Initialized
ERROR - 2022-07-14 19:01:33 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:01:37 --> Config Class Initialized
INFO - 2022-07-14 19:01:37 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:37 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:37 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:37 --> URI Class Initialized
INFO - 2022-07-14 19:01:37 --> Router Class Initialized
INFO - 2022-07-14 19:01:37 --> Output Class Initialized
INFO - 2022-07-14 19:01:37 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:37 --> Input Class Initialized
INFO - 2022-07-14 19:01:37 --> Language Class Initialized
ERROR - 2022-07-14 19:01:37 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:01:37 --> Config Class Initialized
INFO - 2022-07-14 19:01:37 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:37 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:37 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:37 --> URI Class Initialized
INFO - 2022-07-14 19:01:37 --> Router Class Initialized
INFO - 2022-07-14 19:01:37 --> Output Class Initialized
INFO - 2022-07-14 19:01:37 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:37 --> Input Class Initialized
INFO - 2022-07-14 19:01:37 --> Language Class Initialized
ERROR - 2022-07-14 19:01:37 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:01:40 --> Config Class Initialized
INFO - 2022-07-14 19:01:40 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:40 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:40 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:40 --> URI Class Initialized
INFO - 2022-07-14 19:01:40 --> Router Class Initialized
INFO - 2022-07-14 19:01:40 --> Output Class Initialized
INFO - 2022-07-14 19:01:40 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:40 --> Input Class Initialized
INFO - 2022-07-14 19:01:40 --> Language Class Initialized
ERROR - 2022-07-14 19:01:40 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:01:40 --> Config Class Initialized
INFO - 2022-07-14 19:01:40 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:40 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:40 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:40 --> URI Class Initialized
INFO - 2022-07-14 19:01:40 --> Router Class Initialized
INFO - 2022-07-14 19:01:40 --> Output Class Initialized
INFO - 2022-07-14 19:01:40 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:40 --> Input Class Initialized
INFO - 2022-07-14 19:01:40 --> Language Class Initialized
ERROR - 2022-07-14 19:01:40 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:01:40 --> Config Class Initialized
INFO - 2022-07-14 19:01:40 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:40 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:40 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:40 --> URI Class Initialized
INFO - 2022-07-14 19:01:40 --> Router Class Initialized
INFO - 2022-07-14 19:01:40 --> Output Class Initialized
INFO - 2022-07-14 19:01:40 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:40 --> Input Class Initialized
INFO - 2022-07-14 19:01:40 --> Language Class Initialized
ERROR - 2022-07-14 19:01:40 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:01:41 --> Config Class Initialized
INFO - 2022-07-14 19:01:41 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:01:41 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:01:41 --> Utf8 Class Initialized
INFO - 2022-07-14 19:01:41 --> URI Class Initialized
INFO - 2022-07-14 19:01:41 --> Router Class Initialized
INFO - 2022-07-14 19:01:41 --> Output Class Initialized
INFO - 2022-07-14 19:01:41 --> Security Class Initialized
DEBUG - 2022-07-14 19:01:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:01:41 --> Input Class Initialized
INFO - 2022-07-14 19:01:41 --> Language Class Initialized
ERROR - 2022-07-14 19:01:41 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:02:16 --> Config Class Initialized
INFO - 2022-07-14 19:02:16 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:02:16 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:02:16 --> Utf8 Class Initialized
INFO - 2022-07-14 19:02:16 --> URI Class Initialized
INFO - 2022-07-14 19:02:16 --> Router Class Initialized
INFO - 2022-07-14 19:02:16 --> Output Class Initialized
INFO - 2022-07-14 19:02:16 --> Security Class Initialized
DEBUG - 2022-07-14 19:02:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:02:16 --> Input Class Initialized
INFO - 2022-07-14 19:02:16 --> Language Class Initialized
ERROR - 2022-07-14 19:02:16 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:02:16 --> Config Class Initialized
INFO - 2022-07-14 19:02:16 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:02:16 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:02:16 --> Utf8 Class Initialized
INFO - 2022-07-14 19:02:16 --> URI Class Initialized
INFO - 2022-07-14 19:02:16 --> Router Class Initialized
INFO - 2022-07-14 19:02:16 --> Output Class Initialized
INFO - 2022-07-14 19:02:16 --> Security Class Initialized
DEBUG - 2022-07-14 19:02:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:02:16 --> Input Class Initialized
INFO - 2022-07-14 19:02:16 --> Language Class Initialized
ERROR - 2022-07-14 19:02:16 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:02:18 --> Config Class Initialized
INFO - 2022-07-14 19:02:18 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:02:18 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:02:18 --> Utf8 Class Initialized
INFO - 2022-07-14 19:02:18 --> URI Class Initialized
INFO - 2022-07-14 19:02:18 --> Router Class Initialized
INFO - 2022-07-14 19:02:18 --> Output Class Initialized
INFO - 2022-07-14 19:02:18 --> Security Class Initialized
DEBUG - 2022-07-14 19:02:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:02:18 --> Input Class Initialized
INFO - 2022-07-14 19:02:18 --> Language Class Initialized
ERROR - 2022-07-14 19:02:18 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:02:18 --> Config Class Initialized
INFO - 2022-07-14 19:02:18 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:02:18 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:02:18 --> Utf8 Class Initialized
INFO - 2022-07-14 19:02:18 --> URI Class Initialized
INFO - 2022-07-14 19:02:18 --> Router Class Initialized
INFO - 2022-07-14 19:02:18 --> Output Class Initialized
INFO - 2022-07-14 19:02:18 --> Security Class Initialized
DEBUG - 2022-07-14 19:02:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:02:18 --> Input Class Initialized
INFO - 2022-07-14 19:02:18 --> Language Class Initialized
ERROR - 2022-07-14 19:02:18 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:35:48 --> Config Class Initialized
INFO - 2022-07-14 19:35:48 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:35:48 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:35:48 --> Utf8 Class Initialized
INFO - 2022-07-14 19:35:48 --> URI Class Initialized
INFO - 2022-07-14 19:35:48 --> Router Class Initialized
INFO - 2022-07-14 19:35:48 --> Output Class Initialized
INFO - 2022-07-14 19:35:48 --> Security Class Initialized
DEBUG - 2022-07-14 19:35:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:35:48 --> Input Class Initialized
INFO - 2022-07-14 19:35:48 --> Language Class Initialized
ERROR - 2022-07-14 19:35:48 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:35:48 --> Config Class Initialized
INFO - 2022-07-14 19:35:48 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:35:48 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:35:48 --> Utf8 Class Initialized
INFO - 2022-07-14 19:35:48 --> URI Class Initialized
INFO - 2022-07-14 19:35:48 --> Router Class Initialized
INFO - 2022-07-14 19:35:48 --> Output Class Initialized
INFO - 2022-07-14 19:35:48 --> Security Class Initialized
DEBUG - 2022-07-14 19:35:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:35:48 --> Input Class Initialized
INFO - 2022-07-14 19:35:48 --> Language Class Initialized
ERROR - 2022-07-14 19:35:48 --> 404 Page Not Found: Images/favicon.ico
INFO - 2022-07-14 19:36:54 --> Config Class Initialized
INFO - 2022-07-14 19:36:54 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:36:54 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:36:54 --> Utf8 Class Initialized
INFO - 2022-07-14 19:36:54 --> URI Class Initialized
INFO - 2022-07-14 19:36:54 --> Router Class Initialized
INFO - 2022-07-14 19:36:54 --> Output Class Initialized
INFO - 2022-07-14 19:36:54 --> Security Class Initialized
DEBUG - 2022-07-14 19:36:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:36:54 --> Input Class Initialized
INFO - 2022-07-14 19:36:54 --> Language Class Initialized
ERROR - 2022-07-14 19:36:54 --> 404 Page Not Found: Images/favicon.png
INFO - 2022-07-14 19:36:54 --> Config Class Initialized
INFO - 2022-07-14 19:36:54 --> Hooks Class Initialized
DEBUG - 2022-07-14 19:36:54 --> UTF-8 Support Enabled
INFO - 2022-07-14 19:36:54 --> Utf8 Class Initialized
INFO - 2022-07-14 19:36:54 --> URI Class Initialized
INFO - 2022-07-14 19:36:54 --> Router Class Initialized
INFO - 2022-07-14 19:36:54 --> Output Class Initialized
INFO - 2022-07-14 19:36:54 --> Security Class Initialized
DEBUG - 2022-07-14 19:36:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-07-14 19:36:54 --> Input Class Initialized
INFO - 2022-07-14 19:36:54 --> Language Class Initialized
ERROR - 2022-07-14 19:36:54 --> 404 Page Not Found: Images/favicon.ico
