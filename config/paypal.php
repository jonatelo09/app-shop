<?php
return array(
    // set your paypal credential
    'client_id' => 'AQY4Qo1eqcX2GdeIw75a1T2OSLUOYUqCCRzNE_hYPbsgOnjpZGrBH27IVJt0LksOqTq53LNgkipGNPlY',
    'secret' => 'EEA8SwrWrf1wo9JGKcna0_wExmlnd1HciNSOsE_3E4hj_XsMI_Oog78dat5N_cVvdNIzVq7rKDxE3Qiq',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);