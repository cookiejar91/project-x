<?php
/**
 * Created by PhpStorm.
 * User: Настя
 * Date: 07.12.2018
 * Time: 17:09
 */

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}