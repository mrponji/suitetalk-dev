<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SuiteTalkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        $isNSCall = $request->segment(1) === "netsuite";

        if ( $isNSCall ) {
            include_once(app_path() . "/Libraries/NetSuite/NetSuiteService.php");

            $service = new \NetSuiteService();
            $service->useRequestLevelCredentials(false);
            
            $wsRequest = new \GetDataCenterUrlsRequest();
            $wsRequest->account = NS_ACCOUNT;
            $response = $service->getDataCenterUrls($wsRequest);

            $webservicesDomain = $response->getDataCenterUrlsResult->dataCenterUrls->webservicesDomain;

            if ( isset($webservicesDomain) ) {
                define("NS_WEBSERVICES_DOMAIN", $webservicesDomain);
            }
        }
    }
}