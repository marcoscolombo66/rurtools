<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2022-05-06 09:44:43 --> Config Class Initialized
INFO - 2022-05-06 09:44:43 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:44:43 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:44:43 --> Utf8 Class Initialized
INFO - 2022-05-06 09:44:43 --> URI Class Initialized
INFO - 2022-05-06 09:44:43 --> Router Class Initialized
INFO - 2022-05-06 09:44:43 --> Output Class Initialized
INFO - 2022-05-06 09:44:43 --> Security Class Initialized
DEBUG - 2022-05-06 09:44:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:44:43 --> Input Class Initialized
INFO - 2022-05-06 09:44:43 --> Language Class Initialized
INFO - 2022-05-06 09:44:43 --> Loader Class Initialized
INFO - 2022-05-06 09:44:43 --> Helper loaded: url_helper
INFO - 2022-05-06 09:44:43 --> Helper loaded: text_helper
INFO - 2022-05-06 09:44:43 --> Helper loaded: form_helper
INFO - 2022-05-06 09:44:43 --> Database Driver Class Initialized
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 282
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> session_set_cookie_params(): Cannot change session cookie parameters when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 294
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 304
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 314
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 315
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 316
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 317
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/librevia/public_html/admin/system/libraries/Session/Session.php 375
DEBUG - 2022-05-06 09:44:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> session_set_save_handler(): Cannot change save handler when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 110
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> session_start(): Cannot start session when headers already sent /home/librevia/public_html/admin/system/libraries/Session/Session.php 143
INFO - 2022-05-06 09:44:43 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:44:43 --> Controller Class Initialized
DEBUG - 2022-05-06 09:44:43 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:44:43 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:44:43 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:44:43 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:44:43 --> Model "User_m" initialized
INFO - 2022-05-06 09:44:43 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:44:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND PEDIDOS.ESTADOS_PEDIDOS=''' at line 5 - Invalid query: SELECT PEDIDOS.idPEDIDOS, PEDIDOS.TIPO_PRODUCTO, PEDIDOS.ANCHO, PEDIDOS.LARGO, PEDIDOS.PROFUNDIDAD, PEDIDOS.KILOS, PEDIDOS.idNEGOCIOS, PEDIDOS.DESTINO,
 PEDIDOS.ESTADOS_PEDIDOS, PEDIDOS.idCONDUCTOR, PEDIDOS.COSTO, NEGOCIOS.NOMBRE_FANTASIA,NEGOCIOS.UBICACION,NEGOCIOS.EMAIL
FROM PEDIDOS
INNER JOIN NEGOCIOS ON PEDIDOS.idNEGOCIOS = NEGOCIOS.idNEGOCIOS
WHERE PEDIDOS.idNEGOCIOS= AND PEDIDOS.ESTADOS_PEDIDOS=''
INFO - 2022-05-06 09:44:43 --> Language file loaded: language/english/db_lang.php
ERROR - 2022-05-06 09:44:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/librevia/public_html/admin/application/libraries/RestController.php:5) /home/librevia/public_html/admin/system/core/Common.php 564
INFO - 2022-05-06 09:45:49 --> Config Class Initialized
INFO - 2022-05-06 09:45:49 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:45:49 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:45:49 --> Utf8 Class Initialized
INFO - 2022-05-06 09:45:49 --> URI Class Initialized
INFO - 2022-05-06 09:45:49 --> Router Class Initialized
INFO - 2022-05-06 09:45:49 --> Output Class Initialized
INFO - 2022-05-06 09:45:49 --> Security Class Initialized
DEBUG - 2022-05-06 09:45:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:45:49 --> Input Class Initialized
INFO - 2022-05-06 09:45:49 --> Language Class Initialized
INFO - 2022-05-06 09:45:49 --> Loader Class Initialized
INFO - 2022-05-06 09:45:49 --> Helper loaded: url_helper
INFO - 2022-05-06 09:45:49 --> Helper loaded: text_helper
INFO - 2022-05-06 09:45:49 --> Helper loaded: form_helper
INFO - 2022-05-06 09:45:49 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:45:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:45:49 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:45:49 --> Controller Class Initialized
DEBUG - 2022-05-06 09:45:49 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:45:49 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:45:49 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:45:49 --> Model "User_m" initialized
INFO - 2022-05-06 09:45:49 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:45:49 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api2' does not have a method 'index_get' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:45:49 --> Final output sent to browser
DEBUG - 2022-05-06 09:45:49 --> Total execution time: 0.0163
INFO - 2022-05-06 09:45:52 --> Config Class Initialized
INFO - 2022-05-06 09:45:52 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:45:52 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:45:52 --> Utf8 Class Initialized
INFO - 2022-05-06 09:45:52 --> URI Class Initialized
INFO - 2022-05-06 09:45:52 --> Router Class Initialized
INFO - 2022-05-06 09:45:52 --> Output Class Initialized
INFO - 2022-05-06 09:45:52 --> Security Class Initialized
DEBUG - 2022-05-06 09:45:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:45:52 --> Input Class Initialized
INFO - 2022-05-06 09:45:52 --> Language Class Initialized
INFO - 2022-05-06 09:45:52 --> Loader Class Initialized
INFO - 2022-05-06 09:45:52 --> Helper loaded: url_helper
INFO - 2022-05-06 09:45:52 --> Helper loaded: text_helper
INFO - 2022-05-06 09:45:52 --> Helper loaded: form_helper
INFO - 2022-05-06 09:45:52 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:45:52 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:45:52 --> Controller Class Initialized
DEBUG - 2022-05-06 09:45:52 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:45:52 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:45:52 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:45:52 --> Model "User_m" initialized
INFO - 2022-05-06 09:45:52 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:45:52 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api2' does not have a method 'index_get' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:45:52 --> Final output sent to browser
DEBUG - 2022-05-06 09:45:52 --> Total execution time: 0.0117
INFO - 2022-05-06 09:47:42 --> Config Class Initialized
INFO - 2022-05-06 09:47:42 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:47:42 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:47:42 --> Utf8 Class Initialized
INFO - 2022-05-06 09:47:42 --> URI Class Initialized
INFO - 2022-05-06 09:47:42 --> Router Class Initialized
INFO - 2022-05-06 09:47:42 --> Output Class Initialized
INFO - 2022-05-06 09:47:42 --> Security Class Initialized
DEBUG - 2022-05-06 09:47:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:47:42 --> Input Class Initialized
INFO - 2022-05-06 09:47:42 --> Language Class Initialized
ERROR - 2022-05-06 09:47:42 --> 404 Page Not Found: Api3/Obtpedidos2
INFO - 2022-05-06 09:47:51 --> Config Class Initialized
INFO - 2022-05-06 09:47:51 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:47:51 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:47:51 --> Utf8 Class Initialized
INFO - 2022-05-06 09:47:51 --> URI Class Initialized
INFO - 2022-05-06 09:47:51 --> Router Class Initialized
INFO - 2022-05-06 09:47:51 --> Output Class Initialized
INFO - 2022-05-06 09:47:51 --> Security Class Initialized
DEBUG - 2022-05-06 09:47:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:47:51 --> Input Class Initialized
INFO - 2022-05-06 09:47:51 --> Language Class Initialized
INFO - 2022-05-06 09:47:51 --> Loader Class Initialized
INFO - 2022-05-06 09:47:51 --> Helper loaded: url_helper
INFO - 2022-05-06 09:47:51 --> Helper loaded: text_helper
INFO - 2022-05-06 09:47:51 --> Helper loaded: form_helper
INFO - 2022-05-06 09:47:51 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:47:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:47:51 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:47:51 --> Controller Class Initialized
DEBUG - 2022-05-06 09:47:51 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:47:51 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:47:51 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:47:51 --> Model "User_m" initialized
INFO - 2022-05-06 09:47:51 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:47:51 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api2' does not have a method 'index_get' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:47:51 --> Final output sent to browser
DEBUG - 2022-05-06 09:47:51 --> Total execution time: 0.0116
INFO - 2022-05-06 09:47:56 --> Config Class Initialized
INFO - 2022-05-06 09:47:56 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:47:56 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:47:56 --> Utf8 Class Initialized
INFO - 2022-05-06 09:47:56 --> URI Class Initialized
INFO - 2022-05-06 09:47:56 --> Router Class Initialized
INFO - 2022-05-06 09:47:56 --> Output Class Initialized
INFO - 2022-05-06 09:47:56 --> Security Class Initialized
DEBUG - 2022-05-06 09:47:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:47:56 --> Input Class Initialized
INFO - 2022-05-06 09:47:56 --> Language Class Initialized
INFO - 2022-05-06 09:47:56 --> Loader Class Initialized
INFO - 2022-05-06 09:47:56 --> Helper loaded: url_helper
INFO - 2022-05-06 09:47:56 --> Helper loaded: text_helper
INFO - 2022-05-06 09:47:56 --> Helper loaded: form_helper
INFO - 2022-05-06 09:47:56 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:47:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:47:56 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:47:56 --> Controller Class Initialized
DEBUG - 2022-05-06 09:47:56 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:47:56 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:47:56 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:47:56 --> Model "User_m" initialized
INFO - 2022-05-06 09:47:56 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:47:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api2' does not have a method 'index_get' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:47:56 --> Final output sent to browser
DEBUG - 2022-05-06 09:47:56 --> Total execution time: 0.0108
INFO - 2022-05-06 09:47:59 --> Config Class Initialized
INFO - 2022-05-06 09:47:59 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:47:59 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:47:59 --> Utf8 Class Initialized
INFO - 2022-05-06 09:47:59 --> URI Class Initialized
INFO - 2022-05-06 09:47:59 --> Router Class Initialized
INFO - 2022-05-06 09:47:59 --> Output Class Initialized
INFO - 2022-05-06 09:47:59 --> Security Class Initialized
DEBUG - 2022-05-06 09:47:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:47:59 --> Input Class Initialized
INFO - 2022-05-06 09:47:59 --> Language Class Initialized
ERROR - 2022-05-06 09:47:59 --> 404 Page Not Found: Api3/Obtpedidos2
INFO - 2022-05-06 09:53:02 --> Config Class Initialized
INFO - 2022-05-06 09:53:02 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:53:02 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:53:02 --> Utf8 Class Initialized
INFO - 2022-05-06 09:53:02 --> URI Class Initialized
INFO - 2022-05-06 09:53:02 --> Router Class Initialized
INFO - 2022-05-06 09:53:02 --> Output Class Initialized
INFO - 2022-05-06 09:53:02 --> Security Class Initialized
DEBUG - 2022-05-06 09:53:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:53:02 --> Input Class Initialized
INFO - 2022-05-06 09:53:02 --> Language Class Initialized
INFO - 2022-05-06 09:53:02 --> Loader Class Initialized
INFO - 2022-05-06 09:53:02 --> Helper loaded: url_helper
INFO - 2022-05-06 09:53:02 --> Helper loaded: text_helper
INFO - 2022-05-06 09:53:02 --> Helper loaded: form_helper
INFO - 2022-05-06 09:53:02 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:53:02 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:53:02 --> Controller Class Initialized
DEBUG - 2022-05-06 09:53:02 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:53:02 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:53:02 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:53:02 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:53:02 --> Model "User_m" initialized
INFO - 2022-05-06 09:53:02 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:53:02 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:53:02 --> Final output sent to browser
DEBUG - 2022-05-06 09:53:02 --> Total execution time: 0.0138
INFO - 2022-05-06 09:53:16 --> Config Class Initialized
INFO - 2022-05-06 09:53:16 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:53:16 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:53:16 --> Utf8 Class Initialized
INFO - 2022-05-06 09:53:16 --> URI Class Initialized
INFO - 2022-05-06 09:53:16 --> Router Class Initialized
INFO - 2022-05-06 09:53:16 --> Output Class Initialized
INFO - 2022-05-06 09:53:16 --> Security Class Initialized
DEBUG - 2022-05-06 09:53:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:53:16 --> Input Class Initialized
INFO - 2022-05-06 09:53:16 --> Language Class Initialized
INFO - 2022-05-06 09:53:16 --> Loader Class Initialized
INFO - 2022-05-06 09:53:16 --> Helper loaded: url_helper
INFO - 2022-05-06 09:53:16 --> Helper loaded: text_helper
INFO - 2022-05-06 09:53:16 --> Helper loaded: form_helper
INFO - 2022-05-06 09:53:16 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:53:16 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:53:16 --> Controller Class Initialized
DEBUG - 2022-05-06 09:53:16 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:53:16 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:53:16 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:53:16 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:53:16 --> Model "User_m" initialized
INFO - 2022-05-06 09:53:16 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:53:16 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:53:16 --> Final output sent to browser
DEBUG - 2022-05-06 09:53:16 --> Total execution time: 0.0122
INFO - 2022-05-06 09:53:41 --> Config Class Initialized
INFO - 2022-05-06 09:53:41 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:53:41 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:53:41 --> Utf8 Class Initialized
INFO - 2022-05-06 09:53:41 --> URI Class Initialized
INFO - 2022-05-06 09:53:41 --> Router Class Initialized
INFO - 2022-05-06 09:53:41 --> Output Class Initialized
INFO - 2022-05-06 09:53:41 --> Security Class Initialized
DEBUG - 2022-05-06 09:53:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:53:41 --> Input Class Initialized
INFO - 2022-05-06 09:53:41 --> Language Class Initialized
INFO - 2022-05-06 09:53:41 --> Loader Class Initialized
INFO - 2022-05-06 09:53:41 --> Helper loaded: url_helper
INFO - 2022-05-06 09:53:41 --> Helper loaded: text_helper
INFO - 2022-05-06 09:53:41 --> Helper loaded: form_helper
INFO - 2022-05-06 09:53:41 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:53:41 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:53:41 --> Controller Class Initialized
DEBUG - 2022-05-06 09:53:41 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:53:41 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:53:41 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:53:41 --> Model "User_m" initialized
INFO - 2022-05-06 09:53:41 --> Model "Email_m" initialized
INFO - 2022-05-06 09:53:41 --> Helper loaded: inflector_helper
INFO - 2022-05-06 09:53:41 --> Final output sent to browser
DEBUG - 2022-05-06 09:53:41 --> Total execution time: 0.0113
INFO - 2022-05-06 09:53:53 --> Config Class Initialized
INFO - 2022-05-06 09:53:53 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:53:53 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:53:53 --> Utf8 Class Initialized
INFO - 2022-05-06 09:53:53 --> URI Class Initialized
INFO - 2022-05-06 09:53:53 --> Router Class Initialized
INFO - 2022-05-06 09:53:53 --> Output Class Initialized
INFO - 2022-05-06 09:53:53 --> Security Class Initialized
DEBUG - 2022-05-06 09:53:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:53:53 --> Input Class Initialized
INFO - 2022-05-06 09:53:53 --> Language Class Initialized
INFO - 2022-05-06 09:53:53 --> Loader Class Initialized
INFO - 2022-05-06 09:53:53 --> Helper loaded: url_helper
INFO - 2022-05-06 09:53:53 --> Helper loaded: text_helper
INFO - 2022-05-06 09:53:53 --> Helper loaded: form_helper
INFO - 2022-05-06 09:53:53 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:53:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:53:53 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:53:53 --> Controller Class Initialized
DEBUG - 2022-05-06 09:53:53 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:53:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:53:53 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:53:53 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:53:53 --> Model "User_m" initialized
INFO - 2022-05-06 09:53:53 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:53:53 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:53:53 --> Final output sent to browser
DEBUG - 2022-05-06 09:53:53 --> Total execution time: 0.0122
INFO - 2022-05-06 09:54:01 --> Config Class Initialized
INFO - 2022-05-06 09:54:01 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:54:01 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:54:01 --> Utf8 Class Initialized
INFO - 2022-05-06 09:54:01 --> URI Class Initialized
INFO - 2022-05-06 09:54:01 --> Router Class Initialized
INFO - 2022-05-06 09:54:01 --> Output Class Initialized
INFO - 2022-05-06 09:54:01 --> Security Class Initialized
DEBUG - 2022-05-06 09:54:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:54:01 --> Input Class Initialized
INFO - 2022-05-06 09:54:01 --> Language Class Initialized
INFO - 2022-05-06 09:54:01 --> Loader Class Initialized
INFO - 2022-05-06 09:54:01 --> Helper loaded: url_helper
INFO - 2022-05-06 09:54:01 --> Helper loaded: text_helper
INFO - 2022-05-06 09:54:01 --> Helper loaded: form_helper
INFO - 2022-05-06 09:54:01 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:54:01 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:54:01 --> Controller Class Initialized
DEBUG - 2022-05-06 09:54:01 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:54:01 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:54:01 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:54:01 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:54:01 --> Model "User_m" initialized
INFO - 2022-05-06 09:54:01 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:54:01 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:54:01 --> Final output sent to browser
DEBUG - 2022-05-06 09:54:01 --> Total execution time: 0.0131
INFO - 2022-05-06 09:55:07 --> Config Class Initialized
INFO - 2022-05-06 09:55:07 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:55:07 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:55:07 --> Utf8 Class Initialized
INFO - 2022-05-06 09:55:07 --> URI Class Initialized
INFO - 2022-05-06 09:55:07 --> Router Class Initialized
INFO - 2022-05-06 09:55:07 --> Output Class Initialized
INFO - 2022-05-06 09:55:07 --> Security Class Initialized
DEBUG - 2022-05-06 09:55:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:55:07 --> Input Class Initialized
INFO - 2022-05-06 09:55:07 --> Language Class Initialized
INFO - 2022-05-06 09:55:07 --> Loader Class Initialized
INFO - 2022-05-06 09:55:07 --> Helper loaded: url_helper
INFO - 2022-05-06 09:55:07 --> Helper loaded: text_helper
INFO - 2022-05-06 09:55:07 --> Helper loaded: form_helper
INFO - 2022-05-06 09:55:07 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:55:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:55:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:55:07 --> Controller Class Initialized
DEBUG - 2022-05-06 09:55:07 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:55:07 --> Language file loaded: language/english/rest_controller_lang.php
DEBUG - 2022-05-06 09:55:07 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:55:07 --> Model "User_m" initialized
INFO - 2022-05-06 09:55:07 --> Model "Email_m" initialized
INFO - 2022-05-06 09:55:07 --> Helper loaded: inflector_helper
INFO - 2022-05-06 09:55:07 --> Final output sent to browser
DEBUG - 2022-05-06 09:55:07 --> Total execution time: 0.0109
INFO - 2022-05-06 09:55:15 --> Config Class Initialized
INFO - 2022-05-06 09:55:15 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:55:15 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:55:15 --> Utf8 Class Initialized
INFO - 2022-05-06 09:55:15 --> URI Class Initialized
INFO - 2022-05-06 09:55:15 --> Router Class Initialized
INFO - 2022-05-06 09:55:15 --> Output Class Initialized
INFO - 2022-05-06 09:55:15 --> Security Class Initialized
DEBUG - 2022-05-06 09:55:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:55:15 --> Input Class Initialized
INFO - 2022-05-06 09:55:15 --> Language Class Initialized
INFO - 2022-05-06 09:55:15 --> Loader Class Initialized
INFO - 2022-05-06 09:55:15 --> Helper loaded: url_helper
INFO - 2022-05-06 09:55:15 --> Helper loaded: text_helper
INFO - 2022-05-06 09:55:15 --> Helper loaded: form_helper
INFO - 2022-05-06 09:55:15 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:55:15 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:55:15 --> Controller Class Initialized
DEBUG - 2022-05-06 09:55:15 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:55:15 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:55:15 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:55:15 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:55:15 --> Model "User_m" initialized
INFO - 2022-05-06 09:55:15 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:55:15 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:55:15 --> Final output sent to browser
DEBUG - 2022-05-06 09:55:15 --> Total execution time: 0.0137
INFO - 2022-05-06 09:55:23 --> Config Class Initialized
INFO - 2022-05-06 09:55:23 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:55:23 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:55:23 --> Utf8 Class Initialized
INFO - 2022-05-06 09:55:23 --> URI Class Initialized
INFO - 2022-05-06 09:55:23 --> Router Class Initialized
INFO - 2022-05-06 09:55:23 --> Output Class Initialized
INFO - 2022-05-06 09:55:23 --> Security Class Initialized
DEBUG - 2022-05-06 09:55:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:55:23 --> Input Class Initialized
INFO - 2022-05-06 09:55:23 --> Language Class Initialized
INFO - 2022-05-06 09:55:23 --> Loader Class Initialized
INFO - 2022-05-06 09:55:23 --> Helper loaded: url_helper
INFO - 2022-05-06 09:55:23 --> Helper loaded: text_helper
INFO - 2022-05-06 09:55:23 --> Helper loaded: form_helper
INFO - 2022-05-06 09:55:23 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:55:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:55:23 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:55:23 --> Controller Class Initialized
DEBUG - 2022-05-06 09:55:23 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:55:23 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:55:23 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:55:23 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:55:23 --> Model "User_m" initialized
INFO - 2022-05-06 09:55:23 --> Model "Email_m" initialized
ERROR - 2022-05-06 09:55:23 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'Api3' does not have a method 'index_post' /home/librevia/public_html/admin/application/libraries/RestController.php 584
INFO - 2022-05-06 09:55:23 --> Final output sent to browser
DEBUG - 2022-05-06 09:55:23 --> Total execution time: 0.0111
INFO - 2022-05-06 09:57:07 --> Config Class Initialized
INFO - 2022-05-06 09:57:07 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:57:07 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:57:07 --> Utf8 Class Initialized
INFO - 2022-05-06 09:57:07 --> URI Class Initialized
INFO - 2022-05-06 09:57:07 --> Router Class Initialized
INFO - 2022-05-06 09:57:07 --> Output Class Initialized
INFO - 2022-05-06 09:57:07 --> Security Class Initialized
DEBUG - 2022-05-06 09:57:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:57:07 --> Input Class Initialized
INFO - 2022-05-06 09:57:07 --> Language Class Initialized
INFO - 2022-05-06 09:57:07 --> Loader Class Initialized
INFO - 2022-05-06 09:57:07 --> Helper loaded: url_helper
INFO - 2022-05-06 09:57:07 --> Helper loaded: text_helper
INFO - 2022-05-06 09:57:07 --> Helper loaded: form_helper
INFO - 2022-05-06 09:57:07 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:57:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:57:07 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:57:07 --> Controller Class Initialized
DEBUG - 2022-05-06 09:57:07 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:57:07 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:57:07 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:57:07 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:57:07 --> Model "User_m" initialized
INFO - 2022-05-06 09:57:07 --> Model "Email_m" initialized
INFO - 2022-05-06 09:57:07 --> Final output sent to browser
DEBUG - 2022-05-06 09:57:07 --> Total execution time: 0.0125
INFO - 2022-05-06 09:57:52 --> Config Class Initialized
INFO - 2022-05-06 09:57:52 --> Hooks Class Initialized
DEBUG - 2022-05-06 09:57:52 --> UTF-8 Support Enabled
INFO - 2022-05-06 09:57:52 --> Utf8 Class Initialized
INFO - 2022-05-06 09:57:52 --> URI Class Initialized
INFO - 2022-05-06 09:57:52 --> Router Class Initialized
INFO - 2022-05-06 09:57:52 --> Output Class Initialized
INFO - 2022-05-06 09:57:52 --> Security Class Initialized
DEBUG - 2022-05-06 09:57:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 09:57:52 --> Input Class Initialized
INFO - 2022-05-06 09:57:52 --> Language Class Initialized
INFO - 2022-05-06 09:57:52 --> Loader Class Initialized
INFO - 2022-05-06 09:57:52 --> Helper loaded: url_helper
INFO - 2022-05-06 09:57:52 --> Helper loaded: text_helper
INFO - 2022-05-06 09:57:52 --> Helper loaded: form_helper
INFO - 2022-05-06 09:57:52 --> Database Driver Class Initialized
DEBUG - 2022-05-06 09:57:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 09:57:52 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 09:57:52 --> Controller Class Initialized
DEBUG - 2022-05-06 09:57:52 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 09:57:52 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 09:57:52 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 09:57:52 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 09:57:52 --> Model "User_m" initialized
INFO - 2022-05-06 09:57:52 --> Model "Email_m" initialized
INFO - 2022-05-06 09:57:52 --> Final output sent to browser
DEBUG - 2022-05-06 09:57:52 --> Total execution time: 0.0104
INFO - 2022-05-06 10:07:54 --> Config Class Initialized
INFO - 2022-05-06 10:07:54 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:07:54 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:07:54 --> Utf8 Class Initialized
INFO - 2022-05-06 10:07:54 --> URI Class Initialized
INFO - 2022-05-06 10:07:54 --> Router Class Initialized
INFO - 2022-05-06 10:07:54 --> Output Class Initialized
INFO - 2022-05-06 10:07:54 --> Security Class Initialized
DEBUG - 2022-05-06 10:07:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:07:54 --> Input Class Initialized
INFO - 2022-05-06 10:07:54 --> Language Class Initialized
INFO - 2022-05-06 10:07:54 --> Loader Class Initialized
INFO - 2022-05-06 10:07:54 --> Helper loaded: url_helper
INFO - 2022-05-06 10:07:54 --> Helper loaded: text_helper
INFO - 2022-05-06 10:07:54 --> Helper loaded: form_helper
INFO - 2022-05-06 10:07:54 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:07:54 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:07:54 --> Controller Class Initialized
DEBUG - 2022-05-06 10:07:54 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:07:54 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:07:54 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:07:54 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:07:54 --> Model "User_m" initialized
INFO - 2022-05-06 10:07:54 --> Model "Email_m" initialized
INFO - 2022-05-06 10:07:54 --> Final output sent to browser
DEBUG - 2022-05-06 10:07:54 --> Total execution time: 0.0103
INFO - 2022-05-06 10:08:16 --> Config Class Initialized
INFO - 2022-05-06 10:08:16 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:08:16 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:08:16 --> Utf8 Class Initialized
INFO - 2022-05-06 10:08:16 --> URI Class Initialized
INFO - 2022-05-06 10:08:16 --> Router Class Initialized
INFO - 2022-05-06 10:08:16 --> Output Class Initialized
INFO - 2022-05-06 10:08:16 --> Security Class Initialized
DEBUG - 2022-05-06 10:08:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:08:16 --> Input Class Initialized
INFO - 2022-05-06 10:08:16 --> Language Class Initialized
INFO - 2022-05-06 10:08:16 --> Loader Class Initialized
INFO - 2022-05-06 10:08:16 --> Helper loaded: url_helper
INFO - 2022-05-06 10:08:16 --> Helper loaded: text_helper
INFO - 2022-05-06 10:08:16 --> Helper loaded: form_helper
INFO - 2022-05-06 10:08:16 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:08:16 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:08:16 --> Controller Class Initialized
DEBUG - 2022-05-06 10:08:16 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:08:16 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:08:16 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:08:16 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:08:16 --> Model "User_m" initialized
INFO - 2022-05-06 10:08:16 --> Model "Email_m" initialized
INFO - 2022-05-06 10:08:16 --> Final output sent to browser
DEBUG - 2022-05-06 10:08:16 --> Total execution time: 0.0113
INFO - 2022-05-06 10:09:53 --> Config Class Initialized
INFO - 2022-05-06 10:09:53 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:09:53 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:09:53 --> Utf8 Class Initialized
INFO - 2022-05-06 10:09:53 --> URI Class Initialized
INFO - 2022-05-06 10:09:53 --> Router Class Initialized
INFO - 2022-05-06 10:09:53 --> Output Class Initialized
INFO - 2022-05-06 10:09:53 --> Security Class Initialized
DEBUG - 2022-05-06 10:09:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:09:53 --> Input Class Initialized
INFO - 2022-05-06 10:09:53 --> Language Class Initialized
INFO - 2022-05-06 10:09:53 --> Loader Class Initialized
INFO - 2022-05-06 10:09:53 --> Helper loaded: url_helper
INFO - 2022-05-06 10:09:53 --> Helper loaded: text_helper
INFO - 2022-05-06 10:09:53 --> Helper loaded: form_helper
INFO - 2022-05-06 10:09:53 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:09:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:09:53 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:09:53 --> Controller Class Initialized
DEBUG - 2022-05-06 10:09:53 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:09:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:09:53 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:09:53 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:09:53 --> Model "User_m" initialized
INFO - 2022-05-06 10:09:53 --> Model "Email_m" initialized
INFO - 2022-05-06 10:09:53 --> Final output sent to browser
DEBUG - 2022-05-06 10:09:53 --> Total execution time: 0.0106
INFO - 2022-05-06 10:10:26 --> Config Class Initialized
INFO - 2022-05-06 10:10:26 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:10:26 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:10:26 --> Utf8 Class Initialized
INFO - 2022-05-06 10:10:26 --> URI Class Initialized
INFO - 2022-05-06 10:10:26 --> Router Class Initialized
INFO - 2022-05-06 10:10:26 --> Output Class Initialized
INFO - 2022-05-06 10:10:26 --> Security Class Initialized
DEBUG - 2022-05-06 10:10:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:10:26 --> Input Class Initialized
INFO - 2022-05-06 10:10:26 --> Language Class Initialized
INFO - 2022-05-06 10:10:26 --> Loader Class Initialized
INFO - 2022-05-06 10:10:26 --> Helper loaded: url_helper
INFO - 2022-05-06 10:10:26 --> Helper loaded: text_helper
INFO - 2022-05-06 10:10:26 --> Helper loaded: form_helper
INFO - 2022-05-06 10:10:26 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:10:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:10:26 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:10:26 --> Controller Class Initialized
DEBUG - 2022-05-06 10:10:26 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:10:26 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:10:26 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:10:26 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:10:26 --> Model "User_m" initialized
INFO - 2022-05-06 10:10:26 --> Model "Email_m" initialized
INFO - 2022-05-06 10:10:26 --> Final output sent to browser
DEBUG - 2022-05-06 10:10:26 --> Total execution time: 0.0101
INFO - 2022-05-06 10:15:29 --> Config Class Initialized
INFO - 2022-05-06 10:15:29 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:15:29 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:15:29 --> Utf8 Class Initialized
INFO - 2022-05-06 10:15:29 --> URI Class Initialized
INFO - 2022-05-06 10:15:29 --> Router Class Initialized
INFO - 2022-05-06 10:15:29 --> Output Class Initialized
INFO - 2022-05-06 10:15:29 --> Security Class Initialized
DEBUG - 2022-05-06 10:15:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:15:29 --> Input Class Initialized
INFO - 2022-05-06 10:15:29 --> Language Class Initialized
INFO - 2022-05-06 10:15:29 --> Loader Class Initialized
INFO - 2022-05-06 10:15:29 --> Helper loaded: url_helper
INFO - 2022-05-06 10:15:29 --> Helper loaded: text_helper
INFO - 2022-05-06 10:15:29 --> Helper loaded: form_helper
INFO - 2022-05-06 10:15:29 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:15:29 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:15:29 --> Controller Class Initialized
DEBUG - 2022-05-06 10:15:29 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:15:29 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:15:29 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:15:29 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:15:29 --> Model "User_m" initialized
INFO - 2022-05-06 10:15:29 --> Model "Email_m" initialized
INFO - 2022-05-06 10:15:29 --> Final output sent to browser
DEBUG - 2022-05-06 10:15:29 --> Total execution time: 0.0107
INFO - 2022-05-06 10:15:48 --> Config Class Initialized
INFO - 2022-05-06 10:15:48 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:15:48 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:15:48 --> Utf8 Class Initialized
INFO - 2022-05-06 10:15:48 --> URI Class Initialized
INFO - 2022-05-06 10:15:48 --> Router Class Initialized
INFO - 2022-05-06 10:15:48 --> Output Class Initialized
INFO - 2022-05-06 10:15:48 --> Security Class Initialized
DEBUG - 2022-05-06 10:15:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:15:48 --> Input Class Initialized
INFO - 2022-05-06 10:15:48 --> Language Class Initialized
INFO - 2022-05-06 10:15:48 --> Loader Class Initialized
INFO - 2022-05-06 10:15:48 --> Helper loaded: url_helper
INFO - 2022-05-06 10:15:48 --> Helper loaded: text_helper
INFO - 2022-05-06 10:15:48 --> Helper loaded: form_helper
INFO - 2022-05-06 10:15:48 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:15:48 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:15:48 --> Controller Class Initialized
DEBUG - 2022-05-06 10:15:48 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:15:48 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:15:48 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:15:48 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:15:48 --> Model "User_m" initialized
INFO - 2022-05-06 10:15:48 --> Model "Email_m" initialized
INFO - 2022-05-06 10:15:48 --> Final output sent to browser
DEBUG - 2022-05-06 10:15:48 --> Total execution time: 0.0110
INFO - 2022-05-06 10:16:04 --> Config Class Initialized
INFO - 2022-05-06 10:16:04 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:16:04 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:16:04 --> Utf8 Class Initialized
INFO - 2022-05-06 10:16:04 --> URI Class Initialized
INFO - 2022-05-06 10:16:04 --> Router Class Initialized
INFO - 2022-05-06 10:16:04 --> Output Class Initialized
INFO - 2022-05-06 10:16:04 --> Security Class Initialized
DEBUG - 2022-05-06 10:16:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:16:04 --> Input Class Initialized
INFO - 2022-05-06 10:16:04 --> Language Class Initialized
INFO - 2022-05-06 10:16:04 --> Loader Class Initialized
INFO - 2022-05-06 10:16:04 --> Helper loaded: url_helper
INFO - 2022-05-06 10:16:04 --> Helper loaded: text_helper
INFO - 2022-05-06 10:16:04 --> Helper loaded: form_helper
INFO - 2022-05-06 10:16:04 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:16:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:16:04 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:16:04 --> Controller Class Initialized
DEBUG - 2022-05-06 10:16:04 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:16:04 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:16:04 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:16:04 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:16:04 --> Model "User_m" initialized
INFO - 2022-05-06 10:16:04 --> Model "Email_m" initialized
INFO - 2022-05-06 10:16:04 --> Final output sent to browser
DEBUG - 2022-05-06 10:16:04 --> Total execution time: 0.0127
INFO - 2022-05-06 10:17:41 --> Config Class Initialized
INFO - 2022-05-06 10:17:41 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:17:41 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:17:41 --> Utf8 Class Initialized
INFO - 2022-05-06 10:17:41 --> URI Class Initialized
INFO - 2022-05-06 10:17:41 --> Router Class Initialized
INFO - 2022-05-06 10:17:41 --> Output Class Initialized
INFO - 2022-05-06 10:17:41 --> Security Class Initialized
DEBUG - 2022-05-06 10:17:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:17:41 --> Input Class Initialized
INFO - 2022-05-06 10:17:41 --> Language Class Initialized
INFO - 2022-05-06 10:17:41 --> Loader Class Initialized
INFO - 2022-05-06 10:17:41 --> Helper loaded: url_helper
INFO - 2022-05-06 10:17:41 --> Helper loaded: text_helper
INFO - 2022-05-06 10:17:41 --> Helper loaded: form_helper
INFO - 2022-05-06 10:17:41 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:17:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:17:41 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:17:41 --> Controller Class Initialized
DEBUG - 2022-05-06 10:17:41 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:17:41 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:17:41 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:17:41 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:17:41 --> Model "User_m" initialized
INFO - 2022-05-06 10:17:41 --> Model "Email_m" initialized
INFO - 2022-05-06 10:17:41 --> Final output sent to browser
DEBUG - 2022-05-06 10:17:41 --> Total execution time: 0.0114
INFO - 2022-05-06 10:21:13 --> Config Class Initialized
INFO - 2022-05-06 10:21:13 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:21:13 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:21:13 --> Utf8 Class Initialized
INFO - 2022-05-06 10:21:13 --> URI Class Initialized
INFO - 2022-05-06 10:21:13 --> Router Class Initialized
INFO - 2022-05-06 10:21:13 --> Output Class Initialized
INFO - 2022-05-06 10:21:13 --> Security Class Initialized
DEBUG - 2022-05-06 10:21:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:21:13 --> Input Class Initialized
INFO - 2022-05-06 10:21:13 --> Language Class Initialized
INFO - 2022-05-06 10:21:13 --> Loader Class Initialized
INFO - 2022-05-06 10:21:13 --> Helper loaded: url_helper
INFO - 2022-05-06 10:21:13 --> Helper loaded: text_helper
INFO - 2022-05-06 10:21:13 --> Helper loaded: form_helper
INFO - 2022-05-06 10:21:13 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:21:13 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:21:13 --> Controller Class Initialized
DEBUG - 2022-05-06 10:21:13 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:21:13 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:21:13 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:21:13 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:21:13 --> Model "User_m" initialized
INFO - 2022-05-06 10:21:13 --> Model "Email_m" initialized
INFO - 2022-05-06 10:21:13 --> Final output sent to browser
DEBUG - 2022-05-06 10:21:13 --> Total execution time: 0.0136
INFO - 2022-05-06 10:23:06 --> Config Class Initialized
INFO - 2022-05-06 10:23:06 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:23:06 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:23:06 --> Utf8 Class Initialized
INFO - 2022-05-06 10:23:06 --> URI Class Initialized
INFO - 2022-05-06 10:23:06 --> Router Class Initialized
INFO - 2022-05-06 10:23:06 --> Output Class Initialized
INFO - 2022-05-06 10:23:06 --> Security Class Initialized
DEBUG - 2022-05-06 10:23:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:23:06 --> Input Class Initialized
INFO - 2022-05-06 10:23:06 --> Language Class Initialized
INFO - 2022-05-06 10:23:06 --> Loader Class Initialized
INFO - 2022-05-06 10:23:06 --> Helper loaded: url_helper
INFO - 2022-05-06 10:23:06 --> Helper loaded: text_helper
INFO - 2022-05-06 10:23:06 --> Helper loaded: form_helper
INFO - 2022-05-06 10:23:06 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:23:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:23:06 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:23:06 --> Controller Class Initialized
DEBUG - 2022-05-06 10:23:06 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:23:06 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:23:06 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:23:06 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:23:06 --> Model "User_m" initialized
INFO - 2022-05-06 10:23:06 --> Model "Email_m" initialized
INFO - 2022-05-06 10:23:06 --> Final output sent to browser
DEBUG - 2022-05-06 10:23:06 --> Total execution time: 0.0104
INFO - 2022-05-06 10:25:31 --> Config Class Initialized
INFO - 2022-05-06 10:25:31 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:25:31 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:25:31 --> Utf8 Class Initialized
INFO - 2022-05-06 10:25:31 --> URI Class Initialized
INFO - 2022-05-06 10:25:31 --> Router Class Initialized
INFO - 2022-05-06 10:25:31 --> Output Class Initialized
INFO - 2022-05-06 10:25:31 --> Security Class Initialized
DEBUG - 2022-05-06 10:25:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:25:31 --> Input Class Initialized
INFO - 2022-05-06 10:25:31 --> Language Class Initialized
INFO - 2022-05-06 10:25:31 --> Loader Class Initialized
INFO - 2022-05-06 10:25:31 --> Helper loaded: url_helper
INFO - 2022-05-06 10:25:31 --> Helper loaded: text_helper
INFO - 2022-05-06 10:25:31 --> Helper loaded: form_helper
INFO - 2022-05-06 10:25:31 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:25:31 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:25:31 --> Controller Class Initialized
DEBUG - 2022-05-06 10:25:31 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:25:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:25:31 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:25:31 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:25:31 --> Model "User_m" initialized
INFO - 2022-05-06 10:25:31 --> Model "Email_m" initialized
INFO - 2022-05-06 10:25:31 --> Final output sent to browser
DEBUG - 2022-05-06 10:25:31 --> Total execution time: 0.0124
INFO - 2022-05-06 10:27:27 --> Config Class Initialized
INFO - 2022-05-06 10:27:27 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:27:27 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:27:27 --> Utf8 Class Initialized
INFO - 2022-05-06 10:27:27 --> URI Class Initialized
INFO - 2022-05-06 10:27:27 --> Router Class Initialized
INFO - 2022-05-06 10:27:27 --> Output Class Initialized
INFO - 2022-05-06 10:27:27 --> Security Class Initialized
DEBUG - 2022-05-06 10:27:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:27:27 --> Input Class Initialized
INFO - 2022-05-06 10:27:27 --> Language Class Initialized
INFO - 2022-05-06 10:27:27 --> Loader Class Initialized
INFO - 2022-05-06 10:27:27 --> Helper loaded: url_helper
INFO - 2022-05-06 10:27:27 --> Helper loaded: text_helper
INFO - 2022-05-06 10:27:27 --> Helper loaded: form_helper
INFO - 2022-05-06 10:27:27 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:27:27 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:27:27 --> Controller Class Initialized
DEBUG - 2022-05-06 10:27:27 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:27:27 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:27:27 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:27:27 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:27:27 --> Model "User_m" initialized
INFO - 2022-05-06 10:27:27 --> Model "Email_m" initialized
INFO - 2022-05-06 10:27:27 --> Final output sent to browser
DEBUG - 2022-05-06 10:27:27 --> Total execution time: 0.0110
INFO - 2022-05-06 10:37:53 --> Config Class Initialized
INFO - 2022-05-06 10:37:53 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:37:53 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:37:53 --> Utf8 Class Initialized
INFO - 2022-05-06 10:37:53 --> URI Class Initialized
INFO - 2022-05-06 10:37:53 --> Router Class Initialized
INFO - 2022-05-06 10:37:53 --> Output Class Initialized
INFO - 2022-05-06 10:37:53 --> Security Class Initialized
DEBUG - 2022-05-06 10:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:37:53 --> Input Class Initialized
INFO - 2022-05-06 10:37:53 --> Language Class Initialized
INFO - 2022-05-06 10:37:53 --> Loader Class Initialized
INFO - 2022-05-06 10:37:53 --> Helper loaded: url_helper
INFO - 2022-05-06 10:37:53 --> Helper loaded: text_helper
INFO - 2022-05-06 10:37:53 --> Helper loaded: form_helper
INFO - 2022-05-06 10:37:53 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:37:53 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:37:53 --> Controller Class Initialized
DEBUG - 2022-05-06 10:37:53 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:37:53 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:37:53 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:37:53 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:37:53 --> Model "User_m" initialized
INFO - 2022-05-06 10:37:53 --> Model "Email_m" initialized
INFO - 2022-05-06 10:37:53 --> Final output sent to browser
DEBUG - 2022-05-06 10:37:53 --> Total execution time: 0.0102
INFO - 2022-05-06 10:38:50 --> Config Class Initialized
INFO - 2022-05-06 10:38:50 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:38:50 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:38:50 --> Utf8 Class Initialized
INFO - 2022-05-06 10:38:50 --> URI Class Initialized
INFO - 2022-05-06 10:38:50 --> Router Class Initialized
INFO - 2022-05-06 10:38:50 --> Output Class Initialized
INFO - 2022-05-06 10:38:50 --> Security Class Initialized
DEBUG - 2022-05-06 10:38:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:38:50 --> Input Class Initialized
INFO - 2022-05-06 10:38:50 --> Language Class Initialized
INFO - 2022-05-06 10:38:50 --> Loader Class Initialized
INFO - 2022-05-06 10:38:50 --> Helper loaded: url_helper
INFO - 2022-05-06 10:38:50 --> Helper loaded: text_helper
INFO - 2022-05-06 10:38:50 --> Helper loaded: form_helper
INFO - 2022-05-06 10:38:50 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:38:50 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:38:50 --> Controller Class Initialized
DEBUG - 2022-05-06 10:38:50 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:38:50 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:38:50 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:38:50 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:38:50 --> Model "User_m" initialized
INFO - 2022-05-06 10:38:50 --> Model "Email_m" initialized
INFO - 2022-05-06 10:38:50 --> Final output sent to browser
DEBUG - 2022-05-06 10:38:50 --> Total execution time: 0.0192
INFO - 2022-05-06 10:39:31 --> Config Class Initialized
INFO - 2022-05-06 10:39:31 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:39:31 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:39:31 --> Utf8 Class Initialized
INFO - 2022-05-06 10:39:31 --> URI Class Initialized
INFO - 2022-05-06 10:39:31 --> Router Class Initialized
INFO - 2022-05-06 10:39:31 --> Output Class Initialized
INFO - 2022-05-06 10:39:31 --> Security Class Initialized
DEBUG - 2022-05-06 10:39:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:39:31 --> Input Class Initialized
INFO - 2022-05-06 10:39:31 --> Language Class Initialized
INFO - 2022-05-06 10:39:31 --> Loader Class Initialized
INFO - 2022-05-06 10:39:31 --> Helper loaded: url_helper
INFO - 2022-05-06 10:39:31 --> Helper loaded: text_helper
INFO - 2022-05-06 10:39:31 --> Helper loaded: form_helper
INFO - 2022-05-06 10:39:31 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:39:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:39:31 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:39:31 --> Controller Class Initialized
DEBUG - 2022-05-06 10:39:31 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:39:31 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:39:31 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:39:31 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:39:31 --> Model "User_m" initialized
INFO - 2022-05-06 10:39:31 --> Model "Email_m" initialized
INFO - 2022-05-06 10:39:31 --> Final output sent to browser
DEBUG - 2022-05-06 10:39:31 --> Total execution time: 0.0112
INFO - 2022-05-06 10:40:24 --> Config Class Initialized
INFO - 2022-05-06 10:40:24 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:40:24 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:40:24 --> Utf8 Class Initialized
INFO - 2022-05-06 10:40:24 --> URI Class Initialized
INFO - 2022-05-06 10:40:24 --> Router Class Initialized
INFO - 2022-05-06 10:40:24 --> Output Class Initialized
INFO - 2022-05-06 10:40:24 --> Security Class Initialized
DEBUG - 2022-05-06 10:40:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:40:24 --> Input Class Initialized
INFO - 2022-05-06 10:40:24 --> Language Class Initialized
INFO - 2022-05-06 10:40:24 --> Loader Class Initialized
INFO - 2022-05-06 10:40:24 --> Helper loaded: url_helper
INFO - 2022-05-06 10:40:24 --> Helper loaded: text_helper
INFO - 2022-05-06 10:40:24 --> Helper loaded: form_helper
INFO - 2022-05-06 10:40:24 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:40:24 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:40:24 --> Controller Class Initialized
DEBUG - 2022-05-06 10:40:24 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:40:24 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:40:24 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:40:24 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:40:24 --> Model "User_m" initialized
INFO - 2022-05-06 10:40:24 --> Model "Email_m" initialized
INFO - 2022-05-06 10:40:24 --> Final output sent to browser
DEBUG - 2022-05-06 10:40:24 --> Total execution time: 0.0112
INFO - 2022-05-06 10:41:09 --> Config Class Initialized
INFO - 2022-05-06 10:41:09 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:41:09 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:41:09 --> Utf8 Class Initialized
INFO - 2022-05-06 10:41:09 --> URI Class Initialized
INFO - 2022-05-06 10:41:09 --> Router Class Initialized
INFO - 2022-05-06 10:41:09 --> Output Class Initialized
INFO - 2022-05-06 10:41:09 --> Security Class Initialized
DEBUG - 2022-05-06 10:41:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:41:09 --> Input Class Initialized
INFO - 2022-05-06 10:41:09 --> Language Class Initialized
INFO - 2022-05-06 10:41:09 --> Loader Class Initialized
INFO - 2022-05-06 10:41:09 --> Helper loaded: url_helper
INFO - 2022-05-06 10:41:09 --> Helper loaded: text_helper
INFO - 2022-05-06 10:41:09 --> Helper loaded: form_helper
INFO - 2022-05-06 10:41:09 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:41:09 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:41:09 --> Controller Class Initialized
DEBUG - 2022-05-06 10:41:09 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:41:09 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:41:09 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:41:09 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:41:09 --> Model "User_m" initialized
INFO - 2022-05-06 10:41:09 --> Model "Email_m" initialized
INFO - 2022-05-06 10:41:09 --> Final output sent to browser
DEBUG - 2022-05-06 10:41:09 --> Total execution time: 0.0100
INFO - 2022-05-06 10:43:09 --> Config Class Initialized
INFO - 2022-05-06 10:43:09 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:43:09 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:43:09 --> Utf8 Class Initialized
INFO - 2022-05-06 10:43:09 --> URI Class Initialized
INFO - 2022-05-06 10:43:09 --> Router Class Initialized
INFO - 2022-05-06 10:43:09 --> Output Class Initialized
INFO - 2022-05-06 10:43:09 --> Security Class Initialized
DEBUG - 2022-05-06 10:43:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:43:09 --> Input Class Initialized
INFO - 2022-05-06 10:43:09 --> Language Class Initialized
INFO - 2022-05-06 10:43:09 --> Loader Class Initialized
INFO - 2022-05-06 10:43:09 --> Helper loaded: url_helper
INFO - 2022-05-06 10:43:09 --> Helper loaded: text_helper
INFO - 2022-05-06 10:43:09 --> Helper loaded: form_helper
INFO - 2022-05-06 10:43:09 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:43:09 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:43:09 --> Controller Class Initialized
DEBUG - 2022-05-06 10:43:09 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:43:09 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:43:09 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:43:09 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:43:09 --> Model "User_m" initialized
INFO - 2022-05-06 10:43:09 --> Model "Email_m" initialized
INFO - 2022-05-06 10:43:09 --> Final output sent to browser
DEBUG - 2022-05-06 10:43:09 --> Total execution time: 0.0104
INFO - 2022-05-06 10:44:51 --> Config Class Initialized
INFO - 2022-05-06 10:44:51 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:44:51 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:44:51 --> Utf8 Class Initialized
INFO - 2022-05-06 10:44:51 --> URI Class Initialized
INFO - 2022-05-06 10:44:51 --> Router Class Initialized
INFO - 2022-05-06 10:44:51 --> Output Class Initialized
INFO - 2022-05-06 10:44:51 --> Security Class Initialized
DEBUG - 2022-05-06 10:44:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:44:51 --> Input Class Initialized
INFO - 2022-05-06 10:44:51 --> Language Class Initialized
INFO - 2022-05-06 10:44:51 --> Loader Class Initialized
INFO - 2022-05-06 10:44:51 --> Helper loaded: url_helper
INFO - 2022-05-06 10:44:51 --> Helper loaded: text_helper
INFO - 2022-05-06 10:44:51 --> Helper loaded: form_helper
INFO - 2022-05-06 10:44:51 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:44:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:44:51 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:44:51 --> Controller Class Initialized
DEBUG - 2022-05-06 10:44:51 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:44:51 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:44:51 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:44:51 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:44:51 --> Model "User_m" initialized
INFO - 2022-05-06 10:44:51 --> Model "Email_m" initialized
INFO - 2022-05-06 10:44:51 --> Final output sent to browser
DEBUG - 2022-05-06 10:44:51 --> Total execution time: 0.0127
INFO - 2022-05-06 10:45:33 --> Config Class Initialized
INFO - 2022-05-06 10:45:33 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:45:33 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:45:33 --> Utf8 Class Initialized
INFO - 2022-05-06 10:45:33 --> URI Class Initialized
INFO - 2022-05-06 10:45:33 --> Router Class Initialized
INFO - 2022-05-06 10:45:33 --> Output Class Initialized
INFO - 2022-05-06 10:45:33 --> Security Class Initialized
DEBUG - 2022-05-06 10:45:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:45:33 --> Input Class Initialized
INFO - 2022-05-06 10:45:33 --> Language Class Initialized
INFO - 2022-05-06 10:45:33 --> Loader Class Initialized
INFO - 2022-05-06 10:45:33 --> Helper loaded: url_helper
INFO - 2022-05-06 10:45:33 --> Helper loaded: text_helper
INFO - 2022-05-06 10:45:33 --> Helper loaded: form_helper
INFO - 2022-05-06 10:45:33 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:45:33 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:45:33 --> Controller Class Initialized
DEBUG - 2022-05-06 10:45:33 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:45:33 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:45:33 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:45:33 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:45:33 --> Model "User_m" initialized
INFO - 2022-05-06 10:45:33 --> Model "Email_m" initialized
INFO - 2022-05-06 10:45:33 --> Final output sent to browser
DEBUG - 2022-05-06 10:45:33 --> Total execution time: 0.0107
INFO - 2022-05-06 10:46:23 --> Config Class Initialized
INFO - 2022-05-06 10:46:23 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:46:23 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:46:23 --> Utf8 Class Initialized
INFO - 2022-05-06 10:46:23 --> URI Class Initialized
INFO - 2022-05-06 10:46:23 --> Router Class Initialized
INFO - 2022-05-06 10:46:23 --> Output Class Initialized
INFO - 2022-05-06 10:46:23 --> Security Class Initialized
DEBUG - 2022-05-06 10:46:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:46:23 --> Input Class Initialized
INFO - 2022-05-06 10:46:23 --> Language Class Initialized
INFO - 2022-05-06 10:46:23 --> Loader Class Initialized
INFO - 2022-05-06 10:46:23 --> Helper loaded: url_helper
INFO - 2022-05-06 10:46:23 --> Helper loaded: text_helper
INFO - 2022-05-06 10:46:23 --> Helper loaded: form_helper
INFO - 2022-05-06 10:46:23 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:46:23 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:46:23 --> Controller Class Initialized
DEBUG - 2022-05-06 10:46:23 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:46:23 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:46:23 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:46:23 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:46:23 --> Model "User_m" initialized
INFO - 2022-05-06 10:46:23 --> Model "Email_m" initialized
INFO - 2022-05-06 10:46:23 --> Final output sent to browser
DEBUG - 2022-05-06 10:46:23 --> Total execution time: 0.0111
INFO - 2022-05-06 10:47:00 --> Config Class Initialized
INFO - 2022-05-06 10:47:00 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:47:00 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:47:00 --> Utf8 Class Initialized
INFO - 2022-05-06 10:47:00 --> URI Class Initialized
INFO - 2022-05-06 10:47:00 --> Router Class Initialized
INFO - 2022-05-06 10:47:00 --> Output Class Initialized
INFO - 2022-05-06 10:47:00 --> Security Class Initialized
DEBUG - 2022-05-06 10:47:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:47:00 --> Input Class Initialized
INFO - 2022-05-06 10:47:00 --> Language Class Initialized
INFO - 2022-05-06 10:47:00 --> Loader Class Initialized
INFO - 2022-05-06 10:47:00 --> Helper loaded: url_helper
INFO - 2022-05-06 10:47:00 --> Helper loaded: text_helper
INFO - 2022-05-06 10:47:00 --> Helper loaded: form_helper
INFO - 2022-05-06 10:47:00 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:47:00 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:47:00 --> Controller Class Initialized
DEBUG - 2022-05-06 10:47:00 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:47:00 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:47:00 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:47:00 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:47:00 --> Model "User_m" initialized
INFO - 2022-05-06 10:47:00 --> Model "Email_m" initialized
INFO - 2022-05-06 10:47:00 --> Final output sent to browser
DEBUG - 2022-05-06 10:47:00 --> Total execution time: 0.0105
INFO - 2022-05-06 10:47:20 --> Config Class Initialized
INFO - 2022-05-06 10:47:20 --> Hooks Class Initialized
DEBUG - 2022-05-06 10:47:20 --> UTF-8 Support Enabled
INFO - 2022-05-06 10:47:20 --> Utf8 Class Initialized
INFO - 2022-05-06 10:47:20 --> URI Class Initialized
INFO - 2022-05-06 10:47:20 --> Router Class Initialized
INFO - 2022-05-06 10:47:20 --> Output Class Initialized
INFO - 2022-05-06 10:47:20 --> Security Class Initialized
DEBUG - 2022-05-06 10:47:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 10:47:20 --> Input Class Initialized
INFO - 2022-05-06 10:47:20 --> Language Class Initialized
INFO - 2022-05-06 10:47:20 --> Loader Class Initialized
INFO - 2022-05-06 10:47:20 --> Helper loaded: url_helper
INFO - 2022-05-06 10:47:20 --> Helper loaded: text_helper
INFO - 2022-05-06 10:47:20 --> Helper loaded: form_helper
INFO - 2022-05-06 10:47:20 --> Database Driver Class Initialized
DEBUG - 2022-05-06 10:47:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 10:47:20 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 10:47:20 --> Controller Class Initialized
DEBUG - 2022-05-06 10:47:20 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 10:47:20 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 10:47:20 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 10:47:20 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 10:47:20 --> Model "User_m" initialized
INFO - 2022-05-06 10:47:20 --> Model "Email_m" initialized
INFO - 2022-05-06 10:47:20 --> Final output sent to browser
DEBUG - 2022-05-06 10:47:20 --> Total execution time: 0.0115
INFO - 2022-05-06 14:10:24 --> Config Class Initialized
INFO - 2022-05-06 14:10:24 --> Hooks Class Initialized
DEBUG - 2022-05-06 14:10:24 --> UTF-8 Support Enabled
INFO - 2022-05-06 14:10:24 --> Utf8 Class Initialized
INFO - 2022-05-06 14:10:24 --> URI Class Initialized
INFO - 2022-05-06 14:10:24 --> Router Class Initialized
INFO - 2022-05-06 14:10:24 --> Output Class Initialized
INFO - 2022-05-06 14:10:24 --> Security Class Initialized
DEBUG - 2022-05-06 14:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2022-05-06 14:10:24 --> Input Class Initialized
INFO - 2022-05-06 14:10:24 --> Language Class Initialized
INFO - 2022-05-06 14:10:24 --> Loader Class Initialized
INFO - 2022-05-06 14:10:24 --> Helper loaded: url_helper
INFO - 2022-05-06 14:10:24 --> Helper loaded: text_helper
INFO - 2022-05-06 14:10:24 --> Helper loaded: form_helper
INFO - 2022-05-06 14:10:24 --> Database Driver Class Initialized
DEBUG - 2022-05-06 14:10:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
INFO - 2022-05-06 14:10:24 --> Session: Class initialized using 'files' driver.
INFO - 2022-05-06 14:10:24 --> Controller Class Initialized
DEBUG - 2022-05-06 14:10:24 --> Config file loaded: /home/librevia/public_html/admin/application/config/rest.php
INFO - 2022-05-06 14:10:24 --> Language file loaded: language/english/rest_controller_lang.php
INFO - 2022-05-06 14:10:24 --> Helper loaded: inflector_helper
DEBUG - 2022-05-06 14:10:24 --> Session class already loaded. Second attempt ignored.
INFO - 2022-05-06 14:10:24 --> Model "User_m" initialized
INFO - 2022-05-06 14:10:24 --> Model "Email_m" initialized
INFO - 2022-05-06 14:10:24 --> Final output sent to browser
DEBUG - 2022-05-06 14:10:24 --> Total execution time: 0.0138
