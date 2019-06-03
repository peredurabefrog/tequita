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
    public function index()
    {
        $this->loadComponent('Paginator');
        
        // retrieve the contents of the authors table
        $authors = $this->Paginator->paginate($this->Authors->find());
        
        // pass all the data from the authors table along to the Template
        $this->set(compact('authors'));
    }
    
    // view() action
    public function view($id = null)
    {
        $author = $this->Authors->get($id);
        $this->set(compact('author'));
    }
}
