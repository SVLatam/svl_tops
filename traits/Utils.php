<?php

namespace Traits;

trait Utils {
  protected $key = '908A766F9F8E84DCCB9408113DC7036E';

  private function getImagen($steamid) {
    if ($steamid == 'STEAM_ID_LAN') {
      return 'https://i.imgur.com/fnWHQPW.png';
    }
    return $this->getSteamImg($steamid);
  }

  private function getSteamImg($steamid64) {
    $curl = curl_init();

    $steamid64 = $this->getSteam64($steamid64);
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key={$this->key}&steamids={$steamid64}&format=json",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $json = json_decode($response, false);
    $avatar = $json->response->players[0]->avatarfull;

    return $avatar;
  }

  private function getSteam64($steamid) {

    $split = explode(":", $steamid); // STEAM_?:?:??????? format

    $x = substr($split[0], 6, 1);
    $y = $split[1];
    $z = $split[2];

    $steamid64 = $z;
    $steamid64 = $steamid64 * 2;
    $steamid64 = bcadd($steamid64, 61197960265728);

    if ($y == 1) {
      $steamid64 = $steamid64 + 1;
    };
    $steamid64 = "765$steamid64";

    return $steamid64;
  }
}

