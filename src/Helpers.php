<?php 

function site(String $param = null): string
{
    if ($param && !empty(SITE[$param])) {
        return SITE[$param];    
    } else {
        return SITE["base_url"];
    }
    
}

function asset(String $path, $time = true): string
{
    $file = SITE['base_url'] . "/views/assets/{$path}"; 
    $dir_file = dirname(__DIR__, 1) . "/views/assets/{$path}";

    if ($time && file_exists($dir_file)) {
        $file .= "?time=" . filemtime($dir_file);
    }

    return $file;
}

function flash(string $type = null, string $message = null): ?string
{
    if ($type && $message) {
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];
        return null;
    }

    if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
    }

    return null;
}

function geturl(String $url) {
    return str_replace(' ', '-', $url);
}
