<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class WelcomeController extends Controller
{
    public function getIndex(){
        return view('index');
    }
    public function postChangeLangugage(Request $request){
        $lang = $request->lang;
        \Log::info("============ param ==================".$lang);
        // Validate the language
        if (in_array($lang, ['en', 'de'])) {
            // Set the locale
            session(['locale' => $lang]);
            App::setLocale($lang);
    
            // Load translations from the lang folder
            $translationKeys = [
                'about','weidelonomics','faqs','team','roadmap', 'buy now','elon_musk_supporter','elon_musk_publicly_supporter','tweet','conversation_between_elon_musk','january_9th','weidel_coin','weidel_coin_solana',
                'weidel_coin_combines_fun','buy_on_raydium','buy_on_jupiter','team_building_promotion','the_launch_weidel_coin','january_schedule','establishing_dedicated','marketing_campaigns','initial_community','listings_community_expansion','listings_well-known',
                'community_growth_through','exchange_listings','listings_on_major_crypto','long-term_scaling','liquidity','a_stable_foundation','the_team','support_and_motivation','marketing','funding_viral_campaigns','major_exchanges','listing_fee_and_partnerships',
                'frequently_asked','is_this_a_joke_project','of_course_seriously','whats_the_value_of_weidel_coin','priceless_but','why_should_i_invest','because_winning_is','a_coin_everyone','weidel_coin_is_supported','copyright','learn_more','copy','coped','vote_for_alice_weidel','only_the_afd_can_save_germany'
            ];
    
            $translations = [];
            foreach ($translationKeys as $key) {
                $translations[$key] = __($key);
            }
    
            // Return JSON response
            return response()->json([
                'success'    => true,
                'translated' => $translations,
            ]);
        }
    
        // Return error response for unsupported languages
        return response()->json([
            'success' => false,
            'message' => 'Unsupported language',
        ]);
    
    }
    public function detectLanguage(Request $request)
    {
        // Check for stored language in session or local storage
        // if (session()->has('locale')) {
        //     return response()->json(['lang' => session('locale')]);
        // }

        // Detect user's IP address
        $ip = $request->ip(); // Use a real IP detection method in production
        $defaultLanguage = 'en'; // Fallback language

        try {
            // Geolocation API to detect country
            $ip = \Request::getClientIp();
            $url = 'http://www.geoplugin.net/json.gp?ip=' . $ip;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    
            $output = curl_exec($ch);
            curl_close($ch);
    
            $location = $output;
            $location = json_decode($output, true);
            // dd($location);
            \Log::info("=================== detecte coutnry  ============ ".$location['geoplugin_countryName']);
            \Log::info("=================== detecte coutnry lang code ============ ".$location['geoplugin_countryCode']);


            if (!is_null($location) && $location['geoplugin_status'] != 404) {
                $countryCode = $location['geoplugin_countryCode'];
               
                if (strtolower($countryCode) === 'de') {
                    $defaultLanguage = 'de'; // Default to German if in Germany
                    \Log::info("=================== detecte Language  ============ ".$defaultLanguage);
                }
                // dd($countryCode,strtolower($countryCode),$defaultLanguage);
            } else {
                $defaultLanguage ='en';
            }
        } catch (\Exception $e) {
            $defaultLanguage ='en';
        }
        \Log::info("-------------defaultLanguage  ============".$defaultLanguage);
        // Set default language in session
        session(['locale' => $defaultLanguage]);
        App::setLocale($defaultLanguage);

        return response()->json(['lang' => $defaultLanguage]);   
    }
}