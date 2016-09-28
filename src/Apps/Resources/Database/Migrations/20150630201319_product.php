<?php
use Cygnite\Database\Table\Schema;

/**
* This file is generated by Cygnite Migration Command
* You may use up and down method to create migration
*/

class Product
{
    /**
     * Specify your database connection name here
     *
     * @var string
     */
    //protected $database = 'cygnite';

    /**
     * Run the migrations up.
     *
     * @return void
     */
    public function up()
    {
        //Your schema to migrate
        Schema::make('product', function ($table)
        {
            //$table->setTableName('product');
            // if you don't specify the connect it will use default connection
            //$table->on("cygnite");
            $table->create(
                [
                    ['column'=> 'id', 'type' => 'int', 'length' => 11,
                        'increment' => true, 'key' => 'primary'],
                    ['column'=> 'product_name', 'type' => 'string', 'length' =>100],
                    ['column'=> 'category', 'type' => 'string', 'length' =>150],
                    ['column'=> 'description', 'type' => 'string', 'length'  =>255],
                    ['column'=> 'validity', 'type' => 'date', 'length'  =>'0000-00-00'],
                    ['column'=> 'price', 'type' => 'decimal', 'length'  =>'10,2'],
                    ['column'=> 'created_at', 'type' => 'datetime'],
                    ['column'=> 'updated_at', 'type' => 'datetime'],

                ], 'InnoDB', 'latin1'
            );
        });
    }

    /**
     * Revert back your migrations.
     *
     * @return void
     */
    public function down()
    {
        //Roll back your changes done by up method.
        Schema::make('product', function ($table)
        {
            $table->drop();
        });
    }
}// End of the Migration

