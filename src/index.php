<?php
require_once(__DIR__ . "/../vendor/httpful/bootstrap.php");

class NoofClient {
  private $base_url = "https://api.nooflab.tools";
  private $api_key = "";

  function __construct(string $api_key) {
    $this->api_key = $api_key;
  }

  function get_commuting_regions () {
    $url = $this->base_url . "/v1/commuting_regions";
    $response = \Httpful\Request::get($url)
      ->addHeader("Authorization", "Bearer " . $this->api_key)
      ->expectsJson()
      ->send();
    return $response->body;
  }

  function get_optimal_locations ($postal_codes, $commuting_region) {
    $url = $this->base_url . "/v1/optimal_locations";
    $response = \Httpful\Request::post($url)
      ->addHeader("Authorization", "Bearer " . $this->api_key)
      ->expectsJson()
      ->sendsJson()
      ->body(json_encode(array(
        "commuting_region" => $commuting_region,
        "postal_codes" => $postal_codes
      )))
      ->send();

    return $response->body;
  }
}

?>
