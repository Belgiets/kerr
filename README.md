Test task (landing page with mail sending by form submit)

1. You must have LAMP/XAMP or another server with php 5.4 or higher;

2. You must config your virtual host(apache config example) and %hosts% file, then restart server:    
<VirtualHost %your domain%:80>
	ServerAdmin %admin email%   
  DocumentRoot %path to project%    
  ErrorLog ${APACHE_LOG_DIR}/error.log    
  CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

3. For email sending(i used gmail smtp and it works) you must to config $config['mail'] array in /inc/scripts.php
'mail' => [
    'host'          => 'smtp.gmail.com',
    'user'          => '',
    'pass'          => '',
    'auth_protocol' => 'tls',
    'port'          => 587,
    'admin_email'   => '',
    'reply_to_mail' => '',
    'reply_to_name' => '',
    'from_email'    => '',
    'from_name'     => ''
];
