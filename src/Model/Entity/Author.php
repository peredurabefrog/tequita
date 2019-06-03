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

// src/Model/Entity/Author.php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CakePHP Author
 * @author peter
 */
class Author extends Entity {
    // enable mass assignment, but disable it for the id field
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
