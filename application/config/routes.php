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
$route['default_controller'] = 'Leyli';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Home page routes
$route['Home'] = 'Leyli';

//About Hissesi
$route['About'] = 'Leyli/about';


//Elaqe hissesi
$route['Contact'] = 'Leyli/contact';

//Labaratoriya hissesi
$route['Labaratory'] = 'Leyli/labaratory';



//Xeberler hissesi
$route['News'] = 'Leyli/news';

//Tedbirler hissesi
$route['Actions'] = 'Leyli/actions';

//Bakalavr hissesi
$route['Bachelor'] = 'Leyli/bachelor';

//Bakalavr ixtisaslar hissesi
$route['Bachelor/Speciality'] = 'Leyli/bachelor_speciality';

//Bakalavr tek ixtisas hissesi
$route['Bachelor/Speciality/(.*)'] = 'Leyli/bachelor_speciality_single/$1';


//Master hissesi
$route['Master'] = 'Leyli/master';

//Master ixtisaslar hissesi
$route['Master/Speciality'] = 'Leyli/master_speciality';

//Master tek ixtisas hissesi
$route['Master/Speciality/(.*)'] = 'Leyli/master_speciality_single/$1';

//Doktorantura hissesi
$route['Doctorate'] = 'Leyli/doctorate';

//Doktorantura ixtisaslar hissesi
$route['Doctorate/Speciality'] = 'Leyli/doctorate_speciality';

//Doktorantura tek ixtisas hissesi
$route['Doctorate/Speciality/(.*)'] = 'Leyli/doctorate_speciality_single/$1';

//Tedbirler hissesi single page
$route['Single_page_events/(.*)'] = 'Leyli/single_page_events/$1';


//Xeberler hissesi single page
$route['Single_page_news/(.*)'] = 'Leyli/single_page_news/$1';


//Kafedra hissesi
$route['Department'] = 'Leyli/department';

//Kafedra elaqe hissesi
$route['Department_Contact'] = 'Leyli/department_contact';

//Kafedra mellimler hissesi
$route['Department_Teachers'] = 'Leyli/department_teachers';

//Kafedra ixtisaslar hissesi
$route['Department_Specialities'] = 'Leyli/department_specialities';

//Kafedra labaratoriyalar hissesi
$route['Department_Labaratories'] = 'Leyli/department_labaratory';

//qaqli netersen netersen







//==========  Admin panele aid ===========

//Dashboard
$route['himalaY'] = 'Mecnun/index';

//Xeberler
$route['himalaY_xeberler'] = 'Mecnun/news';
$route['himalaY_xeber_elave_et'] = 'Mecnun/add_news';
$route['himalaY_xeber_elave_et_act'] = 'Mecnun/add_news_act';
$route['himalaY_xeber_sil/(.*)'] = 'Mecnun/delete_news/$1';
$route['himalaY_xeber_duzenle/(.*)'] = 'Mecnun/update_news/$1';
$route['himalaY_xeber_duzenle_act/(.*)'] = 'Mecnun/update_news_act/$1';



//Slider
$route['himalaY_slider'] = 'Mecnun/slider';
$route['himalaY_slider_elave_et'] = 'Mecnun/add_slider';




//Tədbirlər
$route['himalaY_tedbirler'] = 'Mecnun/events';
$route['himalaY_tedbirler_elave_et'] = 'Mecnun/add_events';



//Muellimler
$route['himalaY_muellimler'] = 'Mecnun/teachers';
$route['himalaY_muellimler_elave_et'] = 'Mecnun/add_teachers';



//Laboratoriya
$route['himalaY_laboratoriya'] = 'Mecnun/laboratory';





//Linkler
$route['himalaY_link'] = 'Mecnun/link';
$route['himalaY_link_elave_et'] = 'Mecnun/add_link';



//Haqqimizda
$route['himalaY_haqqimizda'] = 'Mecnun/about';



//Bakalavr
$route['himalaY_bakalavr'] = 'Mecnun/bachelor';
$route['himalaY_bakalavr_ixtisaslar'] = 'Mecnun/bachelor_specialities';
$route['himalaY_bakalavr_ixtisas_elave_et'] = 'Mecnun/add_bachelor_speciality';






