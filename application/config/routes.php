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
$route['default_controller'] = 'index';
$route['404_override'] = 'pages/error';
$route['translate_uri_dashes'] = FALSE;

# API ROUTES
$route['api/home']                      = 'api/pages/home';
$route['api/what-is-human-trafficking'] = 'api/pages/what_is_human_traffiking';
$route['api/what-is-sex-trafficking']   = 'api/pages/what_is_sex_traffiking';
$route['api/facts-and-statistics']      = 'api/pages/fact_and_stats';
$route['api/policy-and-legislation']    = 'api/pages/policy_and_legislation';
$route['api/corporate-partners']        = 'api/pages/corporate_partners';
$route['api/start-a-fundraiser']        = 'api/pages/start_a_fundraiser';
$route['api/help-and-resources']        = 'api/pages/help_and_resources';
$route['api/traffik-and-sex']           = 'api/pages/traffik_and_sex';
$route['api/national-directory']        = 'api/pages/national_directory';
$route['api/current-affairs']           = 'api/pages/current_affairs';
$route['api/rescue-stories']            = 'api/pages/rescue_stories';
$route['api/rescue-story-detail']       = 'api/pages/rescue_story_detail';
$route['api/blog-detail']               = 'api/pages/blog_detail';
$route['api/news-detail']               = 'api/pages/news_detail';
$route['api/share-story']               = 'api/pages/share_story';
$route['api/project-unite']             = 'api/pages/project_unit';
$route['api/contact-us']                = 'api/pages/contact_us';
$route['api/save-contact-message']      = 'api/pages/save_contact_message';
$route['api/our-sponsors']              = 'api/pages/our_sponsors';
$route['api/donate-now']                = 'api/pages/donate_now';
$route['api/donate-pay']                = 'api/pages/donate_pay_now';
$route['api/near-events']               = 'api/pages/events_near_you';
$route['api/search-nearby-events']      = 'api/pages/search_nearby_events';



# ADMIN
$route['admin/login']     = 'admin/index/login';
$route['admin/logout']    = 'admin/index/logout';
$route['admin/meta-info'] = 'admin/Meta_info/index';
$route['admin/pending-proof'] = 'admin/delivery_proof';
$route['admin/rejected-proof'] = 'admin/delivery_proof';
$route['admin/accepted-proof'] = 'admin/delivery_proof';
$route['admin/delivery_proof/manage/(:any)'] = 'admin/delivery_proof/manage';
$route['admin/meta-info/manage'] = 'admin/Meta_info/manage';
$route['admin/meta-info/manage/(:any)'] = 'admin/Meta_info/manage/$1';
$route['admin/meta-info/delete/(:any)'] = 'admin/Meta_info/delete/$1';
$route['admin/settings/clear-cache'] = 'admin/settings/clear_cashe';
