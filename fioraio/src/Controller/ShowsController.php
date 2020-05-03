<?php

declare(strict_types=1);


namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ShowsController extends AppController
{
    
    public function index()
    {
        $fiore = TableRegistry::getTableLocator()->get('Fiore');
        $query = $fiore->find('all', [
            'contain' => ['occasions']
        ]);
        
        $this->set('query', $query);
    }
}