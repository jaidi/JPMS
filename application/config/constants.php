<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');



/*		******************************************
						My Constants
		******************************************	*/

define('VS',	'vs');
define('SR',	'sr');
define('PGR',	'pgr');

/*		**************Drugs array********************/
$DRUGS_ARRAY= array(
  'ponstan',
  'aspirin',
  'ephidreen',
  'pencilin',
  'belladona',
  'rhus tox',
  'arnica',
  'zestril',
  'loprin',
  'sharbat-e-toot siyah',
  'sharbat-e-muqawiy-e-qalb',
  'arq-e-takhum balngoo');

define('DRUGS',serialize($DRUGS_ARRAY));
/* 		*****************drug routes***************/
$DRUGS_ROUTES_ARRAY = array(
  'oral',
  'vein');
define('DRUG_ROUTES',serialize($DRUGS_ROUTES_ARRAY));

/*		**************Hours array********************/
$HOURS_ARRAY = array(
	'00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11',
	'12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'
);
define('HOURS',serialize($HOURS_ARRAY));

$MINUTES_ARRAY = array(
	'00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10',
	'11', '12', '13', '14', '15', '16', '17', '18', '19', '20',
	'21', '22', '23', '24', '25', '26', '27', '28', '29', '30',
	'31', '32', '33', '34', '35', '36', '37', '38', '39', '40',
	'41', '42', '43', '44', '45', '46', '47', '48', '49', '50',
	'51', '52', '53', '54', '55', '56', '57', '58', '59'
);

define('GENERAL_COLUMN_ID',	'id');
define('GENERAL_COLUMN_ID_CREATED_BY',	'created_by');
define('GENERAL_COLUMN_CREATED_AT',	'created_at');
define('GENERAL_COLUMN_UPDATED_AT',	'updated_at');
define('GENERAL_COLUMN_ALMONER_NUMBER',	'almoner_number');

define('DPN_TABLE',	'dpn');
	define('DPN_COLUMN_PULSE_RATE',			'pulse_rate');
	define('DPN_COLUMN_BLOOD_PRESSURE',		'blood_pressure');
	define('DPN_COLUMN_RESPIRATORY_RATE',	'respiratory_rate');
	define('DPN_COLUMN_TEMPERATURE',		'temperature');
	define('DPN_COLUMN_CVP',				'cvp');
	define('DPN_COLUMN_PAIN',				'pain');
	define('DPN_COLUMN_PROBLEMS',			'problems');
	define('DPN_COLUMN_PLAN',				'plan');
	define('DPN_COLUMN_ACTION',				'action');

define('PATIENT_BIO_DATA_TABLE', 'patient_bio_data');
	define('PATIENT_BIO_DATA_COLUMN_NAME',	'name');
	define('PATIENT_BIO_DATA_COLUMN_AGE',	'age');
	define('PATIENT_BIO_DATA_COLUMN_SEX',	'sex');
	define('PATIENT_BIO_DATA_COLUMN_FATHER_NAME',	'father_name');
	define('PATIENT_BIO_DATA_COLUMN_OCCUPATION',	'occupation');
	define('PATIENT_BIO_DATA_COLUMN_ADDRESS',	'address');
	define('PATIENT_BIO_DATA_COLUMN_TELEPHONE_NUMBER',	'telephone_number');
	define('PATIENT_BIO_DATA_COLUMN_DATE_OF_ADMISSION',	'date_of_admission');
	define('PATIENT_BIO_DATA_COLUMN_ADMITTED_FROM',	'admitted_from');


define('MINUTES', serialize($MINUTES_ARRAY));
/* End of file constants.php */
/* Location: ./application/config/constants.php */