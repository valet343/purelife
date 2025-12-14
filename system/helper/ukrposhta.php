<?php
/*
 * @ https://EasyToYou.eu - IonCube v11 Decoder Online
 * @ PHP 7.2 & 7.3
 * @ Decoder version: 1.0.6
 * @ Release: 10/08/2022
 */

// Decoded file for php version 71.
class UkrPoshta
{
    public $lang;
    public $error = [];
    public $ecom_bearer;
    public $tracking_bearer;
    private $user_token;
    private $api_url = "https://www.ukrposhta.ua/";
    private $app;
    private $api_ver;
    private $settings;
    private $registry;
    public function __construct($registry)
    {
        $this->registry = $registry;
        if (version_compare(VERSION, "3", ">=")) {
            $this->settings = $this->config->get("shipping_ukrposhta");
        } else {
            $this->settings = $this->config->get("ukrposhta");
        }
        $this->ecom_bearer = isset($this->settings["ecom_bearer"]) ? $this->settings["ecom_bearer"] : "";
        $this->tracking_bearer = isset($this->settings["tracking_bearer"]) ? $this->settings["tracking_bearer"] : "";
        $this->setUserToken();
        $this->setApp();
        $this->setAPIVersion();
        if ($this->language->get("code") == "en" || $this->language->get("code") == "en-gb") {
            $this->setLanguage("EN");
        } else {
            if ($this->language->get("code") == "ru" || $this->language->get("code") == "ru-ru") {
                $this->setLanguage("RU");
            } else {
                $this->setLanguage();
            }
        }
    }
    public function __get($name)
    {
        return $this->registry->get($name);
    }
    public function setUserToken($token = NULL)
    {
        if ($token === NULL && isset($this->settings["user_token"])) {
            $token = $this->settings["user_token"];
        }
        $this->user_token = $token;
    }
    public function setApp($name = "ecom")
    {
        $this->app = $name;
    }
    public function setAPIVersion($version = "0.0.1")
    {
        $this->api_ver = $version;
    }
    public function setLanguage($code = "UA")
    {
        $this->lang = $code;
    }
    public function apiRequest($request_url, $parameters = false, $request_data = [], $query_type = "GET")
    {
        $url = $this->api_url . $this->app;
        if ($this->app == "status-tracking") {
            $bearer = $this->tracking_bearer;
        } else {
            $bearer = $this->ecom_bearer;
        }
        $options = [CURLOPT_HTTPHEADER => ["Authorization: Bearer " . $bearer], CURLOPT_HEADER => false, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_RETURNTRANSFER => true];
        if (isset($this->settings["curl_connecttimeout"])) {
            $options[CURLOPT_CONNECTTIMEOUT] = $this->settings["curl_connecttimeout"];
        }
        if (isset($this->settings["curl_timeout"]) && isset($this->settings["curl_connecttimeout"]) && $this->settings["curl_connecttimeout"] < $this->settings["curl_timeout"]) {
            $options[CURLOPT_TIMEOUT] = $this->settings["curl_timeout"];
        }
        if ($query_type == "GET") {
            $options[CURLOPT_HTTPHEADER][] = "Accept: application/json";
        } else {
            if ($query_type == "POST") {
                $options[CURLOPT_HTTPHEADER][] = "Content-Type: application/json";
                $options[CURLOPT_POST] = true;
            } else {
                if ($query_type == "PUT") {
                    $options[CURLOPT_HTTPHEADER][] = "Content-Type: application/json";
                    $options[CURLOPT_CUSTOMREQUEST] = "PUT";
                } else {
                    if ($query_type == "DELETE") {
                        $options[CURLOPT_HTTPHEADER][] = "Content-Type: application/json";
                        $options[CURLOPT_CUSTOMREQUEST] = "DELETE";
                    }
                }
            }
        }
        if (!empty($request_data)) {
            $options[CURLOPT_POSTFIELDS] = json_encode($request_data);
        }
        if (defined("CURLINFO_RESPONSE_CODE")) {
            $constant_name = CURLINFO_RESPONSE_CODE;
        } else {
            $constant_name = CURLINFO_HTTP_CODE;
        }
        if ($this->api_ver) {
            $url .= "/" . $this->api_ver;
        }
        if ($this->user_token) {
            $request_url .= "?token=" . $this->user_token;
        }
        if ($parameters) {
            $request_url .= $parameters;
        }
        $ch = curl_init($url . "/" . $request_url);
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        $response_code = curl_getinfo($ch, $constant_name);
        $curl_error = curl_error($ch);
        curl_close($ch);
        if (!empty($this->settings["debugging_mode"]) && $this->app != "forms/ecom") {
            $this->log->write("Ukrposhta API request: " . $query_type . "|" . $url . "/" . $request_url . "|" . json_encode($request_data));
            $this->log->write("Ukrposhta API response: " . $response);
            if ($response === false) {
                $this->log->write("cURL error: " . $curl_error);
            }
        }
        if ($response_code === 200) {
            if ($this->app == "forms/ecom") {
                $data = $response;
            } else {
                $data = json_decode($response, true);
            }
        } else {
            $this->parseErrors($response, $response_code);
            $data = false;
        }
        return $data;
    }
    private function parseErrors($response, $response_code)
    {
        $r_codes = ["100" => "Continue", "200" => "Success", "400" => "Invalid request", "401" => "Not authorized", "403" => "Forbidden", "404" => "Not found", "500" => "Internal server error"];
        if (isset($r_codes[$response_code])) {
            $error_text = "Ukrposhta error: " . $response_code . " " . $r_codes[$response_code];
        } else {
            $error_text = "Ukrposhta error: undefined error";
        }
        $this->error[$response_code] = $error_text;
        if (!empty($this->settings["debugging_mode"])) {
            $this->log->write($error_text);
        }
        $data = json_decode($response, true);
        if (is_array($data)) {
            $errors = [];
            if (isset($data["code"]) && isset($data["message"])) {
                $errors[] = $data;
            }
            if (isset($data["fieldErrors"]) && is_array($data["fieldErrors"])) {
                $errors = $data["fieldErrors"];
            }
            foreach ($errors as $error) {
                $error_text = "Ukrposhta error " . $error["code"] . ": " . $error["message"];
                $this->error[] = $error_text;
                if (!empty($this->settings["debugging_mode"])) {
                    $this->log->write($error_text);
                }
            }
        }
    }
    public function update($type)
    {
        $count = 0;
        if ($type == "references") {
            $post = ["domain" => $this->getDomain(), "extension" => "ukrposhta"];
            $options = [CURLOPT_HEADER => false, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_POST => true, CURLOPT_POSTFIELDS => $post, CURLOPT_RETURNTRANSFER => true];
            if (isset($this->settings["curl_connecttimeout"])) {
                $options[CURLOPT_CONNECTTIMEOUT] = $this->settings["curl_connecttimeout"];
            }
            if (isset($this->settings["curl_timeout"]) && isset($this->settings["curl_connecttimeout"]) && $this->settings["curl_connecttimeout"] < $this->settings["curl_timeout"]) {
                $options[CURLOPT_TIMEOUT] = $this->settings["curl_timeout"];
            }
            $ch = curl_init("https://oc-max.com/index.php?route=extension/module/ocmax/getData");
            curl_setopt_array($ch, $options);
            $response = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($response, true);
            if (0 < count($data, COUNT_RECURSIVE) - count($data)) {
                foreach ($data as $k => $v) {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "ukrposhta_references` (`type`, `value`) VALUES ('" . $k . "', '" . $this->db->escape(json_encode($v)) . "') ON DUPLICATE KEY UPDATE `value`='" . $this->db->escape(json_encode($v)) . "'");
                }
            } else {
                $data = false;
            }
            $result = $this->db->query("SHOW TABLE STATUS LIKE '" . DB_PREFIX . "ukrposhta_references'")->row;
            $count = $result["Rows"];
        } else {
            if ($type == "regions") {
                $this->setApp("address-classifier-ws");
                $this->setAPIVersion("");
                $this->setUserToken("");
                $data = $this->apiRequest("get_regions_by_region_ua");
                if ($data && !empty($data["Entries"]["Entry"]) && is_array($data["Entries"]["Entry"])) {
                    $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "ukrposhta_regions`");
                    foreach ($data["Entries"]["Entry"] as $v) {
                        $sql = "INSERT INTO `" . DB_PREFIX . "ukrposhta_regions` (`REGION_ID`, `REGION_UA`, `REGION_EN`, `REGION_RU`, `REGION_KATOTTG`, `REGION_KOATUU`) VALUES (                        '" . (int) $v["REGION_ID"] . "',\n                        '" . $this->db->escape((string) $v["REGION_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_UA"]) . "',\n\t\t\t\t\t\t'" . (int) $v["REGION_KATOTTG"] . "',\n\t\t\t\t\t\t'" . (int) $v["REGION_KOATUU"] . "'\n\t\t\t\t\t)";
                        try {
                            $this->db->query($sql);
                            $count++;
                        } catch (Exception $e) {
                            if (!empty($this->settings["debugging_mode"])) {
                                $this->log->write($e->getMessage());
                            }
                        }
                    }
                    $this->db->query("UPDATE `" . DB_PREFIX . "ukrposhta_regions` SET `REGION_RU`=`REGION_UA`");
                }
            } else {
                if ($type == "cities") {
                    $regions = $this->getRegions();
                    $this->setApp("address-classifier-ws");
                    $this->setAPIVersion("");
                    $this->setUserToken("");
                    foreach ($regions as $k => $region) {
                        $data = $this->apiRequest("get_city_by_region_id_and_district_id_and_city_ua?region_id=" . $region["REGION_ID"]);
                        if ($data && !empty($data["Entries"]["Entry"]) && is_array($data["Entries"]["Entry"])) {
                            if ($k == 0) {
                                $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "ukrposhta_cities`");
                            }
                            foreach ($data["Entries"]["Entry"] as $v) {
                                if ($v["CITY_UA"] || $v["CITY_EN"] || $v["CITY_RU"]) {
                                    if (!$v["CITY_RU"]) {
                                        if ($v["CITY_UA"]) {
                                            $v["CITY_RU"] = $v["CITY_UA"];
                                        } else {
                                            if ($v["CITY_EN"]) {
                                                $v["CITY_RU"] = $v["CITY_EN"];
                                            }
                                        }
                                    } else {
                                        if (!$v["CITY_UA"]) {
                                            if ($v["CITY_RU"]) {
                                                $v["CITY_UA"] = $v["CITY_RU"];
                                            } else {
                                                if ($v["CITY_EN"]) {
                                                    $v["CITY_UA"] = $v["CITY_EN"];
                                                }
                                            }
                                        } else {
                                            if (!$v["CITY_EN"]) {
                                                if ($v["CITY_UA"]) {
                                                    $v["CITY_EN"] = $v["CITY_UA"];
                                                } else {
                                                    if ($v["CITY_RU"]) {
                                                        $v["CITY_EN"] = $v["CITY_RU"];
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    $sql = "INSERT INTO `" . DB_PREFIX . "ukrposhta_cities` (`CITY_ID`, `CITY_UA`, `CITY_EN`, `CITY_RU`, `OLDCITY_UA`, `OLDCITY_EN`, `OLDCITY_RU`, `CITYTYPE_UA`, `CITYTYPE_EN`, `CITYTYPE_RU`, `SHORTCITYTYPE_UA`, `SHORTCITYTYPE_EN`, `SHORTCITYTYPE_RU`, `CITY_KOATUU`, `CITY_KATOTTG`, `LONGITUDE`, `LATTITUDE`, `OWNOF`, `POPULATION`, `DISTRICT_ID`, `DISTRICT_UA`, `DISTRICT_EN`, `DISTRICT_RU`, `NEW_DISTRICT_UA`, `REGION_ID`, `REGION_UA`, `REGION_EN`, `REGION_RU`, `NAME_UA`) VALUES (                        '" . (int) $v["CITY_ID"] . "',\n                        '" . $this->db->escape((string) $v["CITY_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITY_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITY_RU"]) . "', \t\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["OLDCITY_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["OLDCITY_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["OLDCITY_RU"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_RU"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_RU"]) . "',\n\t\t\t\t\t\t'" . (int) $v["CITY_KOATUU"] . "', \n\t\t\t\t\t\t'" . (int) $v["CITY_KATOTTG"] . "',\n\t\t\t\t\t\t'" . (double) $v["LONGITUDE"] . "',\t\n\t\t\t\t\t\t'" . (double) $v["LATTITUDE"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["OWNOF"]) . "',\n\t\t\t\t\t\t'" . (int) $v["POPULATION"] . "',\n\t\t\t\t\t    '" . (int) $v["DISTRICT_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_RU"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["NEW_DISTRICT_UA"]) . "', \n\t\t\t\t\t\t '" . (int) $v["REGION_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_RU"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["NAME_UA"]) . "'\n\t\t\t\t\t)";
                                    try {
                                        $this->db->query($sql);
                                        $count++;
                                    } catch (Exception $e) {
                                        if (!empty($this->settings["debugging_mode"])) {
                                            $this->log->write($e->getMessage());
                                        }
                                    }
                                }
                            }
                        }
                    }
                    $this->db->query("UPDATE `" . DB_PREFIX . "ukrposhta_cities` SET `REGION_ID`='270' WHERE `CITY_KOATUU`='8000000000'");
                    $this->db->query("UPDATE `" . DB_PREFIX . "ukrposhta_cities` SET `CITYTYPE_RU`=`CITYTYPE_UA`, `SHORTCITYTYPE_EN`=`SHORTCITYTYPE_UA`, `SHORTCITYTYPE_RU`=`SHORTCITYTYPE_UA`, `DISTRICT_RU`=`DISTRICT_UA`, `REGION_RU`=`REGION_UA`");
                } else {
                    if ($type == "departments") {
                        $regions = $this->getRegions();
                        $this->setApp("address-classifier-ws");
                        $this->setAPIVersion("");
                        $this->setUserToken("");
                        foreach ($regions as $k => $region) {
                            $data = $this->apiRequest("get_postoffices_by_postindex?poRegionId=" . $region["REGION_ID"]);
                            if ($data && !empty($data["Entries"]["Entry"]) && is_array($data["Entries"]["Entry"])) {
                                if ($k == 0) {
                                    $this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "ukrposhta_departments`");
                                }
                                foreach ($data["Entries"]["Entry"] as $v) {
                                    if ($v["ADDRESS"]) {
                                        $sql = "INSERT INTO `" . DB_PREFIX . "ukrposhta_departments` (`ID`, `POSTINDEX`, `POSTCODE`, `PO_CODE`, `TECHINDEX`, `PO_LONG`, `PO_SHORT`, `PHONE`, `ADDRESS`, `MEREZA_NUMBER`, `PARENT_ID`, `ISVPZ`, `AVALIBLE`, `IS_NODISTRICT`, `RESTRICTED_ACCESS`, `MRTPS`, `LONGITUDE`, `LATTITUDE`, `TYPE_LONG`, `TYPE_SHORT`, `TYPE_ACRONYM`, `HOUSENUMBER`, `POSTREET_ID`, `STREET_UA`, `STREET_EN`, `STREET_RU`, `STREETTYPE_UA`, `STREETTYPE_EN`, `STREETTYPE_RU`, `POCITY_ID`, `CITY_UA`, `CITY_EN`, `CITY_RU`, `CITYTYPE_UA`, `CITYTYPE_EN`, `CITYTYPE_RU`, `SHORTCITYTYPE_UA`, `SHORTCITYTYPE_EN`, `SHORTCITYTYPE_RU`, `PDCITY_ID`, `PDCITY_UA`, `PDCITY_EN`, `PDCITY_RU`, `PDOLDCITYNAME_UA`, `PDOLDCITYNAME_EN`, `PDOLDCITYNAME_RU`, `PDCITYTYPE_UA`, `PDCITYTYPE_EN`, `PDCITYTYPE_RU`, `SHORTPDCITYTYPE_UA`, `SHORTPDCITYTYPE_EN`, `SHORTPDCITYTYPE_RU`, `PODISTRICT_ID`, `PDDISTRICT_ID`, `DISTRICT_UA`, `DISTRICT_EN`, `DISTRICT_RU`, `NEW_DISTRICT_UA`, `POREGION_ID`, `PDREGION_ID`, `REGION_UA`, `REGION_EN`, `REGION_RU`, `LOCK_CODE`, `LOCK_UA`, `LOCK_EN`, `LOCK_RU`, `POLOCK_UA`, `POLOCK_EN`, `POLOCK_RU`) VALUES (                        '" . (int) $v["ID"] . "',\n                        '" . $this->db->escape((string) $v["POSTINDEX"]) . "',\n                        '" . $this->db->escape((string) $v["POSTCODE"]) . "',\n                        '" . $this->db->escape((string) $v["PO_CODE"]) . "',\n                        '" . $this->db->escape((string) $v["TECHINDEX"]) . "',\n                        '" . $this->db->escape((string) $v["PO_LONG"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PO_SHORT"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PHONE"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["ADDRESS"]) . "',\n\t\t\t\t\t\t'" . (int) $v["MEREZA_NUMBER"] . "',\n\t\t\t\t\t\t'" . (int) $v["PARENT_ID"] . "',\n\t\t\t\t\t\t'" . (int) $v["ISVPZ"] . "',\n\t\t\t\t\t\t'" . (int) $v["AVALIBLE"] . "',\n\t\t\t\t\t\t'" . (int) $v["IS_NODISTRICT"] . "',\n\t\t\t\t\t\t'" . (int) $v["RESTRICTED_ACCESS"] . "',\n\t\t\t\t\t\t'" . (int) $v["MRTPS"] . "',\n\t\t\t\t\t\t'" . (double) $v["LONGITUDE"] . "',\n\t\t\t\t\t\t'" . (double) $v["LATTITUDE"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["TYPE_LONG"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["TYPE_SHORT"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["TYPE_ACRONYM"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["HOUSENUMBER"]) . "',\n                        '" . (int) $v["POSTREET_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREET_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREET_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREET_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREETTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREETTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["STREETTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . (int) $v["POCITY_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITY_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITY_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITY_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["CITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTCITYTYPE_UA"]) . "',\n                        '" . (int) $v["PDCITY_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_UA"]) . " " . $this->db->escape((string) $v["PDCITY_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_EN"]) . " " . $this->db->escape((string) $v["PDCITY_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_UA"]) . " " . $this->db->escape((string) $v["PDCITY_UA"]) . "',\n                        '" . $this->db->escape((string) $v["PDOLDCITYNAME_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PDOLDCITYNAME_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PDOLDCITYNAME_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PDCITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PDCITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["PDCITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["SHORTPDCITYTYPE_UA"]) . "',\n\t\t\t\t\t\t'" . (int) $v["PODISTRICT_ID"] . "',\n                        '" . (int) $v["PDDISTRICT_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["DISTRICT_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["NEW_DISTRICT_UA"]) . "',\n\t\t\t\t\t\t'" . (int) $v["POREGION_ID"] . "',\n                        '" . (int) $v["PDREGION_ID"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["REGION_UA"]) . "',\n\t\t\t\t\t\t'" . (int) $v["LOCK_CODE"] . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["LOCK_UA"]) . "', \n\t\t\t\t\t\t'" . $this->db->escape((string) $v["LOCK_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["LOCK_RU"]) . "',\n                        '" . $this->db->escape((string) $v["POLOCK_UA"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["POLOCK_EN"]) . "',\n\t\t\t\t\t\t'" . $this->db->escape((string) $v["POLOCK_RU"]) . "'\n\t\t\t\t\t)";
                                        try {
                                            $this->db->query($sql);
                                            $count++;
                                        } catch (Exception $e) {
                                            if (!empty($this->settings["debugging_mode"])) {
                                                $this->log->write($e->getMessage());
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        $this->db->query("UPDATE `" . DB_PREFIX . "ukrposhta_departments` SET `POREGION_ID`='270' WHERE `POREGION_ID`='286'");
                        $this->db->query("UPDATE `" . DB_PREFIX . "ukrposhta_departments` SET `PDREGION_ID`='270' WHERE `PDREGION_ID`='286'");
                        $department_types = $this->db->query("SELECT DISTINCT `TYPE_ACRONYM` as `id`, `TYPE_LONG` as `description` FROM `" . DB_PREFIX . "ukrposhta_departments`")->rows;
                        $department_statuses = $this->db->query("SELECT `LOCK_CODE` as `id`, MIN(`LOCK_UA`) as `description` FROM `" . DB_PREFIX . "ukrposhta_departments` GROUP BY `LOCK_CODE`")->rows;
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "ukrposhta_references` (`type`, `value`) VALUES ('department_types', '" . $this->db->escape(json_encode($department_types)) . "') ON DUPLICATE KEY UPDATE `value`='" . $this->db->escape(json_encode($department_types)) . "'");
                        $this->db->query("INSERT INTO `" . DB_PREFIX . "ukrposhta_references` (`type`, `value`) VALUES ('department_statuses', '" . $this->db->escape(json_encode($department_statuses)) . "') ON DUPLICATE KEY UPDATE `value`='" . $this->db->escape(json_encode($department_statuses)) . "'");
                    }
                }
            }
        }
        if ($data) {
            $database = $this->getReferences("database");
            $database[$type]["update_datetime"] = date("d.m.Y H:i");
            $database[$type]["amount"] = $count;
            $this->db->query("INSERT INTO `" . DB_PREFIX . "ukrposhta_references` (`type`, `value`) VALUES ('database', '" . json_encode($database) . "') ON DUPLICATE KEY UPDATE `value`='" . json_encode($database) . "'");
        }
        return $data ? $database[$type]["amount"] : $data;
    }
    public function regions()
    {
        return ["АРК" => ["Крим", "АРК", "Крым", "АРК", "Krym", "Crimea"], "Вінницька" => ["Вінниця", "Вінницька", "Винница", "Винницкая", "Vinnitsa", "Vinnitskaya"], "Волинська" => ["Волинь", "Волинська", "Волынь", "Волынская", "Volyn", "Volynskaya"], "Дніпропетровська" => ["Дніпро", "Дніпропетровськ", "Дніпропетровська", "Днепропетровск", "Днепропетровская", "Dnipropetrovsk", "Dnepropetrovskaya"], "Донецька" => ["Донецьк", "Донецька", "Донецк", "Донецкая", "Donetsk", "Donetskaya"], "Житомирська" => ["Житомир", "Житомирська", "Житомир", "Житомирская", "Zhytomyr", "Zhitomirskaya"], "Закарпатська" => ["Закарпаття", "Закарпатська", "Закарпатье", "Закарпатская", "Zakarpattya", "Zakarpatskaya"], "Запорізька" => ["Запоріжжя", "Запорізька", "Запорожье", "Запорожская", "Zaporizhia", "Zaporozhskaya"], "Івано-Франківська" => ["Івано-Франківськ", "Івано-Франківська", "Ивано-Франковск", "Ивано-Франковская", "Ivano-Frankivsk", "Ivano-Frankovskaya"], "Київ" => ["Київ", "Киев", "Kyiv"], "Київська" => ["Київ", "Київська", "Киев", "Киевская", "Kyiv", "Kiyevskaya"], "Кіровоградська" => ["Кіровоград", "Кіровоградська", "Кировоград", "Кировоградская", "Kirovohrad", "Kirovogradskaya"], "Луганська" => ["Луганськ", "Луганська", "Луганск", "Луганская", "Lugansk", "Luganskaya"], "Львівська" => ["Львів", "Львівська", "Львов", "Львовская", "Lviv", "L'vovskaya"], "Миколаївська" => ["Миколаїв", "Миколаївська", "Николаев", "Николаевская", "Mykolaiv", "Nikolayevskaya"], "Одеська" => ["Одеса", "Одеська", "Одесса", "Одесская", "Odessa", "Odesskaya"], "Полтавська" => ["Полтава", "Полтавська", "Полтава", "Полтавская", "Poltava", "Poltavskaya"], "Рівненська" => ["Рівне", "Рівненська", "Ровно", "Ровненская", "Ровенская", "Rivne", "Rovenskaya"], "Сумська" => ["Суми", "Сумська", "Сумы", "Сумская", "Sums", "Sumskaya"], "Тернопільська" => ["Тернопіль", "Тернопільська", "Тернополь", "Тернопольская", "Ternopil", "Ternopol'skaya"], "Харківська" => ["Харків", "Харківська", "Харьков", "Харьковская", "Kharkov", "Khar'kovskaya"], "Херсонська" => ["Херсон", "Херсонська", "Херсон", "Херсонская", "Herson", "Khersonskaya"], "Хмельницька" => ["Хмельницьк", "Хмельницька", "Хмельницкий", "Хмельницкая", "Khmelnytsky", "Khmel'nitskaya"], "Черкаська" => ["Черкаси", "Черкаська", "Черкассы", "Черкасская", "Cherkassy", "Cherkasskaya"], "Чернівецька" => ["Чернівці", "Чернівецька", "Черновцы", "Черновицкая", "Chernivtsi", "Chernovitskaya"], "Чернігівська" => ["Чернігів", "Чернігівська", "Чернигов", "Черниговская", "Chernihiv", "Chernigovskaya"]];
    }
    public function getRegionID($zone)
    {
        if (!$zone) {
            return false;
        }
        if ((int) $zone !== 0) {
            $result = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone` WHERE `zone_id` = '" . (int) $zone . "' AND `status` = '1'")->row;
            if ($result) {
                $zone = $result["name"];
            }
        }
        $id = false;
        $sub_name = mb_substr($zone, 0, 6, "UTF-8");
        foreach ($this->regions() as $d => $v) {
            $match = preg_grep("/^" . preg_quote($sub_name) . "/ui", $v);
            if (!empty($match)) {
                $result = $this->db->query("SELECT `REGION_ID` FROM `" . DB_PREFIX . "ukrposhta_regions` WHERE `REGION_UA` = '" . $this->db->escape($d) . "' LIMIT 1")->row;
                if ($result) {
                    $id = $result["REGION_ID"];
                    return $id;
                }
            }
        }
    }
    public function getRegionName($id)
    {
        $sql = "SELECT `REGION_UA` FROM `" . DB_PREFIX . "ukrposhta_regions` WHERE `REGION_ID` = '" . $this->db->escape($id) . "'";
        $result = $this->db->query($sql)->row;
        if (!empty($result["REGION_UA"])) {
            return $result["REGION_UA"];
        }
        return false;
    }
    public function getRegions()
    {
        $result = $this->db->query("SELECT `REGION_ID`, `REGION_" . $this->lang . "` as `description` FROM `" . DB_PREFIX . "ukrposhta_regions` ORDER BY `description`")->rows;
        return $result;
    }
    public function getCityID($name, $region = NULL)
    {
        $city_parts = explode(", ", $name);
        $city = $this->db->escape(trim(str_replace(["м.", "с-ще", "с."], "", $city_parts[0])));
        $sql = "SELECT `CITY_ID` FROM `" . DB_PREFIX . "ukrposhta_cities` WHERE (`CITY_UA` = '" . $city . "' OR `CITY_EN` = '" . $city . "' OR `CITY_RU` = '" . $city . "')";
        if ($region) {
            $sql .= " AND `REGION_ID` = '" . $this->db->escape($region) . "'";
        }
        if (!empty($city_parts[1])) {
            $district = $this->db->escape(trim(strstr($city_parts[1], " ", true)));
            $sql .= " AND (`DISTRICT_UA` = '" . $district . "' OR `DISTRICT_EN` = '" . $district . "' OR `DISTRICT_RU` = '" . $district . "')";
        }
        if (!empty($city_parts[2])) {
            $region = $this->db->escape(trim(strstr($city_parts[2], " ", true)));
            $sql .= " AND (`REGION_UA` = '" . $region . "' OR `REGION_EN` = '" . $region . "' OR `REGION_RU` = '" . $region . "')";
        }
        $result = $this->db->query($sql)->row;
        if (!empty($result["CITY_ID"])) {
            return $result["CITY_ID"];
        }
        return false;
    }
    public function getCityName($id)
    {
        $sql = "SELECT `CITY_UA` FROM `" . DB_PREFIX . "ukrposhta_cities` WHERE `CITY_ID` = '" . $this->db->escape($id) . "'";
        $result = $this->db->query($sql)->row;
        if (!empty($result["CITY_UA"])) {
            return $result["CITY_UA"];
        }
        return false;
    }
    public function getCities($region = NULL)
    {
        $sql = "SELECT *, CONCAT(`SHORTCITYTYPE_" . $this->lang . "`, ' ', `CITY_" . $this->lang . "`) as `description`, CONCAT(`DISTRICT_" . $this->lang . "`, ' р-н.') as `district_description`,  CONCAT(`REGION_" . $this->lang . "`, ' обл.') as `region_description` FROM `" . DB_PREFIX . "ukrposhta_cities` WHERE 1";
        if ($region) {
            $sql .= " AND `REGION_ID` = '" . $this->db->escape($region) . "'";
        }
        $sql .= " ORDER BY `POPULATION` DESC";
        return $this->db->query($sql)->rows;
    }
    public function getDepartment($name, $city = NULL, $method = "standard_department")
    {
        $index = $this->db->escape(trim(strstr($name, ",", true)));
        $sql = "SELECT * FROM `" . DB_PREFIX . "ukrposhta_departments` WHERE `POSTCODE`='" . $index . "'";
        if (isset($this->settings["shipping_methods"][$method]["department_types"])) {
            foreach ($this->settings["shipping_methods"][$method]["department_types"] as $k => $v) {
                $this->settings["shipping_methods"][$method]["department_types"][$k] = "'" . $v . "'";
            }
            $sql .= " AND `TYPE_ACRONYM` IN (" . implode(",", $this->settings["shipping_methods"][$method]["department_types"]) . ")";
        }
        if ($city) {
            $sql .= " AND `POCITY_ID` = '" . $this->db->escape($city) . "'";
        }
        $sql .= " ORDER BY `POSTCODE` LIMIT 1";
        return $this->db->query($sql)->row;
    }
    public function getDepartmentID($name, $city = NULL, $method = "standard_department")
    {
        $index = strstr($name, ",", true);
        $sql = "SELECT `department_id` FROM `" . DB_PREFIX . "ukrposhta_departments` WHERE `POSTCODE`='" . $this->db->escape($index) . "'";
        if (isset($this->settings["shipping_methods"][$method]["department_types"])) {
            foreach ($this->settings["shipping_methods"][$method]["department_types"] as $k => $v) {
                $this->settings["shipping_methods"][$method]["department_types"][$k] = "'" . $v . "'";
            }
            $sql .= " AND `TYPE_ACRONYM` IN (" . implode(",", $this->settings["shipping_methods"][$method]["department_types"]) . ")";
        }
        if ($city) {
            $sql .= " AND `POCITY_ID` = '" . $this->db->escape($city) . "'";
        }
        $sql .= " ORDER BY `POSTCODE`";
        $result = $this->db->query($sql)->row;
        if (!empty($result["department_id"])) {
            return $result["department_id"];
        }
        return false;
    }
    public function getDepartmentIndex($id)
    {
        $sql = "SELECT `POSTCODE` FROM `" . DB_PREFIX . "ukrposhta_departments` WHERE `department_id`='" . $this->db->escape($id) . "' LIMIT 1";
        $result = $this->db->query($sql)->row;
        if (!empty($result["POSTCODE"])) {
            return $result["POSTCODE"];
        }
        return false;
    }
    public function getDepartmentBYIndex($index, $method = "standard_department")
    {
        $sql = "SELECT * FROM `" . DB_PREFIX . "ukrposhta_departments` WHERE `POSTCODE`='" . $this->db->escape($index) . "'";
        if (isset($this->settings["shipping_methods"][$method]["department_types"])) {
            foreach ($this->settings["shipping_methods"][$method]["department_types"] as $k => $v) {
                $this->settings["shipping_methods"][$method]["department_types"][$k] = "'" . $v . "'";
            }
            $sql .= " AND `TYPE_ACRONYM` IN (" . implode(",", $this->settings["shipping_methods"][$method]["department_types"]) . ")";
        }
        $sql .= " LIMIT 1";
        return $this->db->query($sql)->row;
    }
    public function getDepartments($city = NULL)
    {
        $sql = "SELECT *,                CASE                    WHEN `TYPE_ACRONYM` = 'ПВ' THEN CONCAT(`POSTCODE`, ', ', `PDCITY_" . $this->lang . "`, ' (', `TYPE_LONG`, ')')                    ELSE CONCAT(`POSTCODE`, ', ', `ADDRESS`)                END as `description`                 FROM `" . DB_PREFIX . "ukrposhta_departments` WHERE 1";
        if (isset($this->settings["shipping_methods"]["standard_department"]["department_types"])) {
            foreach ($this->settings["shipping_methods"]["standard_department"]["department_types"] as $k => $v) {
                $this->settings["shipping_methods"]["standard_department"]["department_types"][$k] = "'" . $v . "'";
            }
            $sql .= " AND `TYPE_ACRONYM` IN (" . implode(",", $this->settings["shipping_methods"]["standard_department"]["department_types"]) . ")";
        }
        if (isset($this->settings["shipping_methods"]["standard_department"]["department_statuses"])) {
            foreach ($this->settings["shipping_methods"]["standard_department"]["department_statuses"] as $k => $v) {
                $this->settings["shipping_methods"]["standard_department"]["department_statuses"][$k] = "'" . $v . "'";
            }
            $sql .= " AND `LOCK_CODE` IN (" . implode(",", $this->settings["shipping_methods"]["standard_department"]["department_statuses"]) . ")";
        }
        if ($city) {
            $sql .= " AND `PDCITY_ID` = '" . $this->db->escape($city) . "'";
        }
        $sql .= " ORDER BY `POSTCODE`";
        return $this->db->query($sql)->rows;
    }
    public function getReferences($type = "")
    {
        $data = [];
        if ($type) {
            $result = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "ukrposhta_references` WHERE `type` = '" . $type . "'")->row;
            if (isset($result["value"])) {
                $data = json_decode($result["value"], true);
            } else {
                $data = false;
            }
        } else {
            $results = $this->db->query("SELECT `type`, `value` FROM `" . DB_PREFIX . "ukrposhta_references`")->rows;
            if (is_array($results)) {
                foreach ($results as $r) {
                    $data[$r["type"]] = json_decode($r["value"], true);
                }
            }
        }
        return $data;
    }
    public function saveAddress($data)
    {
        $data = $this->apiRequest("addresses", false, $data, "POST");
        return $data;
    }
    public function getAddress($id)
    {
        $this->setUserToken("");
        $data = $this->apiRequest("addresses/" . $id);
        return $data;
    }
    public function saveClient($data, $uuid = false)
    {
        $request_url = "clients";
        if ($uuid) {
            $request_url .= "/" . $uuid;
            $query_type = "PUT";
        } else {
            $query_type = "POST";
        }
        $data = $this->apiRequest($request_url, false, $data, $query_type);
        return $data;
    }
    public function getClient($uuid)
    {
        $data = $this->apiRequest("clients/" . $uuid);
        return $data;
    }
    public function getClientByPhone($phone)
    {
        $data = $this->apiRequest("clients/phone", "&countryISO3166=UA&phoneNumber=" . $phone);
        return !empty($data[0]) ? $data[0] : false;
    }
    public function saveCN($data)
    {
        if (isset($data["uuid"])) {
            $query_type = "PUT";
            $post_data[] = $data;
        } else {
            $query_type = "POST";
            $post_data = $data;
        }
        if ($data["bonus_departure"]) {
            $request = "shipments/loyalty-program/free";
        } else {
            $request = "shipments/";
        }
        $data = $this->apiRequest($request, false, $post_data, $query_type);
        return isset($data[0]) ? $data[0] : $data;
    }
    public function getCN($uuid)
    {
        $data = $this->apiRequest("shipments/" . $uuid);
        return $data;
    }
    public function getCNList($sender_uuid)
    {
        $data = $this->apiRequest("shipments/", "&senderUuid=" . $sender_uuid);
        return $data;
    }
    public function getCNStatus($code)
    {
        $data = $this->apiRequest("shipments/" . $code . "/lifecycle");
        return $data;
    }
    public function deleteCN($uuids)
    {
        $data = [];
        foreach ($uuids as $uuid) {
            $this->apiRequest("shipments/" . $uuid, false, false, "DELETE");
            if (!$this->error) {
                $data[] = $uuid;
            }
        }
        return $data;
    }
    public function createShipmentsGroup($name, $type, $client_uuid)
    {
        $data = ["name" => $name, "clientUuid" => $client_uuid, "type" => $type];
        $result = $this->apiRequest("shipment-groups", false, $data, "POST");
        return $result;
    }
    public function updateShipmentsGroup($name, $group_uuid)
    {
        $data = ["name" => $name];
        $result = $this->apiRequest("shipment-groups/" . $group_uuid, false, $data, "PUT");
        return $result;
    }
    public function addShipmentsToGroup($data, $group_uuid)
    {
        $result = $this->apiRequest("shipment-groups/" . $group_uuid . "/shipments", false, $data, "PUT");
        return $result;
    }
    public function getShipmentsGroup($group_uuid)
    {
        $result = $this->apiRequest("shipment-groups/" . $group_uuid . "/shipments");
        return $result;
    }
    public function getGroupByShipment($shipment_uuid)
    {
        $result = $this->apiRequest("shipments/shipment-group/" . $shipment_uuid);
        return $result;
    }
    public function getGroupsByClient($client_uuid)
    {
        $result = $this->apiRequest("shipment-groups/clients/" . $client_uuid);
        return $result;
    }
    public function deleteShipmentFromGroup($shipment_uuid)
    {
        $result = $this->apiRequest("shipments/" . $shipment_uuid . "/shipment-group", false, [], "DELETE");
        return $result;
    }
    public function printDocument($uuid, $type, $format, $parameters = "")
    {
        $request_data = [];
        $request_type = "GET";
        if (is_array($uuid) && !empty($uuid)) {
            $request_url = "shipments/" . $type;
            $request_type = "POST";
            foreach ($uuid as $v) {
                $request_data[$v] = new stdClass();
                if (strpos($parameters, "hideDeliveryPrice") !== false) {
                    $request_data[$v]->hideDeliveryPrice = 1;
                }
            }
        } else {
            if ($type == "sticker_group" || $type == "form103a") {
                $result = $this->getGroupByShipment($uuid);
                if ($result) {
                    $group_uuid = $result["uuid"];
                } else {
                    $group_uuid = "";
                }
                if ($type == "sticker_group") {
                    $type = "sticker";
                }
                $request_url = "shipment-groups/" . $group_uuid . "/" . $type;
            } else {
                $request_url = "shipments/" . $uuid . "/" . $type;
            }
        }
        if ($format == "A4") {
            $parameters .= "&size=SIZE_A4";
        } else {
            if ($format == "A5") {
                $parameters .= "&size=SIZE_A5";
            }
        }
        $this->setApp("forms/ecom");
        $data = $this->apiRequest($request_url, $parameters, $request_data, $request_type);
        return $data;
    }
    public function getDeliveryPrice($data)
    {
        $this->setUserToken("");
        $data = $this->apiRequest("domestic/delivery-price", false, $data, "POST");
        return $data;
    }
    public function tracking($documents = [])
    {
        $this->setApp("status-tracking");
        $this->setUserToken("");
        $data = $this->apiRequest("statuses/last", false, $documents, "POST");
        return $data;
    }
    public function getDeparture($products)
    {
        $data["weight"] = 0;
        $data["length"] = 0;
        $data["width"] = 0;
        $data["height"] = 0;
        $data["volume"] = 0;
        $data["parcels"] = [];
        if (empty($products) || !is_array($products)) {
            $products = [["quantity" => 1, "weight_class_id" => 0, "length_class_id" => 0, "weight" => 0, "length" => 0, "width" => 0, "height" => 0]];
        }
        if (empty($this->settings["use_parameters"])) {
            $this->settings["use_parameters"] = "products_without_parameters";
        }
        foreach ($products as $product) {
            $w_unit = $this->weight->getUnit($product["weight_class_id"]);
            $l_unit = $this->length->getUnit($product["length_class_id"]);
            for ($i = 1; $i <= $product["quantity"]; $i++) {
                if ($this->settings["use_parameters"] == "products_without_parameters" && (double) $product["weight"]) {
                    $t_parcel["weight"] = $this->weightConvert($product["weight"] / $product["quantity"], $w_unit);
                } else {
                    $t_parcel["weight"] = (double) $this->settings["weight"];
                }
                if ($this->settings["use_parameters"] == "products_without_parameters" && (double) $product["length"]) {
                    $t_parcel["length"] = $this->dimensionConvert($product["length"], $l_unit);
                } else {
                    $t_parcel["length"] = (double) $this->settings["dimensions_l"];
                }
                if ($this->settings["use_parameters"] == "products_without_parameters" && (double) $product["width"]) {
                    $t_parcel["width"] = $this->dimensionConvert($product["width"], $l_unit);
                } else {
                    $t_parcel["width"] = (double) $this->settings["dimensions_w"];
                }
                if ($this->settings["use_parameters"] == "products_without_parameters" && (double) $product["height"]) {
                    $t_parcel["height"] = $this->dimensionConvert($product["height"], $l_unit);
                } else {
                    $t_parcel["height"] = (double) $this->settings["dimensions_h"];
                }
                $t_parcel["length"] += (double) $this->settings["allowance_l"];
                $t_parcel["width"] += (double) $this->settings["allowance_w"];
                $t_parcel["height"] += (double) $this->settings["allowance_h"];
                $t_parcel["volume"] = $t_parcel["length"] * $t_parcel["width"] * $t_parcel["height"] / 1000000;
                $t_parcel["volume_weight"] = $t_parcel["volume"] * 250;
                $data["weight"] += $t_parcel["weight"];
                $data["parcels"][] = $t_parcel;
                if ($this->settings["calculate_volume"] && $this->settings["calculate_volume_type"] == "largest_product") {
                    if ($data["volume"] < $t_parcel["volume"]) {
                        $data["length"] = $t_parcel["length"];
                        $data["width"] = $t_parcel["width"];
                        $data["height"] = $t_parcel["height"];
                        $data["volume"] = $t_parcel["volume"];
                    }
                } else {
                    $data["length"] = max($data["length"], $t_parcel["length"]);
                    $data["width"] = max($data["width"], $t_parcel["width"]);
                    $data["height"] += $t_parcel["height"];
                    $data["volume"] = $data["length"] * $data["width"] * $data["height"] / 1000000;
                }
                if ($this->settings["use_parameters"] == "whole_order") {
                    break;
                }
            }
            if ($this->settings["use_parameters"] == "whole_order") {
                $data["weight"] = max(round($data["weight"], 2), 0, $this->settings["weight_minimum"]);
                $data["length"] = max(round($data["length"]), 1);
                $data["width"] = max(round($data["width"]), 1);
                $data["height"] = max(round($data["height"]), 1);
                $data["volume"] = max(round($data["volume"], 4), 0);
                return $data;
            }
        }
    }
    public function getDepartureSeats($products = [])
    {
        $seats = 0;
        foreach ($products as $product) {
            $seats += $product["quantity"];
        }
        return $seats;
    }
    public function getDeclaredCost($totals)
    {
        $declared_cost = 0;
        foreach ($totals as $total) {
            if (isset($this->settings["declared_cost"]) && in_array($total["code"], (array) $this->settings["declared_cost"])) {
                $declared_cost += $total["value"];
            }
        }
        return $declared_cost;
    }
    public function weightConvert($value, $unit)
    {
        if (preg_match("/\\b(g|gr|gram|gramm|gramme|г|гр|грам|грамм)\\b\\.?/ui", $unit)) {
            return (double) $value / 1000;
        }
        return (double) $value;
    }
    public function dimensionConvert($value, $unit)
    {
        if (preg_match("/\\b(mm|millimeter|мм|міліметр|миллиметр)\\b\\.?/ui", $unit)) {
            return (double) $value / 10;
        }
        if (preg_match("/\\b(dm|decimetre|дц|дециметр)\\b\\.?/ui", $unit)) {
            return (double) $value * 10;
        }
        if (preg_match("/\\b(m|metre|м|метр)\\b\\.?/ui", $unit)) {
            return (double) $value * 100;
        }
        return (double) $value;
    }
    public function multiSort()
    {
        $args = func_get_args();
        $c = count($args);
        if ($c < 2) {
            return false;
        }
        $array = array_splice($args, 0, 1);
        $array = $array[0];
        usort($array, function ($a, $b) {
            $i = 0;
            $c = count($args);
            for ($cmp = 0; $cmp == 0 && $i < $c; $i++) {
                if ($a[$args[$i]] == $b[$args[$i]]) {
                    $cmp = 0;
                } else {
                    if ($a[$args[$i]] < $b[$args[$i]]) {
                        $cmp = -1;
                    } else {
                        $cmp = 1;
                    }
                }
                if (end($args) == "DESC") {
                    $cmp *= -1;
                }
            }
            return $cmp;
        });
        return $array;
    }
    public function getDomain()
    {
        if (HTTP_SERVER) {
            $url = parse_url(HTTP_SERVER);
            $d_1 = str_replace("www.", "", $url["host"]);
        } else {
            if (HTTPS_SERVER) {
                $url = parse_url(HTTPS_SERVER);
                $d_1 = str_replace("www.", "", $url["host"]);
            } else {
                $d_1 = "";
            }
        }
        return $d_1;
    }
}

?>