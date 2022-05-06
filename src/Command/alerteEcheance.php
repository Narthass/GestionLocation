<?php 

namespace App\Command;

use App\Repository\ContratRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CommentCleanupCommand extends Command
{
    private $ContratRepository;

    protected static $defaultName = 'app:comment:cleanup';

    public function __construct(ContratRepository $ContratRepository)
    {
        $this->ContratRepository = $ContratRepository;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription("Alerte de l'arrivé en fin d'échéance d'un contrat en cours")
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Dry run')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        if ($input->getOption('dry-run')) {
            $io->note('Dry mode enabled');

            $count = $this->contratRepository->countOldRejected();
        } else {
            $count = $this->contratRepository->deleteOldRejected();
        }

        $io->success(sprintf('Deleted "%d" old rejected/spam comments.', $count));

        return 0;
    }
}