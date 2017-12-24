<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

CRITICAL - 2017-12-24 05:38:34 --> You have an empty or invalid base URL. The baseURL value must be set in Config\App.php, or through the .env file.
#0 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(558): CodeIgniter\Exceptions\FrameworkException::forEmptyBaseURL()
#1 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(162): CodeIgniter\HTTP\IncomingRequest->detectURI('REQUEST_URI', '')
#2 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(517): CodeIgniter\HTTP\IncomingRequest->__construct(Object(Config\App), Object(CodeIgniter\HTTP\URI))
#3 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(850): CodeIgniter\Config\Services::request(Object(Config\App), false)
#4 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(508): CodeIgniter\Config\Services::getSharedInstance('request', Object(Config\App))
#5 C:\Users\123\PhpstormProjects\CodeIgniter4\system\CodeIgniter.php(369): CodeIgniter\Config\Services::request(Object(Config\App))
#6 C:\Users\123\PhpstormProjects\CodeIgniter4\system\CodeIgniter.php(187): CodeIgniter\CodeIgniter->getRequestObject()
#7 C:\Users\123\PhpstormProjects\CodeIgniter4\public\index.php(36): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2017-12-24 05:38:34 --> Uncaught CodeIgniter\Exceptions\FrameworkException: You have an empty or invalid base URL. The baseURL value must be set in Config\App.php, or through the .env file. in C:\Users\123\PhpstormProjects\CodeIgniter4\system\Exceptions\FrameworkException.php:15
Stack trace:
#0 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(558): CodeIgniter\Exceptions\FrameworkException::forEmptyBaseURL()
#1 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(162): CodeIgniter\HTTP\IncomingRequest->detectURI('REQUEST_URI', '')
#2 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(517): CodeIgniter\HTTP\IncomingRequest->__construct(Object(Config\App), Object(CodeIgniter\HTTP\URI))
#3 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(850): CodeIgniter\Config\Services::request(Object(Config\App), false)
#4 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(508): CodeIgniter\Config\Services::getSharedInstance('request', NULL)
#5
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2017-12-24 05:40:32 --> Argument 1 passed to CodeIgniter\HTTP\URI::setScheme() must be of the type string, null given, called in C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php on line 551
#0 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(551): CodeIgniter\HTTP\URI->setScheme(NULL)
#1 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(162): CodeIgniter\HTTP\IncomingRequest->detectURI('REQUEST_URI', '\\/')
#2 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(517): CodeIgniter\HTTP\IncomingRequest->__construct(Object(Config\App), Object(CodeIgniter\HTTP\URI))
#3 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(850): CodeIgniter\Config\Services::request(Object(Config\App), false)
#4 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(508): CodeIgniter\Config\Services::getSharedInstance('request', Object(Config\App))
#5 C:\Users\123\PhpstormProjects\CodeIgniter4\system\CodeIgniter.php(369): CodeIgniter\Config\Services::request(Object(Config\App))
#6 C:\Users\123\PhpstormProjects\CodeIgniter4\system\CodeIgniter.php(187): CodeIgniter\CodeIgniter->getRequestObject()
#7 C:\Users\123\PhpstormProjects\CodeIgniter4\public\index.php(36): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2017-12-24 05:40:32 --> Uncaught TypeError: Argument 1 passed to CodeIgniter\HTTP\URI::setScheme() must be of the type string, null given, called in C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php on line 551 and defined in C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\URI.php:580
Stack trace:
#0 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(551): CodeIgniter\HTTP\URI->setScheme(NULL)
#1 C:\Users\123\PhpstormProjects\CodeIgniter4\system\HTTP\IncomingRequest.php(162): CodeIgniter\HTTP\IncomingRequest->detectURI('REQUEST_URI', '\\/')
#2 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(517): CodeIgniter\HTTP\IncomingRequest->__construct(Object(Config\App), Object(CodeIgniter\HTTP\URI))
#3 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(850): CodeIgniter\Config\Services::request(Object(Config\App), false)
#4 C:\Users\123\PhpstormProjects\CodeIgniter4\system\Config\Services.php(508): CodeIgniter\Config\Services::getSharedInstance('
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
