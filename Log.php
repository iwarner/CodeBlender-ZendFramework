<?php

/**
 * CodeBlender
 *
 * @category  CodeBlender
 * @package   Log
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */

/**
 * Log
 *
 * @category  CodeBlender
 * @package   Log
 * @copyright Copyright (c) 2011 Triangle Solutions Ltd. (http://www.triangle-solutions.com/)
 * @license   http://codeblender.net/license
 */
class CodeBlender_Log
{

    /**
     *
     * @var Zend_Log
     */
    protected $logger;

    /**
     *
     * @var CodeBlender_Log
     */
    static $fileLogger = null;

    /**
     *
     */
    public static function getInstance()
    {
        if (self::$fileLogger === null) {
            self::$fileLogger = new self();
        }

        return self::$fileLogger;
    }

    /**
     *
     * @return Zend_Log
     */
    public function getLog()
    {
        return $this->logger;
    }

    /**
     *
     */
    protected function __construct()
    {
        $this->logger = Zend_Registry::get('log');
    }

    /**
     * log a message
     * @param string $message
     */
    public static function info($message)
    {
        self::getInstance()->getLog()->info($message);
    }

}
