# slim-eloquent-migration-example

This project is an example for make migrations in Slim using Phinx and Eloquent.

# Installation

Run the Composer install command from the Terminal:

    composer install

# Usage

First put you database settings in the config.php in the root directory and after that run the command:

    composer dump-autoload

 Next to do a migration to create a new table run the next command in the root of the project: 

    php vendor/bin/phinx create CreateUsersTable -c config-phinx.php

Now go to the database/migrations directory and see that a new file is created that contains create_users_table.php, enter in this file and delete the change function and inside of the CreateUsersTable copy and paste the following code:


    public function up()
    {
        $this->schema->create('users', function (Illuminate\Database\Schema\Blueprint $table) 
        {   
        });
    }
    
    public function down()
    {
        $this->schema->drop('users');
    }



Inside the up and down functions use the normal Laravel migrations methods.

After finish in the methods run the next command:

    php vendor/bin/phinx migrate -c config-phinx.php