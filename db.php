<?php
// Database connection
class DB {
    private static $pdo = null;
}
// fix session handling
// refactor helper function
// add error logging
// refactor helper function
// add pagination logic
// improve security checks
// add error logging
// refactor helper function
// improve security checks
// add error logging
// add pagination logic
// add database query optimization
// refactor helper function
// fix session handling
// add error logging
// add pagination logic
// add error logging
// add pagination logic
// improve security checks
// fix session handling
// add pagination logic
// add error logging
// improve security checks
// improve security checks
// fix session handling
// add error logging
// add database query optimization
// improve security checks
// fix session handling
// improve security checks
// fix session handling
// fix session handling
// refactor helper function
// fix session handling
// improve input sanitization
// add error logging
// improve security checks
// improve input sanitization
// add database query optimization
// add error logging
// improve security checks
// improve input sanitization
// improve input sanitization
// fix session handling
// add error logging
// add database query optimization
// refactor helper function
// refactor helper function
// refactor helper function
// add database query optimization
// add database query optimization
// refactor helper function
// fix session handling
// fix session handling
// improve input sanitization
// improve input sanitization
// refactor helper function
// improve security checks
// add error logging
// fix session handling
// add database query optimization
// add database query optimization
// refactor helper function
// add database query optimization
// add pagination logic
// improve input sanitization
// add error logging
// improve input sanitization
// add database query optimization
// refactor helper function
// improve input sanitization
// refactor helper function
// improve security checks
// refactor helper function
// improve security checks
// improve input sanitization
// refactor helper function
// add database query optimization
// fix session handling
// add error logging
// improve input sanitization
// improve security checks
// refactor helper function
// refactor helper function
// improve input sanitization
// add database query optimization
// add pagination logic
// add pagination logic
// add database query optimization
// add database query optimization
// fix session handling
// add database query optimization
// add pagination logic
// improve input sanitization
// improve security checks
// improve security checks
// improve input sanitization
// add database query optimization
// refactor helper function
// improve input sanitization
// fix session handling
// fix session handling
// improve input sanitization
// add pagination logic
// fix session handling


function env(string $key, mixed $default = null): mixed {
    return $_ENV[$key] ?? getenv($key) ?: $default;
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


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function str_starts_with_any(string $haystack, array $needles): bool {
    foreach ($needles as $needle) {
        if (str_starts_with($haystack, $needle)) return true;
    }
    return false;
}


function is_url(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}


function collect(array $items): array {
    return array_values(array_filter($items));
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function now(): \DateTime {
    return new \DateTime('now');
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}


function collect(array $items): array {
    return array_values(array_filter($items));
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


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function collect(array $items): array {
    return array_values(array_filter($items));
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function class_basename(string $class): string {
    $parts = explode('\\', $class);
    return end($parts);
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function class_basename(string $class): string {
    $parts = explode('\\', $class);
    return end($parts);
}


function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function validate_email(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
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


function camel_to_snake(string $str): string {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($str)));
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
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


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
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


function camel_to_snake(string $str): string {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($str)));
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
}


function env(string $key, mixed $default = null): mixed {
    return $_ENV[$key] ?? getenv($key) ?: $default;
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
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


function array_pluck(array $arr, string $key): array {
    return array_column($arr, $key);
}


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
}


function human_bytes(int $bytes): string {
    foreach (['B', 'KB', 'MB', 'GB', 'TB'] as $unit) {
        if ($bytes < 1024) return round($bytes, 2) . ' ' . $unit;
        $bytes /= 1024;
    }
    return round($bytes, 2) . ' PB';
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


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function sanitize_input(string $input): string {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function str_limit(string $value, int $limit = 100, string $end = '...'): string {
    if (mb_strwidth($value, 'UTF-8') <= $limit) return $value;
    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
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


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function class_basename(string $class): string {
    $parts = explode('\\', $class);
    return end($parts);
}


function class_basename(string $class): string {
    $parts = explode('\\', $class);
    return end($parts);
}


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
}


function camel_to_snake(string $str): string {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($str)));
}


function env(string $key, mixed $default = null): mixed {
    return $_ENV[$key] ?? getenv($key) ?: $default;
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


function dd(mixed ...$vars): never {
    foreach ($vars as $v) {
        var_dump($v);
    }
    die(1);
}


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function slugify(string $text): string {
    $text = strtolower(trim($text));
    $text = preg_replace('/[^\w\s-]/', '', $text);
    return preg_replace('/[\s_-]+/', '-', $text);
}


function truncate(string $str, int $len = 100, string $suffix = '...'): string {
    return mb_strlen($str) <= $len
        ? $str
        : mb_substr($str, 0, $len - mb_strlen($suffix)) . $suffix;
}


function collect(array $items): array {
    return array_values(array_filter($items));
}


function array_group_by(array $arr, string $key): array {
    $grouped = [];
    foreach ($arr as $item) {
        $grouped[$item[$key]][] = $item;
    }
    return $grouped;
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


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function generate_token(int $length = 32): string {
    return bin2hex(random_bytes($length / 2));
}


function value(mixed $value): mixed {
    return $value instanceof \Closure ? $value() : $value;
}


function parse_query_string(string $query): array {
    parse_str($query, $params);
    return $params;
}


function str_between(string $str, string $start, string $end): string {
    $pos = strpos($str, $start);
    if ($pos === false) return '';
    $pos += strlen($start);
    $endPos = strpos($str, $end, $pos);
    return $endPos === false ? '' : substr($str, $pos, $endPos - $pos);
}


function redirect(string $url, int $code = 302): never {
    header('Location: ' . $url, true, $code);
    exit;
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


function array_flatten(array $arr): array {
    $result = [];
    array_walk_recursive($arr, function ($v) use (&$result) {
        $result[] = $v;
    });
    return $result;
}


function tap(mixed $value, callable $callback): mixed {
    $callback($value);
    return $value;
}


function collect(array $items): array {
    return array_values(array_filter($items));
}


function config(string $key, mixed $default = null): mixed {
    static $config = [];
    if (empty($config)) {
        $file = __DIR__ . '/config.php';
        if (file_exists($file)) $config = require $file;
    }
    return data_get($config, $key, $default);
}


function array_except(array $arr, array $keys): array {
    return array_diff_key($arr, array_flip($keys));
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


function format_money(float $amount, string $currency = 'USD'): string {
    return number_format($amount, 2) . ' ' . $currency;
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


function array_only(array $arr, array $keys): array {
    return array_intersect_key($arr, array_flip($keys));
}

// [2026-04-22 09:00:00]
// update

// [2026-04-22 10:17:00]
// update

// [2026-05-07 09:00:00]
// update

// [2026-05-07 12:51:00]
// update

// [2026-05-17 09:00:00]
// update

// [2026-05-17 10:17:00]
// update

// [2026-05-17 11:34:00]
// update

// [2026-05-20 09:00:00]
// update

// [2026-05-20 10:17:00]
// update

// [2026-03-30 09:00:00]
// update

// [2026-03-31 09:00:00]
// update

// [2026-04-22 09:00:00]
// update

// [2026-04-22 11:34:00]
// update

// [2026-04-22 12:51:00]
// update

// [2026-05-04 10:17:00]
// update

// [2026-05-23 09:00:00]
// update

// [2026-07-09 10:17:00]
// update

// [2026-02-16 09:00:00]
// update

// [2026-03-16 09:00:00]
// update

// [2026-04-06 09:00:00]
// update

// [2026-04-06 11:34:00]
// update

// [2026-04-15 09:00:00]
// update

// [2026-04-15 10:17:00]
// update

// [2026-05-22 09:00:00]
// update

// [2026-07-09 09:00:00]
// update

// [2026-07-24 09:00:00]
// update

// [2026-07-24 11:34:00]
// update

// [2026-07-28 10:17:00]
// update

// [2026-03-14 09:00:00]
// update

// [2026-04-06 10:17:00]
// update

// [2026-04-24 09:00:00]
// update

// [2026-04-25 09:00:00]
// update

// [2026-04-25 10:17:00]
// update

// [2026-06-20 09:00:00]
// update

// [2026-06-20 10:17:00]
// update

// [2026-06-30 11:34:00]
// update

// [2026-07-20 09:00:00]
// update

// [2026-07-20 10:17:00]
// update

// [2026-07-23 10:17:00]
// update

<!-- [2015-01-05 09:00:00] -->
<!-- update -->

<!-- [2015-01-06 13:08:00] -->
<!-- update -->

<!-- [2015-01-09 11:34:00] -->
<!-- update -->

<!-- [2015-01-11 10:17:00] -->
<!-- update -->

<!-- [2015-01-11 11:34:00] -->
<!-- update -->

<!-- [2015-01-11 12:51:00] -->
<!-- update -->

<!-- [2015-01-11 13:08:00] -->
<!-- update -->

<!-- [2015-01-24 09:00:00] -->
<!-- update -->

<!-- [2015-01-24 10:17:00] -->
<!-- update -->

<!-- [2015-01-29 09:00:00] -->
<!-- update -->

<!-- [2015-02-02 10:17:00] -->
<!-- update -->

<!-- [2015-02-11 09:00:00] -->
<!-- update -->

<!-- [2015-02-15 10:17:00] -->
<!-- update -->

<!-- [2015-02-15 12:51:00] -->
<!-- update -->

<!-- [2015-02-15 13:08:00] -->
<!-- update -->

<!-- [2015-02-15 14:25:00] -->
<!-- update -->

<!-- [2015-02-18 11:34:00] -->
<!-- update -->

<!-- [2015-02-22 09:00:00] -->
<!-- update -->

<!-- [2015-02-22 10:17:00] -->
<!-- update -->

<!-- [2015-02-22 11:34:00] -->
<!-- update -->

<!-- [2015-03-03 09:00:00] -->
<!-- update -->

<!-- [2015-03-03 11:34:00] -->
<!-- update -->

<!-- [2015-03-04 09:00:00] -->
<!-- update -->

<!-- [2015-03-04 10:17:00] -->
<!-- update -->

<!-- [2015-03-04 11:34:00] -->
<!-- update -->

<!-- [2015-03-07 10:17:00] -->
<!-- update -->

<!-- [2015-03-14 09:00:00] -->
<!-- update -->

<!-- [2015-03-14 10:17:00] -->
<!-- update -->

<!-- [2015-03-14 11:34:00] -->
<!-- update -->

<!-- [2015-03-18 09:00:00] -->
<!-- update -->

<!-- [2015-03-18 10:17:00] -->
<!-- update -->

<!-- [2015-03-18 11:34:00] -->
<!-- update -->

<!-- [2015-03-18 12:51:00] -->
<!-- update -->

<!-- [2015-03-25 10:17:00] -->
<!-- update -->

<!-- [2015-03-28 09:00:00] -->
<!-- update -->

<!-- [2015-03-29 09:00:00] -->
<!-- update -->

<!-- [2015-03-29 10:17:00] -->
<!-- update -->

<!-- [2015-03-30 10:17:00] -->
<!-- update -->

<!-- [2015-03-30 11:34:00] -->
<!-- update -->

<!-- [2015-03-31 11:34:00] -->
<!-- update -->

<!-- [2015-04-10 09:00:00] -->
<!-- update -->

<!-- [2015-04-26 09:00:00] -->
<!-- update -->

<!-- [2015-04-29 10:17:00] -->
<!-- update -->

<!-- [2015-04-29 11:34:00] -->
<!-- update -->

<!-- [2015-04-29 13:08:00] -->
<!-- update -->

<!-- [2015-05-12 09:00:00] -->
<!-- update -->

<!-- [2015-05-13 09:00:00] -->
<!-- update -->

<!-- [2015-05-25 09:00:00] -->
<!-- update -->

<!-- [2015-05-25 13:08:00] -->
<!-- update -->

<!-- [2015-05-27 10:17:00] -->
<!-- update -->

<!-- [2015-05-29 11:34:00] -->
<!-- update -->

<!-- [2015-05-31 10:17:00] -->
<!-- update -->

<!-- [2015-06-07 09:00:00] -->
<!-- update -->

<!-- [2015-06-08 11:34:00] -->
<!-- update -->

<!-- [2015-06-10 09:00:00] -->
<!-- update -->

<!-- [2015-06-10 11:34:00] -->
<!-- update -->

<!-- [2015-06-18 09:00:00] -->
<!-- update -->

<!-- [2015-06-20 09:00:00] -->
<!-- update -->

<!-- [2015-06-23 09:00:00] -->
<!-- update -->

<!-- [2015-06-26 09:00:00] -->
<!-- update -->

<!-- [2015-06-29 09:00:00] -->
<!-- update -->

<!-- [2015-07-01 09:00:00] -->
<!-- update -->

<!-- [2015-07-05 09:00:00] -->
<!-- update -->

<!-- [2015-07-06 12:51:00] -->
<!-- update -->

<!-- [2015-07-06 13:08:00] -->
<!-- update -->

<!-- [2015-07-08 10:17:00] -->
<!-- update -->

<!-- [2015-07-10 09:00:00] -->
<!-- update -->

<!-- [2015-07-10 10:17:00] -->
<!-- update -->

<!-- [2015-07-10 11:34:00] -->
<!-- update -->

<!-- [2015-07-10 12:51:00] -->
<!-- update -->

<!-- [2015-07-28 09:00:00] -->
<!-- update -->

<!-- [2015-08-13 09:00:00] -->
<!-- update -->

<!-- [2015-08-20 10:17:00] -->
<!-- update -->

<!-- [2015-08-20 11:34:00] -->
<!-- update -->

<!-- [2015-08-21 10:17:00] -->
<!-- update -->

<!-- [2015-08-21 11:34:00] -->
<!-- update -->

<!-- [2015-08-22 09:00:00] -->
<!-- update -->

<!-- [2015-08-22 11:34:00] -->
<!-- update -->

<!-- [2015-08-28 11:34:00] -->
<!-- update -->

<!-- [2015-09-03 09:00:00] -->
<!-- update -->

<!-- [2015-09-07 09:00:00] -->
<!-- update -->

<!-- [2015-09-23 09:00:00] -->
<!-- update -->

<!-- [2015-09-23 11:34:00] -->
<!-- update -->

<!-- [2015-09-26 09:00:00] -->
<!-- update -->

<!-- [2015-09-30 11:34:00] -->
<!-- update -->

<!-- [2015-10-03 09:00:00] -->
<!-- update -->

<!-- [2015-10-15 09:00:00] -->
<!-- update -->

<!-- [2015-10-21 10:17:00] -->
<!-- update -->

<!-- [2015-10-23 10:17:00] -->
<!-- update -->

<!-- [2015-11-06 09:00:00] -->
<!-- update -->

<!-- [2015-12-17 09:00:00] -->
<!-- update -->

<!-- [2015-12-17 10:17:00] -->
<!-- update -->

<!-- [2015-12-31 09:00:00] -->
<!-- update -->

<!-- [2016-01-07 09:00:00] -->
<!-- update -->

<!-- [2016-01-07 10:17:00] -->
<!-- update -->

<!-- [2016-01-07 11:34:00] -->
<!-- update -->

<!-- [2016-01-07 12:51:00] -->
<!-- update -->

<!-- [2016-01-10 09:00:00] -->
<!-- update -->

<!-- [2016-01-10 11:34:00] -->
<!-- update -->

<!-- [2016-01-12 09:00:00] -->
<!-- update -->

<!-- [2016-01-17 11:34:00] -->
<!-- update -->

<!-- [2016-01-20 11:34:00] -->
<!-- update -->

<!-- [2016-01-29 09:00:00] -->
<!-- update -->

<!-- [2016-01-31 11:34:00] -->
<!-- update -->

<!-- [2016-02-14 09:00:00] -->
<!-- update -->

<!-- [2016-02-17 09:00:00] -->
<!-- update -->

<!-- [2016-02-17 10:17:00] -->
<!-- update -->

<!-- [2016-02-17 11:34:00] -->
<!-- update -->

<!-- [2016-02-17 13:08:00] -->
<!-- update -->

<!-- [2016-02-20 09:00:00] -->
<!-- update -->

<!-- [2016-02-20 12:51:00] -->
<!-- update -->

<!-- [2016-02-21 09:00:00] -->
<!-- update -->

<!-- [2016-03-05 09:00:00] -->
<!-- update -->

<!-- [2016-03-05 10:17:00] -->
<!-- update -->

<!-- [2016-03-05 12:51:00] -->
<!-- update -->

<!-- [2016-03-06 09:00:00] -->
<!-- update -->

<!-- [2016-03-06 11:34:00] -->
<!-- update -->

<!-- [2016-03-11 09:00:00] -->
<!-- update -->

<!-- [2016-03-11 10:17:00] -->
<!-- update -->

<!-- [2016-03-11 11:34:00] -->
<!-- update -->

<!-- [2016-03-11 12:51:00] -->
<!-- update -->

<!-- [2016-03-20 10:17:00] -->
<!-- update -->

<!-- [2016-03-20 13:08:00] -->
<!-- update -->

<!-- [2016-03-23 10:17:00] -->
<!-- update -->

<!-- [2016-03-24 10:17:00] -->
<!-- update -->

<!-- [2016-03-24 13:08:00] -->
<!-- update -->

<!-- [2016-03-27 11:34:00] -->
<!-- update -->

<!-- [2016-03-27 12:51:00] -->
<!-- update -->

<!-- [2016-04-15 09:00:00] -->
<!-- update -->

<!-- [2016-04-15 10:17:00] -->
<!-- update -->

<!-- [2016-04-16 09:00:00] -->
<!-- update -->

<!-- [2016-04-21 10:17:00] -->
<!-- update -->

<!-- [2016-04-21 11:34:00] -->
<!-- update -->

<!-- [2016-04-22 10:17:00] -->
<!-- update -->

<!-- [2016-04-27 09:00:00] -->
<!-- update -->

<!-- [2016-04-27 11:34:00] -->
<!-- update -->

<!-- [2016-05-12 09:00:00] -->
<!-- update -->

<!-- [2016-05-16 10:17:00] -->
<!-- update -->

<!-- [2016-05-19 09:00:00] -->
<!-- update -->

<!-- [2016-05-19 10:17:00] -->
<!-- update -->

<!-- [2016-06-04 09:00:00] -->
<!-- update -->

<!-- [2016-06-13 10:17:00] -->
<!-- update -->

<!-- [2016-06-13 11:34:00] -->
<!-- update -->

<!-- [2016-06-13 12:51:00] -->
<!-- update -->

<!-- [2016-06-13 13:08:00] -->
<!-- update -->

<!-- [2016-06-13 14:25:00] -->
<!-- update -->

<!-- [2016-06-17 10:17:00] -->
<!-- update -->

<!-- [2016-06-19 10:17:00] -->
<!-- update -->

<!-- [2016-06-19 11:34:00] -->
<!-- update -->

<!-- [2016-06-20 09:00:00] -->
<!-- update -->

<!-- [2016-06-23 09:00:00] -->
<!-- update -->

<!-- [2016-06-25 10:17:00] -->
<!-- update -->

<!-- [2016-06-25 11:34:00] -->
<!-- update -->

<!-- [2016-06-25 13:08:00] -->
<!-- update -->

<!-- [2016-06-25 14:25:00] -->
<!-- update -->

<!-- [2016-06-27 11:34:00] -->
<!-- update -->

<!-- [2016-06-28 10:17:00] -->
<!-- update -->

<!-- [2016-07-10 11:34:00] -->
<!-- update -->

<!-- [2016-07-10 12:51:00] -->
<!-- update -->

<!-- [2016-07-10 14:25:00] -->
<!-- update -->

<!-- [2016-07-11 09:00:00] -->
<!-- update -->

<!-- [2016-07-17 09:00:00] -->
<!-- update -->

<!-- [2016-07-17 10:17:00] -->
<!-- update -->

<!-- [2016-07-22 10:17:00] -->
<!-- update -->

<!-- [2016-07-23 11:34:00] -->
<!-- update -->

<!-- [2016-07-27 09:00:00] -->
<!-- update -->

<!-- [2016-07-30 09:00:00] -->
<!-- update -->

<!-- [2016-07-30 10:17:00] -->
<!-- update -->

<!-- [2016-07-31 10:17:00] -->
<!-- update -->

<!-- [2016-07-31 11:34:00] -->
<!-- update -->

<!-- [2016-07-31 12:51:00] -->
<!-- update -->

<!-- [2016-07-31 13:08:00] -->
<!-- update -->

<!-- [2016-08-03 09:00:00] -->
<!-- update -->

<!-- [2016-08-03 10:17:00] -->
<!-- update -->

<!-- [2016-08-03 11:34:00] -->
<!-- update -->

<!-- [2016-08-03 13:08:00] -->
<!-- update -->

<!-- [2016-08-10 09:00:00] -->
<!-- update -->

<!-- [2016-08-17 09:00:00] -->
<!-- update -->

<!-- [2016-08-17 10:17:00] -->
<!-- update -->

<!-- [2016-08-21 10:17:00] -->
<!-- update -->

<!-- [2016-08-24 11:34:00] -->
<!-- update -->

<!-- [2016-08-24 13:08:00] -->
<!-- update -->

<!-- [2016-08-24 14:25:00] -->
<!-- update -->

<!-- [2016-09-01 09:00:00] -->
<!-- update -->

<!-- [2016-09-01 10:17:00] -->
<!-- update -->

<!-- [2016-09-01 11:34:00] -->
<!-- update -->

<!-- [2016-09-08 09:00:00] -->
<!-- update -->

<!-- [2016-09-12 09:00:00] -->
<!-- update -->

<!-- [2016-09-13 09:00:00] -->
<!-- update -->

<!-- [2016-09-20 09:00:00] -->
<!-- update -->

<!-- [2016-09-20 10:17:00] -->
<!-- update -->

<!-- [2016-09-20 11:34:00] -->
<!-- update -->

<!-- [2016-09-21 10:17:00] -->
<!-- update -->

<!-- [2016-09-24 09:00:00] -->
<!-- update -->

<!-- [2016-09-24 10:17:00] -->
<!-- update -->

<!-- [2016-09-24 11:34:00] -->
<!-- update -->

<!-- [2016-09-27 09:00:00] -->
<!-- update -->

<!-- [2016-09-27 10:17:00] -->
<!-- update -->

<!-- [2016-09-29 09:00:00] -->
<!-- update -->

<!-- [2016-10-09 10:17:00] -->
<!-- update -->

<!-- [2016-10-15 09:00:00] -->
<!-- update -->

<!-- [2016-10-15 11:34:00] -->
<!-- update -->

<!-- [2016-10-16 10:17:00] -->
<!-- update -->

<!-- [2016-10-27 09:00:00] -->
<!-- update -->

<!-- [2016-10-30 09:00:00] -->
<!-- update -->

<!-- [2016-10-30 10:17:00] -->
<!-- update -->

<!-- [2016-10-30 11:34:00] -->
<!-- update -->

<!-- [2016-10-30 12:51:00] -->
<!-- update -->

<!-- [2016-10-31 10:17:00] -->
<!-- update -->

<!-- [2016-11-02 09:00:00] -->
<!-- update -->

<!-- [2016-11-02 10:17:00] -->
<!-- update -->

<!-- [2016-11-04 10:17:00] -->
<!-- update -->

<!-- [2016-11-04 11:34:00] -->
<!-- update -->

<!-- [2016-11-19 10:17:00] -->
<!-- update -->

<!-- [2016-11-25 09:00:00] -->
<!-- update -->

<!-- [2016-11-27 10:17:00] -->
<!-- update -->

<!-- [2016-11-28 09:00:00] -->
<!-- update -->

<!-- [2016-11-28 11:34:00] -->
<!-- update -->

<!-- [2016-11-28 13:08:00] -->
<!-- update -->

<!-- [2016-12-02 09:00:00] -->
<!-- update -->

<!-- [2016-12-02 10:17:00] -->
<!-- update -->

<!-- [2016-12-05 09:00:00] -->
<!-- update -->

<!-- [2016-12-05 10:17:00] -->
<!-- update -->

<!-- [2016-12-19 09:00:00] -->
<!-- update -->

<!-- [2016-12-20 09:00:00] -->
<!-- update -->

<!-- [2016-12-26 11:34:00] -->
<!-- update -->

<!-- [2016-12-27 09:00:00] -->
<!-- update -->

<!-- [2016-12-27 10:17:00] -->
<!-- update -->

<!-- [2016-12-27 11:34:00] -->
<!-- update -->

<!-- [2016-12-28 09:00:00] -->
<!-- update -->

<!-- [2016-12-28 10:17:00] -->
<!-- update -->

<!-- [2016-12-29 09:00:00] -->
<!-- update -->

<!-- [2015-01-01 09:00:00] -->
<!-- update -->

<!-- [2015-01-17 09:00:00] -->
<!-- update -->

<!-- [2015-01-22 10:17:00] -->
<!-- update -->

<!-- [2015-01-26 09:00:00] -->
<!-- update -->

<!-- [2015-01-26 10:17:00] -->
<!-- update -->

<!-- [2015-01-26 11:34:00] -->
<!-- update -->

<!-- [2015-02-11 09:00:00] -->
<!-- update -->

<!-- [2015-02-16 09:00:00] -->
<!-- update -->

<!-- [2015-02-23 09:00:00] -->
<!-- update -->

<!-- [2015-02-23 10:17:00] -->
<!-- update -->

<!-- [2015-02-23 12:51:00] -->
<!-- update -->

<!-- [2015-03-09 09:00:00] -->
<!-- update -->

<!-- [2015-03-10 09:00:00] -->
<!-- update -->

<!-- [2015-03-17 09:00:00] -->
<!-- update -->

<!-- [2015-03-30 09:00:00] -->
<!-- update -->

<!-- [2015-03-30 10:17:00] -->
<!-- update -->

<!-- [2015-04-13 13:08:00] -->
<!-- update -->

<!-- [2015-04-28 09:00:00] -->
<!-- update -->

<!-- [2015-04-28 10:17:00] -->
<!-- update -->

<!-- [2015-04-30 09:00:00] -->
<!-- update -->

<!-- [2015-04-30 10:17:00] -->
<!-- update -->

<!-- [2015-06-04 10:17:00] -->
<!-- update -->

<!-- [2015-06-08 09:00:00] -->
<!-- update -->

<!-- [2015-06-08 10:17:00] -->
<!-- update -->

<!-- [2015-06-08 12:51:00] -->
<!-- update -->

<!-- [2015-06-29 11:34:00] -->
<!-- update -->

<!-- [2015-07-08 10:17:00] -->
<!-- update -->

<!-- [2015-07-08 11:34:00] -->
<!-- update -->

<!-- [2015-07-09 10:17:00] -->
<!-- update -->

<!-- [2015-07-11 09:00:00] -->
<!-- update -->

<!-- [2015-07-30 09:00:00] -->
<!-- update -->

<!-- [2015-08-04 09:00:00] -->
<!-- update -->

<!-- [2015-08-04 11:34:00] -->
<!-- update -->

<!-- [2015-08-05 10:17:00] -->
<!-- update -->

<!-- [2015-08-06 10:17:00] -->
<!-- update -->

<!-- [2015-08-06 11:34:00] -->
<!-- update -->

<!-- [2015-08-20 09:00:00] -->
<!-- update -->

<!-- [2015-08-20 10:17:00] -->
<!-- update -->

<!-- [2015-08-25 09:00:00] -->
<!-- update -->

<!-- [2015-08-25 10:17:00] -->
<!-- update -->

<!-- [2015-08-27 09:00:00] -->
<!-- update -->

<!-- [2015-08-27 11:34:00] -->
<!-- update -->

<!-- [2015-08-28 11:34:00] -->
<!-- update -->

<!-- [2015-09-08 09:00:00] -->
<!-- update -->

<!-- [2015-09-08 10:17:00] -->
<!-- update -->

<!-- [2015-09-08 11:34:00] -->
<!-- update -->

<!-- [2015-09-08 12:51:00] -->
<!-- update -->

<!-- [2015-09-10 09:00:00] -->
<!-- update -->

<!-- [2015-09-10 11:34:00] -->
<!-- update -->

<!-- [2015-09-18 09:00:00] -->
<!-- update -->

<!-- [2015-09-22 10:17:00] -->
<!-- update -->

<!-- [2015-09-24 09:00:00] -->
<!-- update -->

<!-- [2015-09-24 12:51:00] -->
<!-- update -->

<!-- [2015-10-07 09:00:00] -->
<!-- update -->

<!-- [2015-10-07 10:17:00] -->
<!-- update -->

<!-- [2015-10-08 11:34:00] -->
<!-- update -->

<!-- [2015-10-09 09:00:00] -->
<!-- update -->

<!-- [2015-10-09 12:51:00] -->
<!-- update -->

<!-- [2015-10-09 13:08:00] -->
<!-- update -->

<!-- [2015-10-12 09:00:00] -->
<!-- update -->

<!-- [2015-10-12 11:34:00] -->
<!-- update -->

<!-- [2015-10-14 09:00:00] -->
<!-- update -->

<!-- [2015-10-23 09:00:00] -->
<!-- update -->

<!-- [2015-10-27 09:00:00] -->
<!-- update -->

<!-- [2015-11-04 10:17:00] -->
<!-- update -->

<!-- [2015-11-04 11:34:00] -->
<!-- update -->

<!-- [2015-11-10 09:00:00] -->
<!-- update -->

<!-- [2015-11-12 09:00:00] -->
<!-- update -->

<!-- [2015-11-12 10:17:00] -->
<!-- update -->

<!-- [2015-12-02 09:00:00] -->
<!-- update -->

<!-- [2016-01-12 09:00:00] -->
<!-- update -->

<!-- [2016-01-15 09:00:00] -->
<!-- update -->

<!-- [2016-01-15 10:17:00] -->
<!-- update -->

<!-- [2016-01-15 11:34:00] -->
<!-- update -->

<!-- [2016-01-26 09:00:00] -->
<!-- update -->

<!-- [2016-01-28 09:00:00] -->
<!-- update -->

<!-- [2016-01-28 10:17:00] -->
<!-- update -->

<!-- [2016-02-09 09:00:00] -->
<!-- update -->

<!-- [2016-02-09 10:17:00] -->
<!-- update -->

<!-- [2016-02-09 11:34:00] -->
<!-- update -->

<!-- [2016-02-10 10:17:00] -->
<!-- update -->

<!-- [2016-02-25 10:17:00] -->
<!-- update -->

<!-- [2016-02-25 11:34:00] -->
<!-- update -->

<!-- [2016-03-08 10:17:00] -->
<!-- update -->

<!-- [2016-03-08 11:34:00] -->
<!-- update -->

<!-- [2016-03-09 10:17:00] -->
<!-- update -->

<!-- [2016-03-09 11:34:00] -->
<!-- update -->

<!-- [2016-03-23 09:00:00] -->
<!-- update -->

<!-- [2016-03-23 10:17:00] -->
<!-- update -->

<!-- [2016-03-23 11:34:00] -->
<!-- update -->

<!-- [2016-03-29 09:00:00] -->
<!-- update -->

<!-- [2016-04-07 12:51:00] -->
<!-- update -->

<!-- [2016-04-12 09:00:00] -->
<!-- update -->

<!-- [2016-04-19 09:00:00] -->
<!-- update -->

<!-- [2016-04-19 10:17:00] -->
<!-- update -->

<!-- [2016-04-21 10:17:00] -->
<!-- update -->

<!-- [2016-04-22 10:17:00] -->
<!-- update -->

<!-- [2016-04-22 11:34:00] -->
<!-- update -->

<!-- [2016-04-22 12:51:00] -->
<!-- update -->

<!-- [2016-04-25 11:34:00] -->
<!-- update -->

<!-- [2016-05-02 09:00:00] -->
<!-- update -->

<!-- [2016-05-11 09:00:00] -->
<!-- update -->

<!-- [2016-05-15 09:00:00] -->
<!-- update -->

<!-- [2016-05-19 09:00:00] -->
<!-- update -->

<!-- [2016-05-19 10:17:00] -->
<!-- update -->

<!-- [2016-05-20 09:00:00] -->
<!-- update -->

<!-- [2016-05-20 10:17:00] -->
<!-- update -->

<!-- [2016-05-31 09:00:00] -->
<!-- update -->

<!-- [2016-06-13 10:17:00] -->
<!-- update -->

<!-- [2016-06-13 11:34:00] -->
<!-- update -->

<!-- [2016-06-16 09:00:00] -->
<!-- update -->

<!-- [2016-06-20 09:00:00] -->
<!-- update -->

<!-- [2016-07-13 09:00:00] -->
<!-- update -->

<!-- [2016-07-18 11:34:00] -->
<!-- update -->

<!-- [2016-07-29 09:00:00] -->
<!-- update -->

<!-- [2016-08-19 10:17:00] -->
<!-- update -->

<!-- [2016-08-19 11:34:00] -->
<!-- update -->

<!-- [2016-08-19 12:51:00] -->
<!-- update -->

<!-- [2016-08-24 10:17:00] -->
<!-- update -->

<!-- [2016-09-09 11:34:00] -->
<!-- update -->

<!-- [2016-09-22 10:17:00] -->
<!-- update -->

<!-- [2016-09-26 09:00:00] -->
<!-- update -->

<!-- [2016-09-26 10:17:00] -->
<!-- update -->

<!-- [2016-09-26 12:51:00] -->
<!-- update -->

<!-- [2016-09-30 10:17:00] -->
<!-- update -->

<!-- [2016-09-30 11:34:00] -->
<!-- update -->

<!-- [2016-09-30 13:08:00] -->
<!-- update -->

<!-- [2016-10-02 09:00:00] -->
<!-- update -->

<!-- [2016-10-03 09:00:00] -->
<!-- update -->

<!-- [2016-10-03 11:34:00] -->
<!-- update -->

<!-- [2016-10-18 09:00:00] -->
<!-- update -->

<!-- [2016-10-18 10:17:00] -->
<!-- update -->

<!-- [2016-10-18 11:34:00] -->
<!-- update -->

<!-- [2016-10-19 09:00:00] -->
<!-- update -->

<!-- [2016-10-19 10:17:00] -->
<!-- update -->

<!-- [2016-11-02 09:00:00] -->
<!-- update -->

<!-- [2016-11-02 10:17:00] -->
<!-- update -->

<!-- [2016-11-02 11:34:00] -->
<!-- update -->

<!-- [2016-11-03 10:17:00] -->
<!-- update -->

<!-- [2016-11-07 09:00:00] -->
<!-- update -->

<!-- [2016-11-15 09:00:00] -->
<!-- update -->

<!-- [2016-11-15 10:17:00] -->
<!-- update -->

<!-- [2016-11-15 12:51:00] -->
<!-- update -->

<!-- [2016-11-16 11:34:00] -->
<!-- update -->

<!-- [2016-11-16 13:08:00] -->
<!-- update -->

<!-- [2016-11-17 11:34:00] -->
<!-- update -->

<!-- [2016-11-25 09:00:00] -->
<!-- update -->

<!-- [2016-12-05 11:34:00] -->
<!-- update -->

<!-- [2016-12-07 09:00:00] -->
<!-- update -->

<!-- [2016-12-07 11:34:00] -->
<!-- update -->

<!-- [2016-12-08 09:00:00] -->
<!-- update -->

<!-- [2016-12-08 12:51:00] -->
<!-- update -->

<!-- [2015-01-07 09:00:00] -->
<!-- update -->

<!-- [2015-01-13 10:17:00] -->
<!-- update -->

<!-- [2015-01-13 12:51:00] -->
<!-- update -->

<!-- [2015-01-13 14:25:00] -->
<!-- update -->

<!-- [2015-01-14 10:17:00] -->
<!-- update -->

<!-- [2015-01-29 10:17:00] -->
<!-- update -->

<!-- [2015-02-09 10:17:00] -->
<!-- update -->

<!-- [2015-02-10 09:00:00] -->
<!-- update -->

<!-- [2015-02-10 10:17:00] -->
<!-- update -->

<!-- [2015-02-10 11:34:00] -->
<!-- update -->

<!-- [2015-02-13 09:00:00] -->
<!-- update -->

<!-- [2015-02-13 12:51:00] -->
<!-- update -->

<!-- [2015-02-16 09:00:00] -->
<!-- update -->

<!-- [2015-02-16 10:17:00] -->
<!-- update -->

<!-- [2015-02-18 09:00:00] -->
<!-- update -->

<!-- [2015-02-18 10:17:00] -->
<!-- update -->

<!-- [2015-03-11 09:00:00] -->
<!-- update -->

<!-- [2015-03-11 10:17:00] -->
<!-- update -->

<!-- [2015-03-11 12:51:00] -->
<!-- update -->

<!-- [2015-03-13 09:00:00] -->
<!-- update -->

<!-- [2015-03-13 10:17:00] -->
<!-- update -->

<!-- [2015-03-16 09:00:00] -->
<!-- update -->

<!-- [2015-03-16 10:17:00] -->
<!-- update -->

<!-- [2015-03-16 11:34:00] -->
<!-- update -->

<!-- [2015-03-16 12:51:00] -->
<!-- update -->

<!-- [2015-04-20 10:17:00] -->
<!-- update -->

<!-- [2015-04-21 09:00:00] -->
<!-- update -->

<!-- [2015-04-21 10:17:00] -->
<!-- update -->

<!-- [2015-04-21 13:08:00] -->
<!-- update -->

<!-- [2015-04-24 09:00:00] -->
<!-- update -->

<!-- [2015-05-18 09:00:00] -->
<!-- update -->

<!-- [2015-05-18 10:17:00] -->
<!-- update -->

<!-- [2015-05-18 11:34:00] -->
<!-- update -->

<!-- [2015-05-29 09:00:00] -->
<!-- update -->

<!-- [2015-06-01 11:34:00] -->
<!-- update -->

<!-- [2015-06-01 12:51:00] -->
<!-- update -->

<!-- [2015-06-18 11:34:00] -->
<!-- update -->

<!-- [2015-06-18 12:51:00] -->
<!-- update -->

<!-- [2015-06-18 13:08:00] -->
<!-- update -->

<!-- [2015-07-27 09:00:00] -->
<!-- update -->

<!-- [2015-07-27 10:17:00] -->
<!-- update -->

<!-- [2015-07-27 11:34:00] -->
<!-- update -->

<!-- [2015-07-28 09:00:00] -->
<!-- update -->

<!-- [2015-08-05 09:00:00] -->
<!-- update -->

<!-- [2015-08-05 10:17:00] -->
<!-- update -->

<!-- [2015-08-06 09:00:00] -->
<!-- update -->

<!-- [2015-08-06 13:08:00] -->
<!-- update -->

<!-- [2015-08-13 10:17:00] -->
<!-- update -->

<!-- [2015-08-13 12:51:00] -->
<!-- update -->

<!-- [2015-08-13 13:08:00] -->
<!-- update -->

<!-- [2015-08-19 10:17:00] -->
<!-- update -->

<!-- [2015-09-01 09:00:00] -->
<!-- update -->

<!-- [2015-09-11 09:00:00] -->
<!-- update -->

<!-- [2015-09-15 09:00:00] -->
<!-- update -->

<!-- [2015-09-15 11:34:00] -->
<!-- update -->

<!-- [2015-09-17 11:34:00] -->
<!-- update -->

<!-- [2015-10-07 10:17:00] -->
<!-- update -->

<!-- [2015-10-07 11:34:00] -->
<!-- update -->

<!-- [2015-10-13 09:00:00] -->
<!-- update -->

<!-- [2015-10-13 11:34:00] -->
<!-- update -->

<!-- [2015-10-13 12:51:00] -->
<!-- update -->

<!-- [2015-10-13 13:08:00] -->
<!-- update -->

<!-- [2015-10-27 09:00:00] -->
<!-- update -->

<!-- [2015-10-29 09:00:00] -->
<!-- update -->

<!-- [2015-10-29 10:17:00] -->
<!-- update -->

<!-- [2015-11-03 10:17:00] -->
<!-- update -->

<!-- [2015-11-03 11:34:00] -->
<!-- update -->

<!-- [2015-11-09 09:00:00] -->
<!-- update -->

<!-- [2016-01-14 09:00:00] -->
<!-- update -->

<!-- [2016-01-14 10:17:00] -->
<!-- update -->

<!-- [2016-01-26 09:00:00] -->
<!-- update -->

<!-- [2016-01-26 10:17:00] -->
<!-- update -->

<!-- [2016-02-12 11:34:00] -->
<!-- update -->

<!-- [2016-02-15 10:17:00] -->
<!-- update -->

<!-- [2016-02-17 09:00:00] -->
<!-- update -->

<!-- [2016-02-17 10:17:00] -->
<!-- update -->

<!-- [2016-02-17 11:34:00] -->
<!-- update -->

<!-- [2016-02-19 09:00:00] -->
<!-- update -->

<!-- [2016-03-07 09:00:00] -->
<!-- update -->

<!-- [2016-03-10 12:51:00] -->
<!-- update -->

<!-- [2016-03-10 14:25:00] -->
<!-- update -->

<!-- [2016-03-22 09:00:00] -->
<!-- update -->

<!-- [2016-03-22 11:34:00] -->
<!-- update -->

<!-- [2016-03-24 09:00:00] -->
<!-- update -->

<!-- [2016-03-24 11:34:00] -->
<!-- update -->

<!-- [2016-03-24 13:08:00] -->
<!-- update -->

<!-- [2016-03-25 10:17:00] -->
<!-- update -->

<!-- [2016-04-07 09:00:00] -->
<!-- update -->

<!-- [2016-04-07 10:17:00] -->
<!-- update -->

<!-- [2016-04-14 09:00:00] -->
<!-- update -->

<!-- [2016-04-19 09:00:00] -->
<!-- update -->

<!-- [2016-04-20 10:17:00] -->
<!-- update -->

<!-- [2016-04-20 11:34:00] -->
<!-- update -->

<!-- [2016-04-22 11:34:00] -->
<!-- update -->

<!-- [2016-04-22 12:51:00] -->
<!-- update -->

<!-- [2016-04-22 13:08:00] -->
<!-- update -->

<!-- [2016-04-25 09:00:00] -->
<!-- update -->

<!-- [2016-04-27 09:00:00] -->
<!-- update -->

<!-- [2016-04-27 11:34:00] -->
<!-- update -->

<!-- [2016-05-04 09:00:00] -->
<!-- update -->

<!-- [2016-05-04 11:34:00] -->
<!-- update -->

<!-- [2016-05-04 12:51:00] -->
<!-- update -->

<!-- [2016-05-12 09:00:00] -->
<!-- update -->

<!-- [2016-05-16 09:00:00] -->
<!-- update -->

<!-- [2016-05-16 10:17:00] -->
<!-- update -->

<!-- [2016-05-16 12:51:00] -->
<!-- update -->

<!-- [2016-05-20 09:00:00] -->
<!-- update -->

<!-- [2016-05-30 10:17:00] -->
<!-- update -->

<!-- [2016-05-30 11:34:00] -->
<!-- update -->

<!-- [2016-06-01 11:34:00] -->
<!-- update -->

<!-- [2016-06-01 12:51:00] -->
<!-- update -->

<!-- [2016-06-02 09:00:00] -->
<!-- update -->

<!-- [2016-06-02 11:34:00] -->
<!-- update -->

<!-- [2016-06-03 09:00:00] -->
<!-- update -->

<!-- [2016-06-03 11:34:00] -->
<!-- update -->

<!-- [2016-06-14 10:17:00] -->
<!-- update -->

<!-- [2016-06-15 10:17:00] -->
<!-- update -->

<!-- [2016-07-07 09:00:00] -->
<!-- update -->

<!-- [2016-07-11 09:00:00] -->
<!-- update -->

<!-- [2016-07-11 10:17:00] -->
<!-- update -->

<!-- [2016-07-11 11:34:00] -->
<!-- update -->

<!-- [2016-07-11 13:08:00] -->
<!-- update -->

<!-- [2016-07-22 09:00:00] -->
<!-- update -->

<!-- [2016-07-22 10:17:00] -->
<!-- update -->

<!-- [2016-08-08 09:00:00] -->
<!-- update -->

<!-- [2016-08-08 11:34:00] -->
<!-- update -->

<!-- [2016-08-08 12:51:00] -->
<!-- update -->

<!-- [2016-08-09 09:00:00] -->
<!-- update -->

<!-- [2016-08-09 10:17:00] -->
<!-- update -->

<!-- [2016-08-09 11:34:00] -->
<!-- update -->

<!-- [2016-08-09 13:08:00] -->
<!-- update -->

<!-- [2016-08-22 09:00:00] -->
<!-- update -->

<!-- [2016-08-22 10:17:00] -->
<!-- update -->

<!-- [2016-08-22 11:34:00] -->
<!-- update -->

<!-- [2016-08-25 09:00:00] -->
<!-- update -->

<!-- [2016-08-25 10:17:00] -->
<!-- update -->

<!-- [2016-09-09 09:00:00] -->
<!-- update -->

<!-- [2016-09-20 09:00:00] -->
<!-- update -->

<!-- [2016-09-26 09:00:00] -->
<!-- update -->

<!-- [2016-09-26 10:17:00] -->
<!-- update -->

<!-- [2016-09-26 11:34:00] -->
<!-- update -->

<!-- [2016-09-30 09:00:00] -->
<!-- update -->

<!-- [2016-10-24 10:17:00] -->
<!-- update -->

<!-- [2016-10-24 11:34:00] -->
<!-- update -->

<!-- [2016-11-14 09:00:00] -->
<!-- update -->

<!-- [2016-11-14 13:08:00] -->
<!-- update -->

<!-- [2016-11-14 14:25:00] -->
<!-- update -->

<!-- [2016-11-18 09:00:00] -->
<!-- update -->

<!-- [2016-11-18 10:17:00] -->
<!-- update -->

<!-- [2016-11-18 11:34:00] -->
<!-- update -->

<!-- [2016-11-18 14:25:00] -->
<!-- update -->

<!-- [2016-12-05 12:51:00] -->
<!-- update -->

<!-- [2016-12-05 13:08:00] -->
<!-- update -->

<!-- [2016-12-06 10:17:00] -->
<!-- update -->

<!-- [2016-12-08 09:00:00] -->
<!-- update -->

<!-- [2016-12-08 10:17:00] -->
<!-- update -->

<!-- [2016-12-08 11:34:00] -->
<!-- update -->

// [2026-03-05 09:00:00]
// update

<!-- [2015-01-23 09:00:00] -->
<!-- update -->

<!-- [2015-01-29 11:34:00] -->
<!-- update -->

<!-- [2015-01-29 13:08:00] -->
<!-- update -->

<!-- [2015-02-12 10:17:00] -->
<!-- update -->

<!-- [2015-03-12 09:00:00] -->
<!-- update -->

<!-- [2015-03-12 10:17:00] -->
<!-- update -->

<!-- [2015-03-12 11:34:00] -->
<!-- update -->

<!-- [2015-03-20 09:00:00] -->
<!-- update -->

<!-- [2015-03-20 10:17:00] -->
<!-- update -->

<!-- [2015-03-20 11:34:00] -->
<!-- update -->

<!-- [2015-03-27 09:00:00] -->
<!-- update -->

<!-- [2015-03-27 10:17:00] -->
<!-- update -->

<!-- [2015-04-06 10:17:00] -->
<!-- update -->

<!-- [2015-04-21 10:17:00] -->
<!-- update -->

<!-- [2015-04-23 09:00:00] -->
<!-- update -->

<!-- [2015-04-23 10:17:00] -->
<!-- update -->

<!-- [2015-04-24 09:00:00] -->
<!-- update -->

<!-- [2015-04-24 10:17:00] -->
<!-- update -->

<!-- [2015-04-24 11:34:00] -->
<!-- update -->

<!-- [2015-05-18 10:17:00] -->
<!-- update -->

<!-- [2015-06-17 11:34:00] -->
<!-- update -->

<!-- [2015-06-17 12:51:00] -->
<!-- update -->

<!-- [2015-06-30 09:00:00] -->
<!-- update -->

<!-- [2015-06-30 11:34:00] -->
<!-- update -->

<!-- [2015-07-27 09:00:00] -->
<!-- update -->

<!-- [2015-07-27 10:17:00] -->
<!-- update -->

<!-- [2015-07-27 11:34:00] -->
<!-- update -->

<!-- [2015-07-28 10:17:00] -->
<!-- update -->

<!-- [2015-07-28 12:51:00] -->
<!-- update -->

<!-- [2015-07-28 13:08:00] -->
<!-- update -->

<!-- [2015-07-29 09:00:00] -->
<!-- update -->

<!-- [2015-07-29 11:34:00] -->
<!-- update -->

<!-- [2015-07-31 09:00:00] -->
<!-- update -->

<!-- [2015-07-31 11:34:00] -->
<!-- update -->

<!-- [2015-07-31 12:51:00] -->
<!-- update -->

<!-- [2015-07-31 13:08:00] -->
<!-- update -->

<!-- [2015-07-31 14:25:00] -->
<!-- update -->

<!-- [2015-08-06 10:17:00] -->
<!-- update -->

<!-- [2015-08-10 09:00:00] -->
<!-- update -->

<!-- [2015-08-11 09:00:00] -->
<!-- update -->

<!-- [2015-08-11 10:17:00] -->
<!-- update -->

<!-- [2015-08-11 11:34:00] -->
<!-- update -->

<!-- [2015-08-13 09:00:00] -->
<!-- update -->

<!-- [2015-08-13 11:34:00] -->
<!-- update -->

<!-- [2015-09-16 09:00:00] -->
<!-- update -->

<!-- [2015-09-16 10:17:00] -->
<!-- update -->

<!-- [2015-09-16 11:34:00] -->
<!-- update -->

<!-- [2015-09-28 11:34:00] -->
<!-- update -->

<!-- [2015-09-28 12:51:00] -->
<!-- update -->

<!-- [2015-09-28 13:08:00] -->
<!-- update -->

<!-- [2015-09-30 09:00:00] -->
<!-- update -->

<!-- [2015-10-01 10:17:00] -->
<!-- update -->

<!-- [2015-10-01 12:51:00] -->
<!-- update -->

<!-- [2015-10-02 10:17:00] -->
<!-- update -->

<!-- [2015-10-07 11:34:00] -->
<!-- update -->

<!-- [2015-10-07 12:51:00] -->
<!-- update -->

<!-- [2015-10-13 09:00:00] -->
<!-- update -->

<!-- [2015-10-26 11:34:00] -->
<!-- update -->

<!-- [2015-10-29 09:00:00] -->
<!-- update -->
