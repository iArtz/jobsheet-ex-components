<?php

namespace Jobsheet\Ex\Core;

use Throwable;

/**
 * Error and exception handler
 * ตัวจัดการข้อผิดพลาด
 *
 * PHP version 7.4
 */
class Error
{

    protected static string $title = 'Error';
    protected static string $container = '';
    /**
     * Error handler. Convert all errors to Exceptions by throwing an ErrorException.
     * ตัวจัดการข้อผิดพลาด แปลงข้อผิดพลาดทั้งหมดส้งไปยังเอ็กเซ็พชั้น
     *
     * @param int $level  Error level ระดับข้อผิดพลาด
     * @param string $message  Error message ข้อความข้อผิดพลาด
     * @param string $file  Filename the error was raised in ไฟล์ที่เกิดข้อผิดพลาด
     * @param int $line  Line number in the file บรรทัดที่เกิดข้อผิดพลาด
     *
     * @return void
     */
    public static function errorHandler($level, $message, $file, $line)
    {
        if (error_reporting() !== 0) { // to keep the @ operator working
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }

    /**
     * Exception handler.
     * ตัวจัดการเอ็กซ์เซ็พชั้น
     *
     * @param Throwable $exception  The exception
     *
     * @return void
     */
    public static function exceptionHandler(Throwable $exception)
    {
        date_default_timezone_set('Asia/Bangkok');
        // Code is 404 (not found) or 500 (general error)
        $code = $exception->getCode();
        if ($code != 404) {
            $code = 500;
        }
        http_response_code($code);

        if (getenv('APP_ENV') == 'development') {
            static::$container .= "<pre class='text-xs leading-normal'>";
            static::$container .= "<h1>Fatal error</h1>";
            static::$container .= "<p>Uncaught exception: '" . get_class($exception) . "'</p>";
            static::$container .= "<p>Message: '" . $exception->getMessage() . "'</p>";
            static::$container .= "<p>Stack trace:<pre class='h-auto text-xs leading-normal overflow-auto border-4 rounded text-wrap'>" . $exception->getTraceAsString() . "</pre></p>";
            static::$container .= "<p>Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine() . "</p>";
            static::$container .= "</pre>";
            echo static::renderHTML();
        } else {
            $log = dirname(__DIR__) . '/logs/' . date('Y-m-d') . '.txt';
            ini_set('error_log', $log);

            $message = "Uncaught exception: '" . get_class($exception) . "'";
            $message .= " with message '" . $exception->getMessage() . "'";
            $message .= "\nStack trace: " . $exception->getTraceAsString();
            $message .= "\nThrown in '" . $exception->getFile() . "' on line " . $exception->getLine();

            error_log($message);
            //echo "<h1>An error occurred</h1>";
            if ($code == 404) {
                echo "<h1>Page not found</h1>";
            } else {
                echo "<h1>An error occurred</h1>";
            }
        }
    }

    protected static function renderHTML()
    {
        ob_start();
        require_once dirname(__DIR__) . '/Type/A/Template/A.html';
        return ob_get_clean();
    }
}
