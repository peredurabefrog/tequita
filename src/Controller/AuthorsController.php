<?php

/*
 * Copyright (C) 2019 peter
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// src/Controllers/AuthorsController.php

namespace App\Controller;

/**
 * CakePHP AuthorsController
 * @author peter
 */
class AuthorsController extends AppController {
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    
    // index() action - list all authors (paginated)
    public function index()
    {   
        // retrieve the contents of the authors table
        $authors = $this->Paginator->paginate($this->Authors->find()->order(['surname' => 'ASC', 'other_names' => 'ASC']));
        
        // pass all the data from the authors table along to the Template
        $this->set(compact('authors'));
    }
    
    // view() action - view details of a single author
    public function view($id = null)
    {
        $author = $this->Authors->get($id);
        $this->set(compact('author'));
    }
    
    // add() action - add a new author into the authors table
    public function add()
    {
        $author = $this->Authors->newEntity();
        if ($this->request->is('post'))
        {
            $data = $this->request->getData();
            
            $whereArray = array('surname' => $data['surname'],
                'other_names' => $data['other_names']);
            
            if ($data['birth'])
            {
                $whereArray['birth'] = $data['birth'];
            }
            
            if ($data['death'])
            {
                $whereArray['death'] = $data['death'];
            }
            
            // try to retrieve an existing author with this data
            if (!$this->Authors->find()
                    ->where($whereArray)
                    ->first())
            {
                // the author does not already exist
                // so add the new author
                $this->Authors->patchEntity($author, $data);
                
                if ($this->Authors->save($author)) 
                {
                    $this->Flash->success(__('The new author data has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your article.'));
            }
            else
            {
                // the author already exists
                // so print an error message
                $this->Flash->error(__('This author already exists.'));
            }
        }
        $this->set('author', $author);
    }
}
