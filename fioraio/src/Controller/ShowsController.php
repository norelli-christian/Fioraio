<?php

declare(strict_types=1);


namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ShowsController extends AppController
{
    
    public function view()
    {
        //die('nel metodo first di LearningController');
        $fiore = TableRegistry::getTableLocator()->get('Fiore');
        $query = $fiore->find('all', [
            'contain' => ['occasions']
        ]);
        
        $this->set('query', $query);
        $this->viewBuilder()->setLayout('flowers');
    }
}