<?php

namespace App\Command;

use App\Repository\ContratRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;

#[AsCommand(
    name: 'app:alerte:echeance',
    description: 'Add a short description for your command',
)]
class AlerteEcheanceCommand extends Command
{
    private $ContratRepository;
    public function __construct(ContratRepository $ContratRepository)
    {
        parent::__construct(null);
        $this->ContratRepository = $ContratRepository;
    }
   
   
   
    protected function configure(): void
    {
        $this
            ->setDescription("Envoie un mail en cas d'arriver à échéance")
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
            $io->note('Dry mode enabled');

            $alerte=$this->ContratRepository->tableauAlerte();
            $alertes= $this->ContratRepository->mailAlerte($alerte);
        
        $io->success(sprintf('Nombre de contrats arrivés à échéance : ', $alertes));
        return 0;
    
    }
}
