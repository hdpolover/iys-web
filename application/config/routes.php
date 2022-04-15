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


$route['about']             = 'FrontController/about';
$route['team']              = 'FrontController/ourTeam';
$route['partner-sponsor']   = 'FrontController/partnerSponsor';
$route['faq']               = 'FrontController/faq';
$route['privacy-policy']    = 'FrontController/privacyPolicy';

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


// ===== USER =====
$route['sign-in']           = 'FrontController/signIn';
$route['sign-up']           = 'FrontController/signUp';
$route['register']          = 'usr/AuthController/register';
$route['login']             = 'usr/AuthController/login';
$route['logout']            = 'usr/AuthController/logout';
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



$route['tes'] = 'Welcome/tes';
