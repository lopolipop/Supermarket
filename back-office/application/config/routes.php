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
$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route[''] = 'PackageCL/domestic_package';

$route['login'] = 'Admin/login';
$route['logout'] = 'Admin/logout';
$route['logincheck'] = 'Admin/logincheck';
$route['mainmenu'] = 'Admin/mainmenu';

$route['domestic-package'] = 'PackageCL/domestic_package';
$route['outbound-package'] = 'PackageCL/outbound_package';
$route['filter-tour'] = 'PackageCL/filter';
$route['delete-package'] = 'PackageCL/delete_package';
$route['edit-domestic-package'] = 'PackageCL/edit_domestic_package';
$route['edit-domestic-package-condition'] = 'PackageCL/edit_domestic_package_condition';
$route['edit-outbound-package'] = 'PackageCL/edit_outbound_package';
$route['edit-outbound-package-condition'] = 'PackageCL/edit_outbound_package_condition';
$route['update-domestic-package'] = 'PackageCL/update_domestic_package';
$route['update-outbound-package'] = 'PackageCL/update_outbound_package';
$route['update-domestic-package-condition'] = 'PackageCL/update_domestic_package_condition';
$route['update-outbound-package-condition'] = 'PackageCL/update_outbound_package_condition';
$route['upload-cover'] = 'PackageCL/upload_cover';
$route['new-domestic-package'] = 'PackageCL/new_domestic_package';
$route['new-outbound-package'] = 'PackageCL/new_outbound_package';
$route['insert-domestic-package'] = 'PackageCL/insert_domestic_package';
$route['insert-outbound-package'] = 'PackageCL/insert_outbound_package';
$route['change-public'] = 'PackageCL/change_public';
$route['change-highlight'] = 'PackageCL/change_highlight';
$route['update-itinerary'] = 'PackageCL/update_itinerary';
$route['edit-domestic-package-service'] = 'PackageCL/edit_domestic_package_service';
$route['edit-outbound-package-service'] = 'PackageCL/edit_outbound_package_service';
$route['update-domestic-package-service'] = 'PackageCL/update_domestic_package_service';
$route['update-outbound-package-service'] = 'PackageCL/update_outbound_package_service';
$route['domestic-location-data'] = 'PackageCL/domestic_location_data';
$route['outbound-location-data'] = 'PackageCL/outbound_location_data';
$route['insert-domestic-location'] = 'PackageCL/insert_domestic_location';
$route['insert-outbound-location'] = 'PackageCL/insert_outbound_location';
$route['check-nameEN'] = 'PackageCL/check_nameEN';
$route['delete-domestic-location'] = 'PackageCL/delete_domestic_location';
$route['delete-outbound-location'] = 'PackageCL/delete_outbound_location';

$route['mm-std-main'] = 'Admin/StdTour';
$route['mm-std-programtour'] = 'Admin/StdTourDetail';
$route['mm-std-editprogram'] = '';
$route['mm-std-newprogram'] = 'Admin/StdTourNew';
$route['mm-locationdata'] = 'Admin/Location';
$route['mm-addCity'] = 'Admin/addCity';
$route['mm-delCity'] = 'Admin/delCity';
$route['mm-place'] = 'Admin/Place';
$route['mm-addPlace'] = 'Admin/addPlace';
$route['mm-delPlace'] = 'Admin/DelPlace';
$route['mm-editPlace'] = 'Admin/editPlace';
$route['mm-editCity'] = 'Admin/editCity';
$route['mm-locationimg'] = 'Admin/LocationImg';

$route['st-hotel'] = 'Admin/hotel';
$route['st-hotelAll'] = 'Admin/HotelAll';
$route['st-addHotel'] = 'Admin/addHotel';
$route['st-delHotel'] = 'Admin/DelHotel';
$route['st-addRoom'] = 'Admin/addRoom';
$route['st-addCityHotel'] = 'Admin/addCityHotel';
$route['st-vehicle'] = 'Admin/Vehicle';
$route['st-vehicleall'] = 'Admin/VehiAll';
$route['st-newVehi'] = 'Admin/newVehi';
$route['st-addVehiRoute'] = 'Admin/addVehiRoute';
$route['st-meal'] = 'Admin/Meal';
$route['st-mealAll'] = 'Admin/MealAll';
$route['st-delMealCity'] = 'Admin/DelMealCity';
$route['st-addCityMeal'] = 'Admin/addCityMeal';
$route['st-addMeal'] = 'Admin/addMeal';
$route['st-ticket'] = 'Admin/Ticket';
$route['st-addCityTicket'] = 'Admin/addCityTicket';
$route['st-flightAll'] = 'Admin/FlightAll';
$route['st-delTicketCity'] = 'Admin/DelTicketCity';
$route['st-airline'] = 'Admin/Airline';
$route['st-addAirline'] = 'Admin/addAirline';
$route['st-addCityDestination'] = 'Admin/addCityDestination';
$route['st-editFlight'] = 'Admin/editFlight';
$route['st-addFlight'] = 'Admin/addFlight';
$route['st-delFlight'] = 'Admin/delFlight';
$route['st-guide'] = 'Admin/Guide';
$route['st-addGuideSta'] = 'Admin/addGuideSta';
$route['st-delGuide'] = 'Admin/delGuide';
$route['st-other'] = 'Admin/OtherAll';
$route['st-addOther'] = 'Admin/addOther';
$route['st-editOther'] = 'Admin/editOther';
$route['st-delOther'] = 'Admin/delOther';
$route['addFreeCon'] = 'Admin/addFreeCon';
$route['ChangeSugguest'] = 'Admin/ChangeSugguest';
$route['addVehiSize'] = 'Admin/addVehiSize';
$route['addGuideAcc'] = 'Admin/addGuideAcc';
$route['delGuide'] = 'Admin/delGuide';
$route['editGuideAcc'] = 'Admin/editGuideAcc';
$route['PriceAll'] = 'Admin/PriceAll';
$route['PriceFlight'] = 'Admin/PriceFlight';
$route['setProfit'] = 'Admin/setProfit';
$route['editCurrency'] = 'Admin/editCurrency';
$route['DelRoom'] = 'Admin/DelRoom';
$route['addCityVehi'] = 'Admin/addCityVehi';
$route['editVehi'] = 'Admin/editVehi';
$route['addPriceConIn'] = 'Admin/addPriceConIn';
$route['DelPriceCon'] = 'Admin/DelPriceCon';
$route['addFreeConVehi'] = 'Admin/addFreeConVehi';
$route['DelFreepax'] = 'Admin/DelFreepax';

