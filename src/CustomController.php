<?php

namespace Quinn\Logging;

use App\Http\Controllers\Controller;
use Quinn\Logging\BaseLogger;
use Quinn\Logging\Logging;
use Exception;

class CustomController extends Controller
{
    /**
     * @var BaseLogger
     */
    private $baseLogger;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(BaseLogger $baseLogger)
    {
        $this->baseLogger = $baseLogger;
        $this->baseLogger->init();
    }

    public function test()
    {
        try{
            //success
            // $this->baseLogger->info('INFO: Action log info tests');
            // $this->baseLogger->debug('DEBUG: Action log debug tests');
            // $this->baseLogger->error('ERROR: Action log error tests');
            // $this->baseLogger->emergency('EMERGENCY: Action log emergency tests');
            // $this->baseLogger->warning('WARNING: Action log warning tests');
            // $this->baseLogger->alert('ALERT: Action log alert tests');
            // $this->baseLogger->notice('NOTICE: Action log notice tests');
            // $this->baseLogger->critical('CRITICAL: Action log critical tests');

            //error
            Logging::channel('sample')->error($message);
        } 
        catch (Exception $e) {
            $this->baseLogger->error($e);
            // $exception = $e->getMessage().' at file '.$e->getFile().' at line '.$e->getLine();
        }
    }
}