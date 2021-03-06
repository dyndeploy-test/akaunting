<?php

return [

    'company' => [
        'name'              => 'Nume',
        'email'             => 'Email',
        'phone'             => 'Telefon',
        'address'           => 'Adresă',
        'logo'              => 'Siglă',
    ],
    'localisation' => [
        'tab'               => 'Localizare',
        'financial_start'   => 'Financial Year Start',
        'timezone'          => 'Fus orar',
        'date' => [
            'format'        => 'Format dată',
            'separator'     => 'Separator data',
            'dash'          => 'Cratimă (-)',
            'dot'           => 'Punct (.)',
            'comma'         => 'Virgulă (,)',
            'slash'         => 'Slash (/)',
            'space'         => 'Spaţiu ( )',
        ],
        'percent' => [
            'title'         => 'Procent (%) Pozitie',
            'before'        => 'Inainte de Numar',
            'after'         => 'Dupa Numar',
        ],
    ],
    'invoice' => [
        'tab'               => 'Factură',
        'prefix'            => 'Prefix',
        'digit'             => 'Zecimale Numar',
        'next'              => 'Următorul număr',
        'logo'              => 'Siglă',
        'custom'            => 'Personalizat',
        'item_name'         => 'Denumire articol',
        'item'              => 'Articole',
        'product'           => 'Produse',
        'service'           => 'Servicii',
        'price_name'        => 'Price Name',
        'price'             => 'Preț',
        'rate'              => 'Rate',
        'quantity_name'     => 'Quantity Name',
        'quantity'          => 'Cantitate',
    ],
    'default' => [
        'tab'               => 'Implicit',
        'account'           => 'Cont implicit',
        'currency'          => 'Moneda implicita',
        'tax'               => 'Rata Impozitare Implicita',
        'payment'           => 'Metodă de plată prestabilită',
        'language'          => 'Limba implicita',
    ],
    'email' => [
        'protocol'          => 'Protocol',
        'php'               => 'Mail PHP',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'Gazdă SMTP',
            'port'          => 'Port SMTP',
            'username'      => 'Utilizator SMTP',
            'password'      => 'Parola SMTP',
            'encryption'    => 'Securitate SMTP',
            'none'          => 'Nici una',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Cale Sendmail',
        'log'               => 'Jurnal Email-uri',
    ],
    'scheduling' => [
        'tab'               => 'Planificare',
        'send_invoice'      => 'Trimite memento pentru factura',
        'invoice_days'      => 'Trimite dupa Zilele Cuvenite',
        'send_bill'         => 'Trimite memento pentru factura',
        'bill_days'         => 'Trimite Inainte de Zilele Cuvenite',
        'cron_command'      => 'Comanda Cron',
        'schedule_time'     => 'Ora la care ruleaza',
        'send_item_reminder'=> 'Send Item Reminder',
        'item_stocks'       => 'Send When Item Stock',
    ],
    'appearance' => [
        'tab'               => 'Aspect',
        'theme'             => 'Temă',
        'light'             => 'Deschis',
        'dark'              => 'Inchis',
        'list_limit'        => 'Rezultate pe pagina',
        'use_gravatar'      => 'Foloseste Gravatar',
    ],
    'system' => [
        'tab'               => 'Sistem',
        'session' => [
            'lifetime'      => 'Durata de viaţă a sesiunii (minute)',
            'handler'       => 'Manager Sesiune',
            'file'          => 'Fişier',
            'database'      => 'Bază de date',
        ],
        'file_size'         => 'Mărime maximă a fișierului (MB)',
        'file_types'        => 'Tipuri de fișiere permise',
    ],

];
