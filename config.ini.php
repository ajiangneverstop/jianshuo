<?php
/**
 * 基础配置文件
 */
if(!defined("INBook")) {
    exit("Access Invalid!");
}

global $config;
$config = array();

// ----------------------------  CONFIG DB  ----------------------------- //
$config['db']['dbhost'] = '139.199.39.70';
$config['db']['dbuser'] = 'root';
$config['db']['dbpw'] = 'Jianshuo2018!@#$%';
$config['db']['dbcharset'] = 'utf8';
$config['db']['pconnect'] = '0';
$config['db']['dbname'] = 'jianshuo';
$config['db']['tablepre'] = 'book_';

// --------------------------  CONFIG OUTPUT  --------------------------- //
$config['output']['charset'] = 'utf-8';
$config['output']['forceheader'] = 1;
$config['output']['gzip'] = '0';

// --------------------------  CONFIG COOKIE  --------------------------- //
$config['cookie']['cookiepre'] = 'F7CF_';
$config['cookie']['cookiedomain'] = '';
$config['cookie']['cookiepath'] = '/';

// -------------------------  CONFIG SECURITY  -------------------------- //
$config['security']['authkey'] = 'e930a54cc0d21VuL';
$config['security']['urlxssdefend'] = 1;
$config['security']['querysafe']['status'] = 1;
$config['security']['querysafe']['dfunction']['0'] = 'load_file';
$config['security']['querysafe']['dfunction']['1'] = 'hex';
$config['security']['querysafe']['dfunction']['2'] = 'substring';
$config['security']['querysafe']['dfunction']['3'] = 'if';
$config['security']['querysafe']['dfunction']['4'] = 'ord';
$config['security']['querysafe']['dfunction']['5'] = 'char';
$config['security']['querysafe']['daction']['0'] = '@';
$config['security']['querysafe']['daction']['1'] = 'intooutfile';
$config['security']['querysafe']['daction']['2'] = 'intodumpfile';
$config['security']['querysafe']['daction']['3'] = 'unionselect';
$config['security']['querysafe']['daction']['4'] = '(select';
$config['security']['querysafe']['daction']['5'] = 'unionall';
$config['security']['querysafe']['daction']['6'] = 'uniondistinct';
$config['security']['querysafe']['dnote']['0'] = '/*';
$config['security']['querysafe']['dnote']['1'] = '*/';
$config['security']['querysafe']['dnote']['2'] = '#';
$config['security']['querysafe']['dnote']['3'] = '--';
$config['security']['querysafe']['dnote']['4'] = '"';
$config['security']['querysafe']['dlikehex'] = 1;
$config['security']['querysafe']['afullnote'] = '0';

?>