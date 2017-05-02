<?php
class_alias('Cake\Core\Configure', 'Configure');

//CUSTOM VALUES
Configure::write('SITE_URL', 'http://localhost:8765');
Configure::write('ADMIN_URL', 'http://localhost:8765/painel');
Configure::write('SITE_NAME', 'NinjaCMS');
Configure::write('SITE_EMAIL', 'flaviano.honorato@gmail.com');

setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
ini_set('intl.default_locale', 'pt_BR');

