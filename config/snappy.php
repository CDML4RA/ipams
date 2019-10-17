<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary' => base_path('wkhtmltopdf\bin\wkhtmltopdf'),
        // 'binary' => 'C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltopdf',
        'options' => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary' => base_path('wkhtmltopdf\bin\wkhtmltoimage'),
        // 'binary' => 'C:\\Program Files\\wkhtmltopdf\\bin\\wkhtmltoimage',
        'options' => array(),
    ),


);
