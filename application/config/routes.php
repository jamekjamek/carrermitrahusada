<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller']                = 'user_job';

$route['job']                               = 'user_job';
$route['job/detail/(:any)']                 = 'user_job/detail/$1';
$route['job/submitjob/(:any)']              = 'user_job/submit/$1';

$route['auth']                              = 'user_auth';
$route['auth/register']                     = 'user_auth/register';
$route['auth/logout']                       = 'user_auth/logout';

$route['profile/index']                     = 'user_profile';

$route['profile/family']                    = 'user_profile/family';
$route['profile/family/add']                = 'user_profile/addfamily';
$route['profile/family/delete/(:any)']      = 'user_profile/deletefamily/$1';

$route['profile/education']                 = 'user_profile/education';
$route['profile/getregency']                = 'user_profile/getregency';


$route['profile/nonformaleducation']        = 'user_profile/nonformaleducation';
$route['profile/organisation']              = 'user_profile/organisation';
$route['profile/training']                  = 'user_profile/training';
$route['profile/language']                  = 'user_profile/language';

$route['profile/jobhistory']                = 'user_profile/jobhistory';
$route['profile/jobhistory/add']            = 'user_profile/createjobhistory';
$route['profile/jobhistory/delete/(:any)']  = 'user_profile/deletehistory/$1';


$route['profile/etc']                       = 'user_profile/etc';
$route['profile/cv']                        = 'user_profile/cv';
$route['profile/upload']                    = 'user_profile/uploadcv';

$route['emergency']                         = 'user_profile/emergency';



//ADMIN
$route['dashboard']                          = 'Admin_dashboard';

$route['404_override']                      = '';
$route['translate_uri_dashes']              = FALSE;
