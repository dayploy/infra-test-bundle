<?php

namespace Dayploy\InfraTestBundle\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class GenerateWarningLogsCommand extends Command
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
        parent::__construct();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output,
    ): int {
        $io = new SymfonyStyle($input, $output);

        $methods = [
            'emergency',
            'alert',
            'critical',
            'error',
            'warning',
            'notice',
            'info',
            'debug',
        ];

        foreach ($methods as $method) {
            $this->logger->$method("This is a log test for $method");
        }
        $io->success('Logs generated');

        return Command::SUCCESS;
    }
}
