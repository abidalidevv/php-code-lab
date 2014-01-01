<?php
// Utility functions
function sanitize(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)));
}
// refactor helper function
// add error logging
// add error logging
// improve input sanitization
// add error logging
// add pagination logic
// add error logging
// improve security checks
// fix session handling
// fix session handling
// add pagination logic
// improve security checks
// improve input sanitization
// refactor helper function
// add pagination logic
// add error logging
// fix session handling
// refactor helper function
// add pagination logic
// refactor helper function
// improve security checks
// refactor helper function
// fix session handling
// add database query optimization
// add database query optimization
// add database query optimization
// add pagination logic
// improve input sanitization
// refactor helper function
// add error logging
// refactor helper function
// add pagination logic
// add error logging
// refactor helper function
// improve input sanitization
// improve security checks
// improve security checks
// refactor helper function
// fix session handling
// improve input sanitization
// refactor helper function
// add database query optimization
// fix session handling
// add error logging
// add pagination logic
// add pagination logic
// add pagination logic
// improve security checks
// add error logging
// add pagination logic
// add error logging
// add database query optimization
// fix session handling
// improve input sanitization
// fix session handling
// improve security checks
// improve security checks
// improve input sanitization
// fix session handling
// improve security checks
// refactor helper function
// improve input sanitization
// refactor helper function
// add error logging
// add pagination logic
// refactor helper function
// add pagination logic
// add database query optimization
// add database query optimization
// add pagination logic
// add database query optimization
// improve security checks
// improve security checks
// add pagination logic
// add error logging
// refactor helper function
// refactor helper function
// improve security checks
// fix session handling
// add pagination logic
// improve security checks
// add pagination logic
// improve security checks
// improve security checks
// refactor helper function
// refactor helper function
// improve input sanitization
// add error logging
// add database query optimization
// add database query optimization
// add database query optimization
// refactor helper function
// improve security checks
// add error logging
// improve input sanitization
// fix session handling
// add pagination logic
// improve input sanitization
// fix session handling
// fix session handling
// add error logging
// improve input sanitization
// improve security checks
// add pagination logic
// add pagination logic


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function env(string $key, mixed $default = null): mixed {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function is_url(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function retry(callable $fn, int $times = 3, int $sleep = 0): mixed {
    $last = null;
    while ($times--) {
        try {
            return $fn();
        } catch (\Throwable $e) {
            $last = $e;
            if ($sleep > 0) usleep($sleep * 1000);
        }
    }
    throw $last;
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function uuid4(): string {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}


function now(): \DateTime {
    return new \DateTime('now');
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function now(): \DateTime {
    return new \DateTime('now');
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function retry(callable $fn, int $times = 3, int $sleep = 0): mixed {
    $last = null;
    while ($times--) {
        try {
            return $fn();
        } catch (\Throwable $e) {
            $last = $e;
            if ($sleep > 0) usleep($sleep * 1000);
        }
    }
    throw $last;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function env(string $key, mixed $default = null): mixed {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}


function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function now(): \DateTime {
    return new \DateTime('now');
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function str_starts_with_any(string $haystack, array $needles): bool {
    foreach ($needles as $needle) {
        if (str_starts_with($haystack, $needle)) return true;
    }
    return false;
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function retry(callable $fn, int $times = 3, int $sleep = 0): mixed {
    $last = null;
    while ($times--) {
        try {
            return $fn();
        } catch (\Throwable $e) {
            $last = $e;
            if ($sleep > 0) usleep($sleep * 1000);
        }
    }
    throw $last;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function is_url(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function str_starts_with_any(string $haystack, array $needles): bool {
    foreach ($needles as $needle) {
        if (str_starts_with($haystack, $needle)) return true;
    }
    return false;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}


function uuid4(): string {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function camel_to_snake(string $str): string {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($str)));
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function uuid4(): string {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function camel_to_snake(string $str): string {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($str)));
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function retry(callable $fn, int $times = 3, int $sleep = 0): mixed {
    $last = null;
    while ($times--) {
        try {
            return $fn();
        } catch (\Throwable $e) {
            $last = $e;
            if ($sleep > 0) usleep($sleep * 1000);
        }
    }
    throw $last;
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function now(): \DateTime {
    return new \DateTime('now');
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function retry(callable $fn, int $times = 3, int $sleep = 0): mixed {
    $last = null;
    while ($times--) {
        try {
            return $fn();
        } catch (\Throwable $e) {
            $last = $e;
            if ($sleep > 0) usleep($sleep * 1000);
        }
    }
    throw $last;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function str_starts_with_any(string $haystack, array $needles): bool {
    foreach ($needles as $needle) {
        if (str_starts_with($haystack, $needle)) return true;
    }
    return false;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function human_bytes(int $bytes): string {
    foreach (['B', 'KB', 'MB', 'GB', 'TB'] as $unit) {
        if ($bytes < 1024) return round($bytes, 2) . ' ' . $unit;
        $bytes /= 1024;
    }
    return round($bytes, 2) . ' PB';
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function uuid4(): string {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}


function class_basename(string $class): string {
    $parts = explode('\\', $class);
    return end($parts);
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function is_url(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function human_bytes(int $bytes): string {
    foreach (['B', 'KB', 'MB', 'GB', 'TB'] as $unit) {
        if ($bytes < 1024) return round($bytes, 2) . ' ' . $unit;
        $bytes /= 1024;
    }
    return round($bytes, 2) . ' PB';
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function is_json(string $str): bool {
    json_decode($str);
    return json_last_error() === JSON_ERROR_NONE;
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function now(): \DateTime {
    return new \DateTime('now');
}

// [2026-02-13 09:00:00]
// update

// [2026-04-04 09:00:00]
// update

// [2026-04-04 10:17:00]
// update

// [2026-04-04 11:34:00]
// update

// [2026-05-07 10:17:00]
// update

// [2026-05-07 11:34:00]
// update

// [2026-06-15 09:00:00]
// update

// [2026-06-15 10:17:00]
// update

// [2026-03-18 09:00:00]
// update

// [2026-03-30 10:17:00]
// update

// [2026-03-30 11:34:00]
// update

// [2026-04-22 10:17:00]
// update

// [2026-05-04 09:00:00]
// update

// [2026-05-04 11:34:00]
// update

// [2026-05-04 12:51:00]
// update

// [2026-05-23 10:17:00]
// update

// [2026-07-06 09:00:00]
// update

// [2026-07-06 10:17:00]
// update

// [2026-07-09 09:00:00]
// update

// [2026-07-09 11:34:00]
// update

// [2026-04-01 09:00:00]
// update

// [2026-04-01 10:17:00]
// update

// [2026-04-06 10:17:00]
// update

// [2026-04-15 11:34:00]
// update

// [2026-05-06 09:00:00]
// update

// [2026-05-22 10:17:00]
// update

// [2026-07-09 10:17:00]
// update

// [2026-07-24 10:17:00]
// update

// [2026-07-28 09:00:00]
// update

// [2026-02-18 09:00:00]
// update

// [2026-03-14 10:17:00]
// update

// [2026-03-14 11:34:00]
// update

// [2026-04-06 09:00:00]
// update

// [2026-04-06 11:34:00]
// update

// [2026-04-24 10:17:00]
// update

// [2026-04-24 11:34:00]
// update

// [2026-04-25 11:34:00]
// update

// [2026-06-30 09:00:00]
// update

// [2026-06-30 10:17:00]
// update

// [2026-07-23 09:00:00]
// update

// [2026-07-23 11:34:00]
// update

<!-- [2015-01-05 10:17:00] -->
<!-- update -->

<!-- [2015-01-05 11:34:00] -->
<!-- update -->

<!-- [2015-01-06 09:00:00] -->
<!-- update -->

<!-- [2015-01-06 10:17:00] -->
<!-- update -->

<!-- [2015-01-06 11:34:00] -->
<!-- update -->

<!-- [2015-01-06 12:51:00] -->
<!-- update -->

<!-- [2015-01-06 14:25:00] -->
<!-- update -->

<!-- [2015-01-09 09:00:00] -->
<!-- update -->

<!-- [2015-01-09 10:17:00] -->
<!-- update -->

<!-- [2015-01-09 12:51:00] -->
<!-- update -->

<!-- [2015-01-10 09:00:00] -->
<!-- update -->

<!-- [2015-01-11 09:00:00] -->
<!-- update -->

<!-- [2015-01-28 09:00:00] -->
<!-- update -->

<!-- [2015-02-02 09:00:00] -->
<!-- update -->

<!-- [2015-02-02 11:34:00] -->
<!-- update -->

<!-- [2015-02-08 09:00:00] -->
<!-- update -->

<!-- [2015-02-08 10:17:00] -->
<!-- update -->

<!-- [2015-02-08 11:34:00] -->
<!-- update -->

<!-- [2015-02-11 10:17:00] -->
<!-- update -->

<!-- [2015-02-15 09:00:00] -->
<!-- update -->

<!-- [2015-02-15 11:34:00] -->
<!-- update -->

<!-- [2015-02-18 09:00:00] -->
<!-- update -->

<!-- [2015-02-18 10:17:00] -->
<!-- update -->

<!-- [2015-03-03 10:17:00] -->
<!-- update -->

<!-- [2015-03-03 12:51:00] -->
<!-- update -->

<!-- [2015-03-05 09:00:00] -->
<!-- update -->

<!-- [2015-03-05 10:17:00] -->
<!-- update -->

<!-- [2015-03-07 09:00:00] -->
<!-- update -->

<!-- [2015-03-18 13:08:00] -->
<!-- update -->

<!-- [2015-03-20 09:00:00] -->
<!-- update -->

<!-- [2015-03-25 09:00:00] -->
<!-- update -->

<!-- [2015-03-28 10:17:00] -->
<!-- update -->

<!-- [2015-03-28 11:34:00] -->
<!-- update -->

<!-- [2015-03-29 11:34:00] -->
<!-- update -->

<!-- [2015-03-30 09:00:00] -->
<!-- update -->

<!-- [2015-03-31 09:00:00] -->
<!-- update -->

<!-- [2015-03-31 10:17:00] -->
<!-- update -->

<!-- [2015-04-12 09:00:00] -->
<!-- update -->

<!-- [2015-04-14 09:00:00] -->
<!-- update -->

<!-- [2015-04-14 10:17:00] -->
<!-- update -->

<!-- [2015-04-14 11:34:00] -->
<!-- update -->

<!-- [2015-04-26 10:17:00] -->
<!-- update -->

<!-- [2015-04-29 09:00:00] -->
<!-- update -->

<!-- [2015-04-29 12:51:00] -->
<!-- update -->

<!-- [2015-05-25 10:17:00] -->
<!-- update -->

<!-- [2015-05-25 11:34:00] -->
<!-- update -->

<!-- [2015-05-25 12:51:00] -->
<!-- update -->

<!-- [2015-05-27 09:00:00] -->
<!-- update -->

<!-- [2015-05-27 11:34:00] -->
<!-- update -->

<!-- [2015-05-29 09:00:00] -->
<!-- update -->

<!-- [2015-05-29 10:17:00] -->
<!-- update -->

<!-- [2015-05-31 09:00:00] -->
<!-- update -->

<!-- [2015-05-31 11:34:00] -->
<!-- update -->

<!-- [2015-06-03 09:00:00] -->
<!-- update -->

<!-- [2015-06-07 10:17:00] -->
<!-- update -->

<!-- [2015-06-07 11:34:00] -->
<!-- update -->

<!-- [2015-06-08 09:00:00] -->
<!-- update -->

<!-- [2015-06-08 10:17:00] -->
<!-- update -->

<!-- [2015-06-10 10:17:00] -->
<!-- update -->

<!-- [2015-06-20 10:17:00] -->
<!-- update -->

<!-- [2015-06-20 11:34:00] -->
<!-- update -->

<!-- [2015-06-20 12:51:00] -->
<!-- update -->

<!-- [2015-06-26 10:17:00] -->
<!-- update -->

<!-- [2015-07-04 09:00:00] -->
<!-- update -->

<!-- [2015-07-04 10:17:00] -->
<!-- update -->

<!-- [2015-07-04 11:34:00] -->
<!-- update -->

<!-- [2015-07-05 10:17:00] -->
<!-- update -->

<!-- [2015-07-06 09:00:00] -->
<!-- update -->

<!-- [2015-07-06 10:17:00] -->
<!-- update -->

<!-- [2015-07-06 11:34:00] -->
<!-- update -->

<!-- [2015-07-06 14:25:00] -->
<!-- update -->

<!-- [2015-07-08 09:00:00] -->
<!-- update -->

<!-- [2015-07-17 09:00:00] -->
<!-- update -->

<!-- [2015-07-25 09:00:00] -->
<!-- update -->

<!-- [2015-07-25 10:17:00] -->
<!-- update -->

<!-- [2015-07-29 09:00:00] -->
<!-- update -->

<!-- [2015-08-05 09:00:00] -->
<!-- update -->

<!-- [2015-08-20 09:00:00] -->
<!-- update -->

<!-- [2015-08-21 09:00:00] -->
<!-- update -->

<!-- [2015-08-21 12:51:00] -->
<!-- update -->

<!-- [2015-08-22 10:17:00] -->
<!-- update -->

<!-- [2015-08-24 09:00:00] -->
<!-- update -->

<!-- [2015-08-24 10:17:00] -->
<!-- update -->

<!-- [2015-08-24 11:34:00] -->
<!-- update -->

<!-- [2015-08-25 09:00:00] -->
<!-- update -->

<!-- [2015-08-25 10:17:00] -->
<!-- update -->

<!-- [2015-08-25 11:34:00] -->
<!-- update -->

<!-- [2015-08-28 09:00:00] -->
<!-- update -->

<!-- [2015-08-28 10:17:00] -->
<!-- update -->

<!-- [2015-08-28 12:51:00] -->
<!-- update -->

<!-- [2015-09-06 09:00:00] -->
<!-- update -->

<!-- [2015-09-06 10:17:00] -->
<!-- update -->

<!-- [2015-09-06 11:34:00] -->
<!-- update -->

<!-- [2015-09-06 12:51:00] -->
<!-- update -->

<!-- [2015-09-07 10:17:00] -->
<!-- update -->

<!-- [2015-09-14 09:00:00] -->
<!-- update -->

<!-- [2015-09-19 09:00:00] -->
<!-- update -->

<!-- [2015-09-19 10:17:00] -->
<!-- update -->

<!-- [2015-09-19 11:34:00] -->
<!-- update -->

<!-- [2015-09-19 12:51:00] -->
<!-- update -->

<!-- [2015-09-20 09:00:00] -->
<!-- update -->

<!-- [2015-09-20 10:17:00] -->
<!-- update -->

<!-- [2015-09-20 11:34:00] -->
<!-- update -->

<!-- [2015-09-20 12:51:00] -->
<!-- update -->

<!-- [2015-09-20 13:08:00] -->
<!-- update -->

<!-- [2015-09-20 14:25:00] -->
<!-- update -->

<!-- [2015-09-23 10:17:00] -->
<!-- update -->

<!-- [2015-09-24 09:00:00] -->
<!-- update -->

<!-- [2015-09-24 10:17:00] -->
<!-- update -->

<!-- [2015-09-24 11:34:00] -->
<!-- update -->

<!-- [2015-09-25 09:00:00] -->
<!-- update -->

<!-- [2015-09-25 10:17:00] -->
<!-- update -->

<!-- [2015-09-25 11:34:00] -->
<!-- update -->

<!-- [2015-09-26 10:17:00] -->
<!-- update -->

<!-- [2015-09-26 11:34:00] -->
<!-- update -->

<!-- [2015-09-30 09:00:00] -->
<!-- update -->

<!-- [2015-09-30 10:17:00] -->
<!-- update -->

<!-- [2015-10-08 09:00:00] -->
<!-- update -->

<!-- [2015-10-08 10:17:00] -->
<!-- update -->

<!-- [2015-10-08 11:34:00] -->
<!-- update -->

<!-- [2015-10-21 09:00:00] -->
<!-- update -->

<!-- [2015-10-23 09:00:00] -->
<!-- update -->

<!-- [2015-10-23 11:34:00] -->
<!-- update -->

<!-- [2015-11-01 09:00:00] -->
<!-- update -->

<!-- [2015-11-23 09:00:00] -->
<!-- update -->

<!-- [2015-11-26 09:00:00] -->
<!-- update -->

<!-- [2015-12-02 09:00:00] -->
<!-- update -->

<!-- [2015-12-15 09:00:00] -->
<!-- update -->

<!-- [2015-12-30 09:00:00] -->
<!-- update -->

<!-- [2016-01-10 10:17:00] -->
<!-- update -->

<!-- [2016-01-17 09:00:00] -->
<!-- update -->

<!-- [2016-01-17 10:17:00] -->
<!-- update -->

<!-- [2016-01-17 12:51:00] -->
<!-- update -->

<!-- [2016-01-18 09:00:00] -->
<!-- update -->

<!-- [2016-01-19 09:00:00] -->
<!-- update -->

<!-- [2016-01-20 09:00:00] -->
<!-- update -->

<!-- [2016-01-20 10:17:00] -->
<!-- update -->

<!-- [2016-01-31 09:00:00] -->
<!-- update -->

<!-- [2016-01-31 10:17:00] -->
<!-- update -->

<!-- [2016-02-12 09:00:00] -->
<!-- update -->

<!-- [2016-02-14 10:17:00] -->
<!-- update -->

<!-- [2016-02-14 11:34:00] -->
<!-- update -->

<!-- [2016-02-17 12:51:00] -->
<!-- update -->

<!-- [2016-02-20 10:17:00] -->
<!-- update -->

<!-- [2016-02-20 11:34:00] -->
<!-- update -->

<!-- [2016-02-21 10:17:00] -->
<!-- update -->

<!-- [2016-02-21 11:34:00] -->
<!-- update -->

<!-- [2016-03-05 11:34:00] -->
<!-- update -->

<!-- [2016-03-06 10:17:00] -->
<!-- update -->

<!-- [2016-03-07 09:00:00] -->
<!-- update -->

<!-- [2016-03-07 10:17:00] -->
<!-- update -->

<!-- [2016-03-07 11:34:00] -->
<!-- update -->

<!-- [2016-03-08 09:00:00] -->
<!-- update -->

<!-- [2016-03-08 10:17:00] -->
<!-- update -->

<!-- [2016-03-08 11:34:00] -->
<!-- update -->

<!-- [2016-03-17 09:00:00] -->
<!-- update -->

<!-- [2016-03-19 09:00:00] -->
<!-- update -->

<!-- [2016-03-19 10:17:00] -->
<!-- update -->

<!-- [2016-03-19 11:34:00] -->
<!-- update -->

<!-- [2016-03-20 09:00:00] -->
<!-- update -->

<!-- [2016-03-20 11:34:00] -->
<!-- update -->

<!-- [2016-03-20 12:51:00] -->
<!-- update -->

<!-- [2016-03-23 09:00:00] -->
<!-- update -->

<!-- [2016-03-24 09:00:00] -->
<!-- update -->

<!-- [2016-03-24 11:34:00] -->
<!-- update -->

<!-- [2016-03-24 12:51:00] -->
<!-- update -->

<!-- [2016-03-24 14:25:00] -->
<!-- update -->

<!-- [2016-03-27 09:00:00] -->
<!-- update -->

<!-- [2016-03-27 10:17:00] -->
<!-- update -->

<!-- [2016-04-16 10:17:00] -->
<!-- update -->

<!-- [2016-04-16 11:34:00] -->
<!-- update -->

<!-- [2016-04-21 09:00:00] -->
<!-- update -->

<!-- [2016-04-21 12:51:00] -->
<!-- update -->

<!-- [2016-04-22 09:00:00] -->
<!-- update -->

<!-- [2016-04-22 11:34:00] -->
<!-- update -->

<!-- [2016-04-27 10:17:00] -->
<!-- update -->

<!-- [2016-05-03 09:00:00] -->
<!-- update -->

<!-- [2016-05-16 09:00:00] -->
<!-- update -->

<!-- [2016-05-16 11:34:00] -->
<!-- update -->

<!-- [2016-05-19 11:34:00] -->
<!-- update -->

<!-- [2016-05-19 12:51:00] -->
<!-- update -->

<!-- [2016-05-24 09:00:00] -->
<!-- update -->

<!-- [2016-05-26 09:00:00] -->
<!-- update -->

<!-- [2016-06-04 10:17:00] -->
<!-- update -->

<!-- [2016-06-04 11:34:00] -->
<!-- update -->

<!-- [2016-06-06 09:00:00] -->
<!-- update -->

<!-- [2016-06-07 09:00:00] -->
<!-- update -->

<!-- [2016-06-13 09:00:00] -->
<!-- update -->

<!-- [2016-06-17 09:00:00] -->
<!-- update -->

<!-- [2016-06-17 11:34:00] -->
<!-- update -->

<!-- [2016-06-19 09:00:00] -->
<!-- update -->

<!-- [2016-06-21 09:00:00] -->
<!-- update -->

<!-- [2016-06-25 09:00:00] -->
<!-- update -->

<!-- [2016-06-25 12:51:00] -->
<!-- update -->

<!-- [2016-06-27 09:00:00] -->
<!-- update -->

<!-- [2016-06-27 10:17:00] -->
<!-- update -->

<!-- [2016-06-28 09:00:00] -->
<!-- update -->

<!-- [2016-06-28 11:34:00] -->
<!-- update -->

<!-- [2016-07-02 09:00:00] -->
<!-- update -->

<!-- [2016-07-02 10:17:00] -->
<!-- update -->

<!-- [2016-07-02 11:34:00] -->
<!-- update -->

<!-- [2016-07-08 09:00:00] -->
<!-- update -->

<!-- [2016-07-09 09:00:00] -->
<!-- update -->

<!-- [2016-07-09 10:17:00] -->
<!-- update -->

<!-- [2016-07-09 11:34:00] -->
<!-- update -->

<!-- [2016-07-09 12:51:00] -->
<!-- update -->

<!-- [2016-07-10 09:00:00] -->
<!-- update -->

<!-- [2016-07-10 10:17:00] -->
<!-- update -->

<!-- [2016-07-10 13:08:00] -->
<!-- update -->

<!-- [2016-07-22 09:00:00] -->
<!-- update -->

<!-- [2016-07-23 09:00:00] -->
<!-- update -->

<!-- [2016-07-23 10:17:00] -->
<!-- update -->

<!-- [2016-07-27 10:17:00] -->
<!-- update -->

<!-- [2016-07-27 11:34:00] -->
<!-- update -->

<!-- [2016-07-30 11:34:00] -->
<!-- update -->

<!-- [2016-07-31 09:00:00] -->
<!-- update -->

<!-- [2016-08-02 09:00:00] -->
<!-- update -->

<!-- [2016-08-03 12:51:00] -->
<!-- update -->

<!-- [2016-08-03 14:25:00] -->
<!-- update -->

<!-- [2016-08-10 10:17:00] -->
<!-- update -->

<!-- [2016-08-16 09:00:00] -->
<!-- update -->

<!-- [2016-08-17 11:34:00] -->
<!-- update -->

<!-- [2016-08-17 12:51:00] -->
<!-- update -->

<!-- [2016-08-17 13:08:00] -->
<!-- update -->

<!-- [2016-08-17 14:25:00] -->
<!-- update -->

<!-- [2016-08-21 09:00:00] -->
<!-- update -->

<!-- [2016-08-21 11:34:00] -->
<!-- update -->

<!-- [2016-08-24 09:00:00] -->
<!-- update -->

<!-- [2016-08-24 10:17:00] -->
<!-- update -->

<!-- [2016-08-24 12:51:00] -->
<!-- update -->

<!-- [2016-09-15 09:00:00] -->
<!-- update -->

<!-- [2016-09-15 10:17:00] -->
<!-- update -->

<!-- [2016-09-15 11:34:00] -->
<!-- update -->

<!-- [2016-09-21 09:00:00] -->
<!-- update -->

<!-- [2016-09-21 11:34:00] -->
<!-- update -->

<!-- [2016-10-03 09:00:00] -->
<!-- update -->

<!-- [2016-10-03 10:17:00] -->
<!-- update -->

<!-- [2016-10-09 09:00:00] -->
<!-- update -->

<!-- [2016-10-09 11:34:00] -->
<!-- update -->

<!-- [2016-10-15 10:17:00] -->
<!-- update -->

<!-- [2016-10-15 12:51:00] -->
<!-- update -->

<!-- [2016-10-16 09:00:00] -->
<!-- update -->

<!-- [2016-10-31 09:00:00] -->
<!-- update -->

<!-- [2016-10-31 11:34:00] -->
<!-- update -->

<!-- [2016-11-04 09:00:00] -->
<!-- update -->

<!-- [2016-11-19 09:00:00] -->
<!-- update -->

<!-- [2016-11-19 11:34:00] -->
<!-- update -->

<!-- [2016-11-27 09:00:00] -->
<!-- update -->

<!-- [2016-11-27 11:34:00] -->
<!-- update -->

<!-- [2016-11-28 10:17:00] -->
<!-- update -->

<!-- [2016-11-28 12:51:00] -->
<!-- update -->

<!-- [2016-12-02 11:34:00] -->
<!-- update -->

<!-- [2016-12-05 11:34:00] -->
<!-- update -->

<!-- [2016-12-19 10:17:00] -->
<!-- update -->

<!-- [2016-12-19 11:34:00] -->
<!-- update -->

<!-- [2016-12-19 12:51:00] -->
<!-- update -->

<!-- [2016-12-26 09:00:00] -->
<!-- update -->

<!-- [2016-12-26 10:17:00] -->
<!-- update -->

<!-- [2016-12-26 12:51:00] -->
<!-- update -->

<!-- [2016-12-26 13:08:00] -->
<!-- update -->

<!-- [2016-12-27 12:51:00] -->
<!-- update -->

<!-- [2016-12-29 10:17:00] -->
<!-- update -->

<!-- [2015-01-22 09:00:00] -->
<!-- update -->

<!-- [2015-01-22 11:34:00] -->
<!-- update -->

<!-- [2015-01-22 12:51:00] -->
<!-- update -->

<!-- [2015-01-26 12:51:00] -->
<!-- update -->

<!-- [2015-02-06 09:00:00] -->
<!-- update -->

<!-- [2015-02-16 10:17:00] -->
<!-- update -->

<!-- [2015-02-16 11:34:00] -->
<!-- update -->

<!-- [2015-02-23 11:34:00] -->
<!-- update -->

<!-- [2015-02-25 09:00:00] -->
<!-- update -->

<!-- [2015-02-25 10:17:00] -->
<!-- update -->

<!-- [2015-02-25 11:34:00] -->
<!-- update -->

<!-- [2015-03-17 10:17:00] -->
<!-- update -->

<!-- [2015-03-27 09:00:00] -->
<!-- update -->

<!-- [2015-03-27 10:17:00] -->
<!-- update -->

<!-- [2015-03-30 11:34:00] -->
<!-- update -->

<!-- [2015-04-06 09:00:00] -->
<!-- update -->

<!-- [2015-04-13 09:00:00] -->
<!-- update -->

<!-- [2015-04-13 10:17:00] -->
<!-- update -->

<!-- [2015-04-13 11:34:00] -->
<!-- update -->

<!-- [2015-04-13 12:51:00] -->
<!-- update -->

<!-- [2015-04-21 09:00:00] -->
<!-- update -->

<!-- [2015-04-21 10:17:00] -->
<!-- update -->

<!-- [2015-04-21 11:34:00] -->
<!-- update -->

<!-- [2015-04-28 11:34:00] -->
<!-- update -->

<!-- [2015-04-28 12:51:00] -->
<!-- update -->

<!-- [2015-04-30 11:34:00] -->
<!-- update -->

<!-- [2015-05-28 09:00:00] -->
<!-- update -->

<!-- [2015-06-04 09:00:00] -->
<!-- update -->

<!-- [2015-06-04 11:34:00] -->
<!-- update -->

<!-- [2015-06-08 11:34:00] -->
<!-- update -->

<!-- [2015-06-08 13:08:00] -->
<!-- update -->

<!-- [2015-06-25 09:00:00] -->
<!-- update -->

<!-- [2015-06-25 10:17:00] -->
<!-- update -->

<!-- [2015-06-25 11:34:00] -->
<!-- update -->

<!-- [2015-06-29 09:00:00] -->
<!-- update -->

<!-- [2015-06-29 10:17:00] -->
<!-- update -->

<!-- [2015-07-08 09:00:00] -->
<!-- update -->

<!-- [2015-07-09 09:00:00] -->
<!-- update -->

<!-- [2015-07-09 11:34:00] -->
<!-- update -->

<!-- [2015-08-04 10:17:00] -->
<!-- update -->

<!-- [2015-08-05 09:00:00] -->
<!-- update -->

<!-- [2015-08-05 11:34:00] -->
<!-- update -->

<!-- [2015-08-06 09:00:00] -->
<!-- update -->

<!-- [2015-08-10 09:00:00] -->
<!-- update -->

<!-- [2015-08-13 09:00:00] -->
<!-- update -->

<!-- [2015-08-13 10:17:00] -->
<!-- update -->

<!-- [2015-08-13 11:34:00] -->
<!-- update -->

<!-- [2015-08-20 11:34:00] -->
<!-- update -->

<!-- [2015-08-25 11:34:00] -->
<!-- update -->

<!-- [2015-08-27 10:17:00] -->
<!-- update -->

<!-- [2015-08-28 09:00:00] -->
<!-- update -->

<!-- [2015-08-28 10:17:00] -->
<!-- update -->

<!-- [2015-08-28 12:51:00] -->
<!-- update -->

<!-- [2015-08-28 13:08:00] -->
<!-- update -->

<!-- [2015-09-10 10:17:00] -->
<!-- update -->

<!-- [2015-09-11 09:00:00] -->
<!-- update -->

<!-- [2015-09-18 10:17:00] -->
<!-- update -->

<!-- [2015-09-18 11:34:00] -->
<!-- update -->

<!-- [2015-09-22 09:00:00] -->
<!-- update -->

<!-- [2015-09-22 11:34:00] -->
<!-- update -->

<!-- [2015-09-24 10:17:00] -->
<!-- update -->

<!-- [2015-09-24 11:34:00] -->
<!-- update -->

<!-- [2015-09-24 13:08:00] -->
<!-- update -->

<!-- [2015-09-24 14:25:00] -->
<!-- update -->

<!-- [2015-10-07 11:34:00] -->
<!-- update -->

<!-- [2015-10-08 09:00:00] -->
<!-- update -->

<!-- [2015-10-08 10:17:00] -->
<!-- update -->

<!-- [2015-10-09 10:17:00] -->
<!-- update -->

<!-- [2015-10-09 11:34:00] -->
<!-- update -->

<!-- [2015-10-09 14:25:00] -->
<!-- update -->

<!-- [2015-10-12 10:17:00] -->
<!-- update -->

<!-- [2015-10-12 12:51:00] -->
<!-- update -->

<!-- [2015-10-12 13:08:00] -->
<!-- update -->

<!-- [2015-10-14 10:17:00] -->
<!-- update -->

<!-- [2015-10-14 11:34:00] -->
<!-- update -->

<!-- [2015-10-22 09:00:00] -->
<!-- update -->

<!-- [2015-10-22 10:17:00] -->
<!-- update -->

<!-- [2015-10-22 11:34:00] -->
<!-- update -->

<!-- [2015-10-22 12:51:00] -->
<!-- update -->

<!-- [2015-10-23 10:17:00] -->
<!-- update -->

<!-- [2015-10-23 11:34:00] -->
<!-- update -->

<!-- [2015-10-23 12:51:00] -->
<!-- update -->

<!-- [2015-11-04 09:00:00] -->
<!-- update -->

<!-- [2015-11-06 09:00:00] -->
<!-- update -->

<!-- [2015-11-06 10:17:00] -->
<!-- update -->

<!-- [2015-11-10 10:17:00] -->
<!-- update -->

<!-- [2015-11-12 11:34:00] -->
<!-- update -->

<!-- [2016-01-12 10:17:00] -->
<!-- update -->

<!-- [2016-01-12 11:34:00] -->
<!-- update -->

<!-- [2016-01-26 10:17:00] -->
<!-- update -->

<!-- [2016-01-26 11:34:00] -->
<!-- update -->

<!-- [2016-01-29 09:00:00] -->
<!-- update -->

<!-- [2016-01-29 10:17:00] -->
<!-- update -->

<!-- [2016-01-29 11:34:00] -->
<!-- update -->

<!-- [2016-02-09 12:51:00] -->
<!-- update -->

<!-- [2016-02-10 09:00:00] -->
<!-- update -->

<!-- [2016-02-25 09:00:00] -->
<!-- update -->

<!-- [2016-03-01 09:00:00] -->
<!-- update -->

<!-- [2016-03-08 09:00:00] -->
<!-- update -->

<!-- [2016-03-09 09:00:00] -->
<!-- update -->

<!-- [2016-03-13 09:00:00] -->
<!-- update -->

<!-- [2016-04-07 09:00:00] -->
<!-- update -->

<!-- [2016-04-07 10:17:00] -->
<!-- update -->

<!-- [2016-04-07 11:34:00] -->
<!-- update -->

<!-- [2016-04-21 09:00:00] -->
<!-- update -->

<!-- [2016-04-22 09:00:00] -->
<!-- update -->

<!-- [2016-04-25 09:00:00] -->
<!-- update -->

<!-- [2016-04-25 10:17:00] -->
<!-- update -->

<!-- [2016-05-19 11:34:00] -->
<!-- update -->

<!-- [2016-05-30 09:00:00] -->
<!-- update -->

<!-- [2016-05-30 10:17:00] -->
<!-- update -->

<!-- [2016-05-30 11:34:00] -->
<!-- update -->

<!-- [2016-05-31 10:17:00] -->
<!-- update -->

<!-- [2016-06-13 09:00:00] -->
<!-- update -->

<!-- [2016-06-16 10:17:00] -->
<!-- update -->

<!-- [2016-06-17 09:00:00] -->
<!-- update -->

<!-- [2016-06-17 10:17:00] -->
<!-- update -->

<!-- [2016-06-20 10:17:00] -->
<!-- update -->

<!-- [2016-06-20 11:34:00] -->
<!-- update -->

<!-- [2016-06-23 09:00:00] -->
<!-- update -->

<!-- [2016-07-02 09:00:00] -->
<!-- update -->

<!-- [2016-07-13 10:17:00] -->
<!-- update -->

<!-- [2016-07-18 09:00:00] -->
<!-- update -->

<!-- [2016-07-18 10:17:00] -->
<!-- update -->

<!-- [2016-07-29 10:17:00] -->
<!-- update -->

<!-- [2016-08-11 09:00:00] -->
<!-- update -->

<!-- [2016-08-11 10:17:00] -->
<!-- update -->

<!-- [2016-08-19 09:00:00] -->
<!-- update -->

<!-- [2016-08-24 09:00:00] -->
<!-- update -->

<!-- [2016-08-24 11:34:00] -->
<!-- update -->

<!-- [2016-09-09 09:00:00] -->
<!-- update -->

<!-- [2016-09-09 10:17:00] -->
<!-- update -->

<!-- [2016-09-22 09:00:00] -->
<!-- update -->

<!-- [2016-09-26 11:34:00] -->
<!-- update -->

<!-- [2016-09-30 09:00:00] -->
<!-- update -->

<!-- [2016-09-30 12:51:00] -->
<!-- update -->

<!-- [2016-10-03 10:17:00] -->
<!-- update -->

<!-- [2016-10-18 12:51:00] -->
<!-- update -->

<!-- [2016-10-18 13:08:00] -->
<!-- update -->

<!-- [2016-10-20 09:00:00] -->
<!-- update -->

<!-- [2016-10-20 10:17:00] -->
<!-- update -->

<!-- [2016-10-20 11:34:00] -->
<!-- update -->

<!-- [2016-10-20 12:51:00] -->
<!-- update -->

<!-- [2016-11-03 09:00:00] -->
<!-- update -->

<!-- [2016-11-03 11:34:00] -->
<!-- update -->

<!-- [2016-11-15 11:34:00] -->
<!-- update -->

<!-- [2016-11-15 13:08:00] -->
<!-- update -->

<!-- [2016-11-15 14:25:00] -->
<!-- update -->

<!-- [2016-11-16 09:00:00] -->
<!-- update -->

<!-- [2016-11-16 10:17:00] -->
<!-- update -->

<!-- [2016-11-16 12:51:00] -->
<!-- update -->

<!-- [2016-11-17 09:00:00] -->
<!-- update -->

<!-- [2016-11-17 10:17:00] -->
<!-- update -->

<!-- [2016-11-18 09:00:00] -->
<!-- update -->

<!-- [2016-11-18 10:17:00] -->
<!-- update -->

<!-- [2016-11-18 11:34:00] -->
<!-- update -->

<!-- [2016-12-05 09:00:00] -->
<!-- update -->

<!-- [2016-12-05 10:17:00] -->
<!-- update -->

<!-- [2016-12-07 10:17:00] -->
<!-- update -->

<!-- [2016-12-08 10:17:00] -->
<!-- update -->

<!-- [2016-12-08 11:34:00] -->
<!-- update -->

<!-- [2015-01-13 09:00:00] -->
<!-- update -->

<!-- [2015-01-13 11:34:00] -->
<!-- update -->

<!-- [2015-01-13 13:08:00] -->
<!-- update -->

<!-- [2015-01-14 09:00:00] -->
<!-- update -->

<!-- [2015-01-16 09:00:00] -->
<!-- update -->

<!-- [2015-01-23 09:00:00] -->
<!-- update -->

<!-- [2015-01-23 10:17:00] -->
<!-- update -->

<!-- [2015-01-23 11:34:00] -->
<!-- update -->

<!-- [2015-01-29 09:00:00] -->
<!-- update -->

<!-- [2015-02-09 09:00:00] -->
<!-- update -->

<!-- [2015-02-13 10:17:00] -->
<!-- update -->

<!-- [2015-02-13 11:34:00] -->
<!-- update -->

<!-- [2015-02-18 11:34:00] -->
<!-- update -->

<!-- [2015-03-11 11:34:00] -->
<!-- update -->

<!-- [2015-03-11 13:08:00] -->
<!-- update -->

<!-- [2015-03-11 14:25:00] -->
<!-- update -->

<!-- [2015-04-20 09:00:00] -->
<!-- update -->

<!-- [2015-04-20 11:34:00] -->
<!-- update -->

<!-- [2015-04-21 11:34:00] -->
<!-- update -->

<!-- [2015-04-21 12:51:00] -->
<!-- update -->

<!-- [2015-04-24 10:17:00] -->
<!-- update -->

<!-- [2015-04-24 11:34:00] -->
<!-- update -->

<!-- [2015-05-18 12:51:00] -->
<!-- update -->

<!-- [2015-05-27 09:00:00] -->
<!-- update -->

<!-- [2015-05-27 10:17:00] -->
<!-- update -->

<!-- [2015-05-29 10:17:00] -->
<!-- update -->

<!-- [2015-05-29 11:34:00] -->
<!-- update -->

<!-- [2015-06-01 09:00:00] -->
<!-- update -->

<!-- [2015-06-01 10:17:00] -->
<!-- update -->

<!-- [2015-06-12 09:00:00] -->
<!-- update -->

<!-- [2015-06-18 09:00:00] -->
<!-- update -->

<!-- [2015-06-18 10:17:00] -->
<!-- update -->

<!-- [2015-07-02 09:00:00] -->
<!-- update -->

<!-- [2015-07-02 10:17:00] -->
<!-- update -->

<!-- [2015-07-02 11:34:00] -->
<!-- update -->

<!-- [2015-07-02 12:51:00] -->
<!-- update -->

<!-- [2015-07-28 10:17:00] -->
<!-- update -->

<!-- [2015-07-28 11:34:00] -->
<!-- update -->

<!-- [2015-08-05 11:34:00] -->
<!-- update -->

<!-- [2015-08-06 10:17:00] -->
<!-- update -->

<!-- [2015-08-06 11:34:00] -->
<!-- update -->

<!-- [2015-08-06 12:51:00] -->
<!-- update -->

<!-- [2015-08-13 09:00:00] -->
<!-- update -->

<!-- [2015-08-13 11:34:00] -->
<!-- update -->

<!-- [2015-08-19 09:00:00] -->
<!-- update -->

<!-- [2015-08-28 09:00:00] -->
<!-- update -->

<!-- [2015-08-31 09:00:00] -->
<!-- update -->

<!-- [2015-09-01 10:17:00] -->
<!-- update -->

<!-- [2015-09-01 11:34:00] -->
<!-- update -->

<!-- [2015-09-11 10:17:00] -->
<!-- update -->

<!-- [2015-09-11 11:34:00] -->
<!-- update -->

<!-- [2015-09-15 10:17:00] -->
<!-- update -->

<!-- [2015-09-17 09:00:00] -->
<!-- update -->

<!-- [2015-09-17 10:17:00] -->
<!-- update -->

<!-- [2015-09-29 09:00:00] -->
<!-- update -->

<!-- [2015-09-29 10:17:00] -->
<!-- update -->

<!-- [2015-09-29 11:34:00] -->
<!-- update -->

<!-- [2015-10-07 09:00:00] -->
<!-- update -->

<!-- [2015-10-13 10:17:00] -->
<!-- update -->

<!-- [2015-10-13 14:25:00] -->
<!-- update -->

<!-- [2015-10-26 09:00:00] -->
<!-- update -->

<!-- [2015-10-26 10:17:00] -->
<!-- update -->

<!-- [2015-10-26 11:34:00] -->
<!-- update -->

<!-- [2015-10-27 10:17:00] -->
<!-- update -->

<!-- [2015-10-27 11:34:00] -->
<!-- update -->

<!-- [2015-10-29 11:34:00] -->
<!-- update -->

<!-- [2015-11-03 09:00:00] -->
<!-- update -->

<!-- [2015-11-03 12:51:00] -->
<!-- update -->

<!-- [2015-11-09 10:17:00] -->
<!-- update -->

<!-- [2015-11-09 11:34:00] -->
<!-- update -->

<!-- [2015-12-26 09:00:00] -->
<!-- update -->

<!-- [2016-01-27 09:00:00] -->
<!-- update -->

<!-- [2016-01-27 10:17:00] -->
<!-- update -->

<!-- [2016-01-27 11:34:00] -->
<!-- update -->

<!-- [2016-02-09 09:00:00] -->
<!-- update -->

<!-- [2016-02-09 10:17:00] -->
<!-- update -->

<!-- [2016-02-09 11:34:00] -->
<!-- update -->

<!-- [2016-02-10 09:00:00] -->
<!-- update -->

<!-- [2016-02-10 10:17:00] -->
<!-- update -->

<!-- [2016-02-12 09:00:00] -->
<!-- update -->

<!-- [2016-02-12 10:17:00] -->
<!-- update -->

<!-- [2016-02-15 09:00:00] -->
<!-- update -->

<!-- [2016-02-15 11:34:00] -->
<!-- update -->

<!-- [2016-02-19 10:17:00] -->
<!-- update -->

<!-- [2016-02-19 11:34:00] -->
<!-- update -->

<!-- [2016-02-19 12:51:00] -->
<!-- update -->

<!-- [2016-02-22 09:00:00] -->
<!-- update -->

<!-- [2016-03-07 10:17:00] -->
<!-- update -->

<!-- [2016-03-07 11:34:00] -->
<!-- update -->

<!-- [2016-03-10 09:00:00] -->
<!-- update -->

<!-- [2016-03-10 10:17:00] -->
<!-- update -->

<!-- [2016-03-10 11:34:00] -->
<!-- update -->

<!-- [2016-03-10 13:08:00] -->
<!-- update -->

<!-- [2016-03-22 10:17:00] -->
<!-- update -->

<!-- [2016-03-24 10:17:00] -->
<!-- update -->

<!-- [2016-03-24 12:51:00] -->
<!-- update -->

<!-- [2016-03-25 09:00:00] -->
<!-- update -->

<!-- [2016-03-25 11:34:00] -->
<!-- update -->

<!-- [2016-04-19 10:17:00] -->
<!-- update -->

<!-- [2016-04-19 11:34:00] -->
<!-- update -->

<!-- [2016-04-20 09:00:00] -->
<!-- update -->

<!-- [2016-04-22 09:00:00] -->
<!-- update -->

<!-- [2016-04-22 10:17:00] -->
<!-- update -->

<!-- [2016-04-25 10:17:00] -->
<!-- update -->

<!-- [2016-04-25 11:34:00] -->
<!-- update -->

<!-- [2016-04-27 10:17:00] -->
<!-- update -->

<!-- [2016-05-04 10:17:00] -->
<!-- update -->

<!-- [2016-05-04 13:08:00] -->
<!-- update -->

<!-- [2016-05-16 11:34:00] -->
<!-- update -->

<!-- [2016-05-20 10:17:00] -->
<!-- update -->

<!-- [2016-05-20 11:34:00] -->
<!-- update -->

<!-- [2016-05-30 09:00:00] -->
<!-- update -->

<!-- [2016-05-31 09:00:00] -->
<!-- update -->

<!-- [2016-05-31 10:17:00] -->
<!-- update -->

<!-- [2016-06-01 09:00:00] -->
<!-- update -->

<!-- [2016-06-01 10:17:00] -->
<!-- update -->

<!-- [2016-06-02 10:17:00] -->
<!-- update -->

<!-- [2016-06-02 12:51:00] -->
<!-- update -->

<!-- [2016-06-02 13:08:00] -->
<!-- update -->

<!-- [2016-06-03 10:17:00] -->
<!-- update -->

<!-- [2016-06-14 09:00:00] -->
<!-- update -->

<!-- [2016-06-14 11:34:00] -->
<!-- update -->

<!-- [2016-06-15 09:00:00] -->
<!-- update -->

<!-- [2016-06-15 11:34:00] -->
<!-- update -->

<!-- [2016-07-11 12:51:00] -->
<!-- update -->

<!-- [2016-07-22 11:34:00] -->
<!-- update -->

<!-- [2016-07-26 09:00:00] -->
<!-- update -->

<!-- [2016-08-08 10:17:00] -->
<!-- update -->

<!-- [2016-08-09 12:51:00] -->
<!-- update -->

<!-- [2016-09-09 10:17:00] -->
<!-- update -->

<!-- [2016-09-20 10:17:00] -->
<!-- update -->

<!-- [2016-09-20 11:34:00] -->
<!-- update -->

<!-- [2016-09-30 10:17:00] -->
<!-- update -->

<!-- [2016-10-03 09:00:00] -->
<!-- update -->

<!-- [2016-10-03 10:17:00] -->
<!-- update -->

<!-- [2016-10-03 11:34:00] -->
<!-- update -->

<!-- [2016-10-03 12:51:00] -->
<!-- update -->

<!-- [2016-10-24 09:00:00] -->
<!-- update -->

<!-- [2016-11-14 10:17:00] -->
<!-- update -->

<!-- [2016-11-14 11:34:00] -->
<!-- update -->

<!-- [2016-11-14 12:51:00] -->
<!-- update -->

<!-- [2016-11-18 12:51:00] -->
<!-- update -->

<!-- [2016-11-18 13:08:00] -->
<!-- update -->

<!-- [2016-12-05 09:00:00] -->
<!-- update -->

<!-- [2016-12-05 10:17:00] -->
<!-- update -->

<!-- [2016-12-05 11:34:00] -->
<!-- update -->

<!-- [2016-12-06 09:00:00] -->
<!-- update -->

<!-- [2016-12-08 12:51:00] -->
<!-- update -->

<!-- [2016-12-08 13:08:00] -->
<!-- update -->

// [2026-01-05 09:00:00]
// update

<!-- [2015-01-23 10:17:00] -->
<!-- update -->

<!-- [2015-01-29 09:00:00] -->
<!-- update -->

<!-- [2015-01-29 10:17:00] -->
<!-- update -->

<!-- [2015-01-29 12:51:00] -->
<!-- update -->

<!-- [2015-02-12 09:00:00] -->
<!-- update -->

<!-- [2015-02-12 11:34:00] -->
<!-- update -->

<!-- [2015-03-18 09:00:00] -->
<!-- update -->

<!-- [2015-03-18 10:17:00] -->
<!-- update -->

<!-- [2015-03-18 11:34:00] -->
<!-- update -->

<!-- [2015-03-20 12:51:00] -->
<!-- update -->

<!-- [2015-03-20 13:08:00] -->
<!-- update -->

<!-- [2015-03-20 14:25:00] -->
<!-- update -->

<!-- [2015-03-27 11:34:00] -->
<!-- update -->

<!-- [2015-04-06 09:00:00] -->
<!-- update -->

<!-- [2015-04-21 09:00:00] -->
<!-- update -->

<!-- [2015-04-21 11:34:00] -->
<!-- update -->

<!-- [2015-04-23 11:34:00] -->
<!-- update -->

<!-- [2015-04-23 12:51:00] -->
<!-- update -->

<!-- [2015-04-23 13:08:00] -->
<!-- update -->

<!-- [2015-04-23 14:25:00] -->
<!-- update -->

<!-- [2015-04-24 12:51:00] -->
<!-- update -->

<!-- [2015-05-18 09:00:00] -->
<!-- update -->

<!-- [2015-05-18 11:34:00] -->
<!-- update -->

<!-- [2015-06-17 09:00:00] -->
<!-- update -->

<!-- [2015-06-17 10:17:00] -->
<!-- update -->

<!-- [2015-06-17 13:08:00] -->
<!-- update -->

<!-- [2015-06-30 10:17:00] -->
<!-- update -->

<!-- [2015-07-27 12:51:00] -->
<!-- update -->

<!-- [2015-07-28 09:00:00] -->
<!-- update -->

<!-- [2015-07-28 11:34:00] -->
<!-- update -->

<!-- [2015-07-29 10:17:00] -->
<!-- update -->

<!-- [2015-07-31 10:17:00] -->
<!-- update -->

<!-- [2015-08-06 09:00:00] -->
<!-- update -->

<!-- [2015-08-06 11:34:00] -->
<!-- update -->

<!-- [2015-08-10 10:17:00] -->
<!-- update -->

<!-- [2015-08-10 11:34:00] -->
<!-- update -->

<!-- [2015-08-13 10:17:00] -->
<!-- update -->

<!-- [2015-09-11 09:00:00] -->
<!-- update -->

<!-- [2015-09-11 10:17:00] -->
<!-- update -->

<!-- [2015-09-11 11:34:00] -->
<!-- update -->

<!-- [2015-09-28 09:00:00] -->
<!-- update -->

<!-- [2015-09-28 10:17:00] -->
<!-- update -->

<!-- [2015-09-30 10:17:00] -->
<!-- update -->

<!-- [2015-09-30 11:34:00] -->
<!-- update -->

<!-- [2015-10-01 09:00:00] -->
<!-- update -->

<!-- [2015-10-01 11:34:00] -->
<!-- update -->

<!-- [2015-10-02 09:00:00] -->
<!-- update -->

<!-- [2015-10-02 11:34:00] -->
<!-- update -->

<!-- [2015-10-07 09:00:00] -->
<!-- update -->

<!-- [2015-10-07 10:17:00] -->
<!-- update -->

<!-- [2015-10-13 10:17:00] -->
<!-- update -->

<!-- [2015-10-13 11:34:00] -->
<!-- update -->

<!-- [2015-10-26 09:00:00] -->
<!-- update -->

<!-- [2015-10-26 10:17:00] -->
<!-- update -->

<!-- [2015-10-26 12:51:00] -->
<!-- update -->

<!-- [2015-10-29 10:17:00] -->
<!-- update -->

<!-- [2016-01-13 09:00:00] -->
<!-- update -->
