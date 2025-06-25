<?php

class Response {
    const OK = 200;
    const CREATED = 201;
    const NO_CONTENT = 204;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const INTERNAL_SERVER_ERROR = 500;
    const SERVICE_UNAVAILABLE = 503;

    public static $messages = [
        200 => ["title" => "OK", "subtitle" => "The request has succeeded"],
        201 => ["title" => "Created", "subtitle" => "The resource has been created"],
        204 => ["title" => "No Content", "subtitle" => "The server successfully processed the request, but is not returning any content"],
        400 => ["title" => "Bad Request", "subtitle" => "The server could not understand the request due to invalid syntax"],
        401 => ["title" => "Unauthorized", "subtitle" => "Authentication is required and has failed or has not yet been provided"],
        403 => ["title" => "Forbidden", "subtitle" => "You do not have permission to access this resource"],
        404 => ["title" => "Page Not Found", "subtitle" => "The page you are looking for does not exist"],
        405 => ["title" => "Method Not Allowed", "subtitle" => "The request method is not supported for the requested resource"],
        500 => ["title" => "Internal Server Error", "subtitle" => "The server encountered an internal error"],
        503 => ["title" => "Service Unavailable", "subtitle" => "The server is currently unavailable"],
    ];

    public static function getResponseDefaultMessageByCode($code) {
        return self::$messages[$code] ?? null;
    }
}