<?php

namespace Sample;

use PaypalPayoutsSDK\Core\PayPalHttpClient;
use PaypalPayoutsSDK\Core\ProductionEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }
    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        // $clientId = getenv("CLIENT_ID") ?: "AalYeTs7Eclg0nGR_js9TgngImW8tPRoTCOHvbDuEHfjNyjjyGRhiK5t3lfJGxcMobtgtlBycnr1MI8L";
        // $clientSecret = getenv("CLIENT_SECRET") ?: "EOyVrpvlJh8tFL7tGLDyZZCeLCL9tJ3iDluYmfYxCkQ_rZPrULtPGO9Slc0tP5EanllYFm58WMrsI-b7";
        
        $clientId = getenv("CLIENT_ID") ?: "AYnLxsDAx9N6OeYbRJ85tv2Hg2BtW5LNpuTEoHDxaw7z7M6JsCVLy010_nrDiVv-UJLfI17QvhJOWLNo";
        $clientSecret = getenv("CLIENT_SECRET") ?: "EFBwgqahCuEuDtlG2qTpdsVi61cyHJ8QmS_IxmEUy1cxEWUYi9naCQ8XMdDP-7uOGGBCPzRHpA401d2g";
        return new ProductionEnvironment($clientId, $clientSecret);
    }
}
