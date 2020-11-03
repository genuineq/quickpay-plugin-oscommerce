<?php
/**
 * osCommerce, Open Source E-Commerce Solutions
 * http://www.oscommerce.com
 *
 * Copyright (c) 2020 osCommerce
 *
 * Released under the GNU General Public License
 *
 * author: Genuineq office@genuineq.com
 */

define('TAB_QUICKPAY_TRANSACTION','Quickpay Transaktion [%s]');
define('QUICKPAY_AUTHORISED','godkendt');
define('QUICKPAY_CAPTURED','gennemført');
define('QUICKPAY_PART_CAPTURED','delvis gennemført');
define('QUICKPAY_REFUNDED','krediteret');
define('QUICKPAY_PART_REFUNDED','delvis krediteret');
define('QUICKPAY_REVERSED','annulleret');
define('QUICKPAY_ERROR','FEJL %s');
define('ENTRY_QUICKPAY_TRANSACTION_TYPE','Type');
define('ENTRY_QUICKPAY_PAYMENT_LINK','Link');
define('ENTRY_QUICKPAY_TRANSACTION', 'QuickPay transaktion:');
define('ENTRY_QUICKPAY_CARDHASH', 'Type:');
define('IMAGE_TRANSACTION_CAPTURE_INFO', 'Gennemfør betaling');
define('IMAGE_TRANSACTION_REVERSE_INFO', 'Annulér betaling');
define('IMAGE_TRANSACTION_CREDIT_INFO', 'Krediter betaling');
define('IMAGE_TRANSACTION_TIME_INFO_GREEN', 'Kan stadig hæves inden for PBS-garanteret periode');
define('IMAGE_TRANSACTION_TIME_INFO_YELLOW', 'Sidste dag for PBS-garanteret hævning');
define('IMAGE_TRANSACTION_TIME_INFO_RED', 'Sidste dag for PBS-garanteret hævning er overskredet');
define('INFO_QUICKPAY_CAPTURED', 'Betalingen er gennemført');
define('INFO_QUICKPAY_CREDITED', 'Beløbet er krediteret');
define('INFO_QUICKPAY_REVERSED', 'Betalingen er annulleret');
define('ENTRY_QUICKPAY_TRANSACTION_ID', 'Transaktions-id:');
define('CONFIRM_REVERSE', 'Vil du annullere denne betaling?');
define('CONFIRM_CAPTURE', 'Advarsel: Transaktionsbeløb er ikke identisk med ordrens total. Vil du gennemføre betalingen?');
define('CONFIRM_CREDIT', 'Vil du kreditere kunden dette beløb?');
define('PENDING_STATUS', 'Afventer indløser godkendelse.');
define('PAYMENTLINK_INFO', 'Send dette link til kunde ved transaktionsproblem.');
define('SUBSCRIPTION_ADMIN'	, 'Administration af abonnement betaling samt gentagne abonnementsbetalinger er ikke implementeret i denne gratis distribuerede version.<br>Brug Quickpay manager til administration af abonnementsbetalinger. Venligst kontakt <a href="mailto:info@blkom.dk" ><b>udvikler</b></a> for implementering af gentagne abonnementsbetalinger og abonnementsadministration <br>');
define('ENTRY_QUICKPAY_STATUS','Gateway status');
if (!defined('ENTRY_ADD_COMMENT')) define('ENTRY_ADD_COMMENT','Kommentar:');
