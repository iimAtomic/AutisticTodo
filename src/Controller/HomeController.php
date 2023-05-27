<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Repository\TasksRepository;
use App\Service\ActionGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{

     private $manager;

     private $action;


     private $task;

     
     public function __construct(EntityManagerInterface $manager, ActionGenerator $action, TasksRepository $task)
     {
        $this->manager=$manager;

        $this->action=$action;

        $this->task=$task;
     }



     // Affichage des tasks
    #[Route('/', name: 'app_home')]
    public function index(? int $id): Response
    {
        
         if(!$this->getUser())
         {

            return $this->redirectToRoute('app_login');
         }
         $array_day=$this->action->getAction()['array_day'];
         $jourdDate=$this->action->getAction()['jourDate'];
         $heure=$this->action->getAction()['heure'];

         if($id)
         {
            $task=$this->task->find($id);

            return $this->render('edit/show.html.twig',
            [
                'array_day'=>$array_day,
                'jourDate'=>$jourdDate,
                'heure'=>$heure,
                'task'=>$task
            ]
         );

         }

         else
        $tasks=$this->task->findTasksByOrder($this->getUser());
        return $this->render('home/index.html.twig',
            [
                'array_day'=>$array_day,
                'jourDate'=>$jourdDate,
                'heure'=>$heure,
                'tasks'=>$tasks
            ]
         );
    }


    //Creation de la task

    #[Route('/createTask', name: 'create_task', methods:'POST')]
    public function store(Request $request): Response
    {
        $titre=$request->request->get('titre');

        $jourDate=$request->request->get('jourDate');

        $task=new Tasks();

        $task->setTitre($titre)
             ->setUser($this->getUser())
             ->setJourDate($jourDate);

        $this->manager->persist($task);

        $this->manager->flush();

        return $this->redirectToRoute('app_home');


    }

    // Lecture de la task
    #[Route('/showTask/{id}', name: 'show_task')]
    public function showTask($id): Response
    {

       return  $this->forward('App\Controller\HomeController::index',
           [
             'id'=>$id
           ]
           );
        

        
    }

    //Edition de la task

    #[Route('/editTask/{id}', name: 'edit_task', methods:'POST')]
    public function editTask($id,Request $request): Response
    {
       $titre=$request->request->get('titre');

       $jourDate=$request->request->get('jourDate');

       $task=$this->task->find($id);

       $task->setTitre($titre)
            ->setJourDate($jourDate);

       $this->manager->flush();


       return $this->redirectToRoute('app_home');

    
    }

    #[Route('/deleteTask/{id}', name: 'delete_task')]
    public function deleteTask($id): Response
    {
        $task=$this->task->find($id);

        $this->manager->remove($task);

        $this->manager->flush();

        return $this->redirectToRoute('app_home');


    }

}
