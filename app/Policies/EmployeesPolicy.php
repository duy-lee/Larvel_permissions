<?php

namespace App\Policies;

use App\User;
use App\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any employees.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        // $role = $user->roles()->where('name', 'admin')->first();
        // return in_array($role->name, [
        //     'admin'
        // ]);
    }

    /**
     * Determine whether the user can view the employee.
     *
     * @param  \App\User  $user
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function view(User $user, Employee $employee)
    {
        
    }

    /**
     * Determine whether the user can create employees.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // $role = $user->roles()->where('name', 'admin')->first();
        // return in_array($role->name, [
        //     'admin'
        // ]);
        if($user->roles()->where('name', 'admin')->first()){
            return true;
        }
    }

    /**
     * Determine whether the user can update the employee.
     *
     * @param  \App\User  $user
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function update(User $user, Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can delete the employee.
     *
     * @param  \App\User  $user
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function delete(User $user, Employee $employee = null)
    {
        // $role = $user->roles()->where('name', 'admin')->first();
        // return in_array($role->name, [
        //     'admin'
        // ]);
        if($user->roles()->where('name', 'admin')->first()){
            return true;
        }
    }

    /**
     * Determine whether the user can restore the employee.
     *
     * @param  \App\User  $user
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function restore(User $user, Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the employee.
     *
     * @param  \App\User  $user
     * @param  \App\Employee  $employee
     * @return mixed
     */
    public function forceDelete(User $user, Employee $employee)
    {
        //
    }
}
