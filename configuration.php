<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'Este sitio est? cerrado por mantenimiento.<br /> Por favor, vis?tenos m?s tarde.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'Terminales Medellín';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '1';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'root';
	public $password = 'mysql';
	public $db = 'ttmedellin';
	public $dbprefix = 'a5u6m_';
	public $live_site = '';
	public $secret = '8aYKSv2HdAEWDQXh';
	public $gzip = '0';
	public $error_reporting = 'maximum';
	public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '127.0.0.1';
	public $ftp_port = '21';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'America/Bogota';
	public $mailer = 'smtp';
	public $mailfrom = 'informacion@terminalesmedellin.com';
	public $fromname = 'Terminales Medellín';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '1';
	public $smtpuser = 'smtpterminales@gmail.com';
	public $smtppass = 'Portalweb2013';
	public $smtphost = 'smtp.gmail.com';
	public $smtpsecure = 'ssl';
	public $smtpport = '465';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = '';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '0';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = '/var/www/html/terminales-medellin/logs';
	public $tmp_path = '/var/www/html/terminales-medellin/tmp';
	public $lifetime = '20';
	public $session_handler = 'database';
	public $MetaRights = '';
	public $sitename_pagetitles = '0';
	public $force_ssl = '1';
	public $feed_email = 'author';
	public $cookie_domain = '';
	public $cookie_path = '';
}