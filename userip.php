<? php
/**
 * Plugin Name:       ip function 
 * Plugin URI:        http://fidatok.website
 * Description:       Senior Card Discount . This Plugin Helps the User to Create a Custom Discount Function.the certain User are  avail for this discount. As per the Credit Card or Paypal or may other option.
                      
 * Version:          1.2
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Fidatok Rahman
 * Author URI:        http:///php.fidatok.website
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fidatok_World
 * Domain Path:       /languages
 */

 // Display User IP in WordPress

 function ipadress(){
  $user_ip = getenv('REMOTE_ADDR');
  $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
  $country = $geo["geoplugin_countryName"];
  echo $country ;
/*
  switch ($country) {
    case "India":
        header('Location:http://domain.com/hi');
        break;
    case "United States":
        header('Location:http://domain.com/en');
        break;
    default:   
        header('Location:http://domain.com');  
  }
*/
 }
 add_action('init' , 'ipadress');
?>