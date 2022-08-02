<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home']                          = 'Welcome/home';
$route['about']                         = 'FrontController/about';
$route['team']                          = 'FrontController/ourTeam';
$route['partner-sponsor']               = 'FrontController/partnerSponsor';
$route['faq']                           = 'FrontController/faq';
$route['privacy-policy']                = 'FrontController/privacyPolicy';
$route['announcement-general']          = 'FrontController/announcementGeneral';
$route['announcement-general/(:any)']   = 'FrontController/announcementGeneralDetail/$1';

// ===== ADMIN =====
$route['admin']             = 'adm/AuthController';
// auth
$route['admin/sign-in']     = 'adm/AuthController/signIn';
$route['admin/login']       = 'adm/AuthController/login';
$route['admin/logout']      = 'adm/AuthController/logout';
// dashboard
$route['admin/dashboard']   = 'adm/DashboardController';
// announcement
$route['admin/announcement-public']                         = 'adm/AnnouncementController';
$route['admin/announcement-public/add']                     = 'adm/AnnouncementController/add';
$route['admin/announcement-public/edit/(:any)']             = 'adm/AnnouncementController/edit/$1';
$route['admin/announcement-public/store']                   = 'adm/AnnouncementController/store';
$route['admin/announcement-public/change']                  = 'adm/AnnouncementController/change';
$route['admin/announcement-public/destroy']                 = 'adm/AnnouncementController/destroy';
$route['admin/announcement-registered']                     = 'adm/AnnouncementController/rView';
$route['admin/announcement-registered/add']                 = 'adm/AnnouncementController/rAdd';
$route['admin/announcement-registered/edit/(:any)']         = 'adm/AnnouncementController/rEdit/$1';
$route['admin/announcement-registered/store']               = 'adm/AnnouncementController/rStore';
$route['admin/announcement-registered/change']              = 'adm/AnnouncementController/rChange';
$route['admin/announcement-registered/destroy']             = 'adm/AnnouncementController/rDestroy';
// ambassador
$route['admin/ambassador']                         = 'adm/AmbassadorController';
$route['admin/ambassador/add']                     = 'adm/AmbassadorController/add';
$route['admin/ambassador/edit/(:any)']             = 'adm/AmbassadorController/edit/$1';
$route['admin/ambassador/store']                   = 'adm/AmbassadorController/store';
$route['admin/ambassador/change']                  = 'adm/AmbassadorController/change';
$route['admin/ambassador/destroy']                 = 'adm/AmbassadorController/destroy';
$route['admin/ambassador/change-status']           = 'adm/AmbassadorController/changeStatus';
$route['admin/ambassador/ajxGenRC']                = 'adm/AmbassadorController/generateRC';
// participant
$route['admin/participant']                     = 'adm/ParticipantController';
$route['admin/participant/add']                 = 'adm/ParticipantController/add';
$route['admin/participant/change-password']     = 'adm/ParticipantController/changePassword';
$route['admin/participant/edit/(:any)']         = 'adm/ParticipantController/edit/$1';
$route['admin/participant/checked']             = 'adm/ParticipantController/checked';
$route['admin/participant/export/(:any)']       = 'adm/ParticipantController/export/$1';
$route['admin/participant/(:any)']              = 'adm/ParticipantController/detail/$1';
// payment
$route['admin/payment']                     = 'adm/PaymentController';
$route['admin/payment/add']                 = 'adm/PaymentController/add';
$route['admin/payment/history/(:any)']      = 'adm/PaymentController/history/$1';
$route['admin/payment/validation']          = 'adm/PaymentController/validation';

// master payment
$route['admin/master/payment-type']                  = 'adm/master/PaymentTypeController';
$route['admin/master/payment-type/add']              = 'adm/master/PaymentTypeController/add';
$route['admin/master/payment-type/edit/(:any)']      = 'adm/master/PaymentTypeController/edit/$1';
$route['admin/master/payment-type/store']            = 'adm/master/PaymentTypeController/store';
$route['admin/master/payment-type/change']           = 'adm/master/PaymentTypeController/change';
$route['admin/master/payment-type/destroy']          = 'adm/master/PaymentTypeController/destroy';


// ===== USER =====
$route['sign-in']               = 'FrontController/signIn';
$route['sign-up']               = 'FrontController/signUp';
$route['register']              = 'usr/AuthController/register';
$route['login']                 = 'usr/AuthController/login';
$route['logout']                = 'usr/AuthController/logout';
$route['verif-email/(:any)']    = 'FrontController/verifEmail/$1';
$route['resend-email/(:any)']   = 'FrontController/resendEmail/$1';
// announcement
$route['announcement']          = 'usr/AnnouncementController';
$route['announcement/(:any)']   = 'usr/AnnouncementController/detail/$1';
// personal-info
$route['personal-info']                 = 'usr/ParticipantDetailController';
$route['personal-info/ajxPostBasic']    = 'usr/ParticipantDetailController/ajxPostBasic';
$route['personal-info/ajxPostOther']    = 'usr/ParticipantDetailController/ajxPostOther';
$route['personal-info/ajxPostEssay']    = 'usr/ParticipantDetailController/ajxPostEssay';
$route['personal-info/ajxPostProgram']  = 'usr/ParticipantDetailController/ajxPostProgram';
$route['personal-info/submit']          = 'usr/ParticipantDetailController/submit';
$route['personal-info/update']          = 'usr/ParticipantDetailController/update';
$route['personal-info/update-save']     = 'usr/ParticipantDetailController/updateSave';
$route['personal-info/download-qr']     = 'usr/ParticipantDetailController/downloadQR';
$route['personal-info/ajxCheckRC']      = 'usr/ParticipantDetailController/checkRC';
$route['personal-info-completed']       = 'usr/ParticipantDetailController/afterSubmit';
// payments
$route['payment']                           = 'usr/PaymentController';
$route['payment/choose-method']             = 'usr/PaymentController/choosePayment';
$route['payment/token']                     = 'usr/PaymentController/token';
$route['payment/finish']                    = 'usr/PaymentController/finish';
$route['payment/history/(:any)']            = 'usr/PaymentController/history/$1';
$route['payment/status/(:any)']             = 'usr/PaymentController/status/$1';
$route['payment/status-paypal/(:any)']      = 'usr/PaymentController/statusPaypal/$1';
$route['payment/check-status']              = 'usr/PaymentController/checkStatus';
$route['payment/paypal-transaction/(:any)'] = 'usr/PaymentController/paypalTransaction/$1';
$route['payment/paypal-transaction/(:any)'] = 'usr/PaymentController/paypalTransaction/$1';

// EMAILING
$route['send-email/register'] = 'EmailController/register';



$route['tes'] = 'Welcome/tes';
