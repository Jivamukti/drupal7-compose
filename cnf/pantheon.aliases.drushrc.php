<?php
  /**
   * Pantheon drush alias file, to be placed in your ~/.drush directory or the aliases
   * directory of your local Drush home. Once it's in place, clear drush cache:
   *
   * drush cc drush
   *
   * To see all your available aliases:
   *
   * drush sa
   *
   * See http://helpdesk.getpantheon.com/customer/portal/articles/411388 for details.
   */

   $aliases['jivamukti7.test'] = array(
    'uri' => 'test-jivamukti7.pantheon.io',
    'db-url' => 'mysql://pantheon:2bccddf0159045cab5278c8b39836267@dbserver.test.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in:24960/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.test.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in',
    'remote-user' => 'test.33bc5703-7175-4ab6-b922-1147b8121e81',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['jivamukti7.live'] = array(
    'uri' => 'live-jivamukti7.pantheon.io',
    'db-url' => 'mysql://pantheon:f4894037094d4791bbd6eea90ca08cc7@dbserver.live.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in:26001/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.live.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in',
    'remote-user' => 'live.33bc5703-7175-4ab6-b922-1147b8121e81',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  $aliases['jivamukti7.dev'] = array(
    'uri' => 'dev-jivamukti7.pantheon.io',
    'db-url' => 'mysql://pantheon:96d28431e83a4d6da60faef63d5b9711@dbserver.dev.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in:26000/pantheon',
    'db-allows-remote' => TRUE,
    'remote-host' => 'appserver.dev.33bc5703-7175-4ab6-b922-1147b8121e81.drush.in',
    'remote-user' => 'dev.33bc5703-7175-4ab6-b922-1147b8121e81',
    'ssh-options' => '-p 2222 -o "AddressFamily inet"',
    'path-aliases' => array(
      '%files' => 'code/sites/default/files',
      '%drush-script' => 'drush',
     ),
  );
  
  