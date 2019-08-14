<?php

namespace AppBundle\Service;

class GitHub
{

    private $login;

    public function __construct($username) {
        $this->login = $username;
    }

    private function performRequest($get) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.github.com'.$get.'?client_id=e76662be18bf281eccab&client_secret=6dfc73b0586297a73a326b6f3eac9c1d2629b95a');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP');
        
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public function isUserExists() {
        $result = $this->performRequest('/users/'.$this->login);
        
        if (!isset($result['login'])) {
            return $result['message'];
        } else {
            return true;
        }
    }

    public function getUserData() {
        return $this->performRequest('/users/'.$this->login);
    }

    public function getUserRepos() {
        return $this->performRequest('/users/'.$this->login.'/repos');
    }

    public function getUserLangs() {
        $repos = $this->getUserRepos($this->login);

        $languages = array();
        $divider   = 0;
        
        foreach ($repos as $repo) {
            $repoLangs = $this->performRequest('/repos/'.$this->login.'/'.$repo['name'].'/languages');

            foreach ($repoLangs as $key => $value) {
                if(isset($languages[$key])) {
                    $languages[$key]['value'] += $value;
                } else {
                    $languages[$key] =  array('name' => $key, 'value' => $value);
                }
                $divider += $value;
            }
        }

        // Sort ASC
        usort($languages, function ($a, $b) { 
            return strnatcmp($b['value'], $a['value']); 
        });

        // Find percentage
        foreach ($languages as &$language) {
            $language['percentage'] = round(($language['value'] / $divider) * 100, 2);
        }

        return $languages;
    }
}