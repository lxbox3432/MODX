<?php
/**
 * Test-related English Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 */
$_lang['test_config_file'] = 'Überprüfe, ob <span class="mono">[[+file]]</span> existiert und beschreibbar ist: ';
$_lang['test_config_file_nw'] = 'Für neue Linux-/Unix-Installationen erstellen Sie bitte eine leere Datei mit dem Dateinamen <span class="mono">[[+key]].inc.php</span> im Verzeichnis <span class="mono">core/config/</span> und setzen Sie die Dateirechte so, dass die Datei für PHP beschreibbar ist.';
$_lang['test_db_check'] = 'Stelle Verbindung zur Datenbank her: ';
$_lang['test_db_check_conn'] = 'Bitte überprüfen Sie die Verbindungsdaten und versuchen Sie es erneut.';
$_lang['test_db_failed'] = 'Datenbankverbindung fehlgeschlagen!';
$_lang['test_db_setup_create'] = 'Setup versucht, die Datenbank zu erstellen.';
$_lang['test_dependencies'] = 'Überprüfe, ob die PHP-Extension "zlib" installiert ist: ';
$_lang['test_dependencies_fail_zlib'] = 'In Ihrer PHP-Installation ist die "zlib"-Extension nicht verfügbar. Diese Extension wird von MODX benötigt. Bitte aktivieren Sie sie, bevor Sie fortfahren.';
$_lang['test_directory_exists'] = 'Überprüfe, ob das Verzeichnis <span class="mono">[[+dir]]</span> existiert: ';
$_lang['test_directory_writable'] = 'Überprüfe, ob das Verzeichnis <span class="mono">[[+dir]]</span> beschreibbar ist: ';
$_lang['test_memory_limit'] = 'Überprüfe, ob das memory_limit auf mindestens 24M gesetzt ist: ';
$_lang['test_memory_limit_fail'] = 'MODX hat festgestellt, dass Ihre memory_limit-Einstellung unter dem empfohlenen Wert von 24M liegt (aktueller Wert: [[+memory]]). MODX hat versucht, das memory_limit auf 24M zu setzen, was aber fehlgeschlagen ist. Bitte setzen Sie das memory_limit in Ihrer php.ini-Datei auf mindestens 24M, bevor Sie fortfahren. Falls Sie dennoch Probleme feststellen (z.B. eine leere weiße Seite während der Installation sehen), setzen Sie den Wert auf 32M, 64M oder höher.';
$_lang['test_memory_limit_success'] = 'OK! Aktueller Wert: [[+memory]]';
$_lang['test_mysql_version_5051'] = 'MODX wird mit der auf diesem System installierten MySQL-Version ([[+version]]) Probleme haben wegen der vielen Bugs in Zusammenhang mit den PDO-Treibern in dieser Version. Bitte führen Sie ein MySQL-Upgrade durch, um diese Probleme zu beseitigen. Auch wenn Sie sich entscheiden, MODX nicht zu verwenden, ist es empfehlenswert, ein MySQL-Upgrade durchzuführen, um die Sicherheit und Stabilität Ihrer Website zu gewährleisten.';
$_lang['test_mysql_version_client_nf'] = 'Konnte die MySQL-Client-Version nicht feststellen!';
$_lang['test_mysql_version_client_nf_msg'] = 'MODX konnte Ihre MySQL-Client-Version nicht via mysql_get_client_info() ermitteln. Bitte vergewissern Sie sich, dass Ihre MySQL-Client-Version mindestens 4.1.20 ist, bevor Sie fortfahren.';
$_lang['test_mysql_version_client_old'] = 'MODX könnte an einigen Stellen nicht korrekt funktionieren, weil Sie eine sehr alte MySQL-Client-Version verwenden ([[+version]])';
$_lang['test_mysql_version_client_old_msg'] = 'MODX wird die Installation bei Verwendung dieser MySQL-Client-Version zulassen, aber wir können nicht garantieren, dass alle Funktionen verfügbar sind oder korrekt funktionieren, wenn ältere Versionen der MySQL-Client-Bibliotheken verwendet werden.';
$_lang['test_mysql_version_client_start'] = 'Überprüfe MySQL-Client-Version:';
$_lang['test_mysql_version_fail'] = 'Sie verwenden MySQL [[+version]], MODX Revolution benötigt aber mindestens MySQL 4.1.20. Bitte führen Sie ein MySQL-Upgrade auf mindestens Version 4.1.20 durch.';
$_lang['test_mysql_version_server_nf'] = 'Konnte die MySQL-Server-Version nicht feststellen!';
$_lang['test_mysql_version_server_nf_msg'] = 'MODX konnte Ihre MySQL-Server-Version nicht via mysql_get_server_info() ermitteln. Bitte vergewissern Sie sich, dass Ihre MySQL-Server-Version mindestens 4.1.20 ist, bevor Sie fortfahren.';
$_lang['test_mysql_version_server_start'] = 'Überprüfe MySQL-Server-Version:';
$_lang['test_mysql_version_success'] = 'OK! Gefundene Version: [[+version]]';
$_lang['test_nocompress'] = 'Überprüfe, ob die CSS-/JS-Komprimierung deaktiviert werden sollte: ';
$_lang['test_nocompress_disabled'] = 'OK! Deaktiviert.';
$_lang['test_nocompress_skip'] = 'Nicht ausgewählt, Test überspringen.';
$_lang['test_php_version_fail'] = 'Sie verwenden PHP [[+version]], MODX Revolution benötigt aber mindestens PHP [[+required]]. Bitte führen Sie ein PHP-Upgrade auf mindestens Version [[+required]] durch. MODX empfiehlt ein Upgrade auf die aktuelle Version [[+recommended]], sowohl aus Sicherheitsgründen als auch wegen der zukünftigen Unterstützung.';
$_lang['test_php_version_start'] = 'Überprüfe PHP-Version:';
$_lang['test_php_version_success'] = 'OK! Gefundene Version: [[+version]]';
$_lang['test_session_gc'] = 'Überprüfe, ob der <a href="https://www.php.net/manual/en/session.configuration.php#ini.session.gc-probability" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;">Session Garbage Collector</a> korrekt konfiguriert ist: ';
$_lang['test_session_gc_fail'] = 'Der Session Garbage Collector wird nicht gestartet! Die aktuelle Konfiguration "session.gc_probability" ist auf [[+gc_probability]] und "session.gc_divisor" auf [[+gc_divisor]] gesetzt.<br>Standardmäßig speichert MODX Sessions in der Datenbank, so dass eine Fehlkonfiguration dieser Optionen die Session-Tabelle vergrößern kann.';
$_lang['test_session_gc_success'] = 'OK! Die aktuelle Konfiguration "session.gc_probability" ist auf [[+gc_probability]] gesetzt und "session.gc_divisor" auf [[+gc_divisor]] gesetzt.<br>Standardmäßig speichert MODX Sessions in der Datenbank, so dass eine Fehlkonfiguration dieser Optionen die Session-Tabelle vergrößern kann.';
$_lang['test_simplexml'] = 'Überprüfe, ob SimpleXML verfügbar ist:';
$_lang['test_simplexml_nf'] = 'Konnte SimpleXML nicht finden!';
$_lang['test_simplexml_nf_msg'] = 'MODX konnte SimpleXML in Ihrer PHP-Umgebung nicht finden. Die Package-Verwaltung und andere Features werden nicht funktionieren, wenn SimpleXML nicht installiert ist. Sie können mit der Installation fortfahren, aber MODX empfiehlt, SimpleXML zu aktivieren, um zusätzliche Features und Funktionen verfügbar zu machen.';
$_lang['test_suhosin'] = 'Überprüfe auf Suhosin-Probleme:';
$_lang['test_suhosin_max_length'] = 'suhosin.get.max_value_length zu niedrig!';
$_lang['test_suhosin_max_length_err'] = 'Sie verwenden momentan die PHP-Suhosin-Extension, und der Wert suhosin.get.max_value_length ist zu niedrig, um MODX eine korrekte Komprimierung von JavaScript-Dateien im Manager zu erlauben. MODX empfiehlt, diesen Wert auf 4096 heraufzusetzen; bis das geschehen ist, setzt MODX automatisch Ihre JavaScript-Komprimierung (Einstellung compress_js) auf 0, um Fehler zu vermeiden.';
$_lang['test_table_prefix'] = 'Überprüfe das Tabellenpräfix "[[+prefix]]": ';
$_lang['test_table_prefix_inuse'] = 'Das Tabellenpräfix wird in dieser Datenbank bereits verwendet!';
$_lang['test_table_prefix_inuse_desc'] = 'Die Installation in die gewählte Datenbank konnte nicht vorgenommen werden, da diese bereits Tabellen mit dem angegebenen Präfix enthält. Bitte wählen Sie ein anderes Präfix und starten Sie die Installation erneut.';
$_lang['test_table_prefix_nf'] = 'Das Tabellenpräfix existiert in dieser Datenbank nicht!';
$_lang['test_table_prefix_nf_desc'] = 'Die Installation in die gewählte Datenbank konnte nicht vorgenommen werden, da diese keine Tabellen mit dem angegebenen Präfix enthält, für die ein Upgrade vorgenommen werden könnte. Bitte wählen Sie ein existierendes Tabellen-Präfix und starten Sie die Installation erneut.';
$_lang['test_zip_memory_limit'] = 'Überprüfe, ob das memory_limit für zip-Extensions auf mindestens 24M gesetzt ist: ';
$_lang['test_zip_memory_limit_fail'] = 'MODX hat festgestellt, dass Ihre memory_limit-Einstellung unter dem empfohlenen Wert von 24M liegt. MODX hat versucht, das memory_limit auf 24M zu setzen, was aber fehlgeschlagen ist. Bitte setzen Sie das memory_limit in Ihrer php.ini-Datei auf mindestens 24M, bevor Sie fortfahren, damit die zip-Extensions korrekt funktionieren können.';
