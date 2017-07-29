<?php

/**
 * @file
 * Contains \Drupal\Console\ExtendExample\Command\ExampleCommand
 */

namespace Drupal\Console\ExtendExample\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\Console\Core\Command\ContainerAwareCommand;
use Drupal\Console\Core\Style\DrupalStyle;

/**
 * Class ExampleTwoCommand
 *
 * @package Drupal\Console\ExtendExample\Command
 */
class ExampleTwoCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('extend:example:two')
            ->setDescription('Drupal Console extend example');
    }

    /**
     * {@inheritdoc}
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new DrupalStyle($input, $output);
        $io->commentBlock('Drupal Console extend example command.');
    }
}
