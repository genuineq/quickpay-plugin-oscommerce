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

define('TAB_QUICKPAY_TRANSACTION','Quickpay Transaction [%s]');
define('QUICKPAY_AUTHORISED','authorised');
define('QUICKPAY_CAPTURED','captured');
define('QUICKPAY_PART_CAPTURED','part captured');
define('QUICKPAY_REFUNDED','refunded');
define('QUICKPAY_PART_REFUNDED','part refunded');
define('QUICKPAY_REVERSED','reversed');
define('QUICKPAY_ERROR','ERROR %s');
define('ENTRY_QUICKPAY_TRANSACTION_TYPE','reversed');
define('ENTRY_QUICKPAY_PAYMENT_LINK','reversed');
define('ENTRY_QUICKPAY_TRANSACTION', 'QuickPay balance:');
define('ENTRY_QUICKPAY_CARDHASH', 'Transaction type:');
define('IMAGE_TRANSACTION_CAPTURE_INFO', 'Capture transaction');
define('IMAGE_TRANSACTION_REVERSE_INFO', 'Cancel payment');
define('IMAGE_TRANSACTION_CREDIT_INFO', 'Credit payment');
define('IMAGE_TRANSACTION_TIME_INFO_GREEN', 'Capture possible wihtin PBS-guaranteed period');
define('IMAGE_TRANSACTION_TIME_INFO_YELLOW', 'Last day of PBS-guaranteed capture');
define('IMAGE_TRANSACTION_TIME_INFO_RED', 'Last day of PBS-guaranteed capture passedd');
define('INFO_QUICKPAY_CAPTURED', 'Payment is captured');
define('INFO_QUICKPAY_CREDITED', 'Amount is credited');
define('INFO_QUICKPAY_REVERSED', 'Payment is cancelled');
define('ENTRY_QUICKPAY_TRANSACTION_ID', 'Transaction-id:');
define('CONFIRM_REVERSE', 'Do you want to cancel this payment?');
define('CONFIRM_CAPTURE', 'Warning: Transaction amount is not identical to order amount. Do you want to capture the payment?');
define('CONFIRM_CREDIT', 'Do you want to credit the customer this amout?');
define('PENDING_STATUS', 'Awaiting aquirer approval.');
define('PAYMENTLINK_INFO', 'Send this link to customer if transaction problem.');
define('SUBSCRIPTION_ADMIN'	, 'Subscription payment and recurring subscription payment is not implemented in this basic free version.<br>Use the Quickpay manager for administration. Please contact <a href="mailto:info@blkom.dk" ><b>developer</b></a> for implementation of extended subscription version<br>');
define('ENTRY_QUICKPAY_STATUS','Gateway status');
if (!defined('ENTRY_ADD_COMMENT')) define('ENTRY_ADD_COMMENT','Comment:');
