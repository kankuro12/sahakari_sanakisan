<?php

use App\Models\Download;
use App\Models\DownloadType;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/
Artisan::command('make:admin', function () {
    $name = $this->ask('What is the admin name?');
    $email = $this->ask('What is the admin email?');
    $password = $this->secret('What is the admin password?');

    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->password = bcrypt($password);
    $user->save();

    $this->info('Admin user created successfully.');
})->purpose('Create an admin user');

Artisan::command('change:password', function () {
    $email = $this->ask('Enter the email of the user whose password you want to change:');
    $user = User::where('email', $email)->first();

    if (!$user) {
        $this->error('User with this email does not exist.');
        return;
    }

    $newPassword = $this->secret('Enter the new password:');
    $confirmPassword = $this->secret('Confirm the new password:');

    // Check if the new password matches the confirmation
    if ($newPassword !== $confirmPassword) {
        $this->error('New password and confirmation password do not match.');
        return;
    }

    // Update the password
    $user->password = bcrypt($newPassword);
    $user->save();

    $this->info('Password changed successfully.');
})->purpose('Change the user password without verifying current password');
