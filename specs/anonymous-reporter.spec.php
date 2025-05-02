<?php
use Evenement\EventEmitter;
use Peridot\Configuration;
use Peridot\Reporter\AnonymousReporter;
use Peridot\Reporter\ReporterInterface;

describe('AnonymousReporter', function() {
    $eventEmitter = null;
    $configuration = null;
    $output = null;

    beforeEach(function() use (&$eventEmitter, &$configuration, &$output) {
        $eventEmitter = new EventEmitter();
        $configuration = new Configuration();
        $output = new Symfony\Component\Console\Output\NullOutput();
    });

    it('should call the init function passed in', function() use (&$eventEmitter, &$configuration, &$output) {
        $testConfiguration = null;
        $testOutput = null;
        $testEmitter = null;

        new AnonymousReporter(function(ReporterInterface $reporter) use (&$testConfiguration, &$testOutput, &$testEmitter) {
            $testConfiguration = $reporter->getConfiguration();
            $testOutput = $reporter->getOutput();
            $testEmitter = $reporter->getEventEmitter();
        }, $configuration, $output, $eventEmitter);

        assert(
            !is_null($testConfiguration) && !is_null($testOutput) && !is_null($testEmitter),
            'configuration, output, and emitter should not be null'
        );
    });
});
