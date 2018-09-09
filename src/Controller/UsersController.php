<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Entity;


class UsersController extends AppController {

    public function index() {
        $this->set('users', $this->Users->find('all')->
            contain(['Requests', 'Tags']));
    }

    private function usersWithTag() {
        $conn = \Cake\Datasource\ConnectionManager::get('default');
        $conn->logQueries(true);
        return $conn->
            execute('SELECT u.username, t.name as tag FROM users AS u 
            LEFT JOIN tags AS t ON u.id = t.user_id')->fetchAll('assoc');
    }

}