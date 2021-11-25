<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'monolog.logger.markdown' shared service.

$this->services['monolog.logger.markdown'] = $instance = new \Symfony\Bridge\Monolog\Logger('markdown');

$a = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/log/markdown.log'), 100, true, NULL);
$a->pushProcessor(($this->privates['monolog.processor.psr_log_message'] ?? $this->privates['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()));

$instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()));
$instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())));
$instance->pushHandler($a);
$instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $instance;
