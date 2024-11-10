<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Email' => [
                'type' => 'VARCHAR',
                'constraint' => '255', // Increase length to handle longer emails
                'null' => false,
            ],
            'Phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',  // Adjust length for phone numbers
                'null' => false,
            ],
            'Course' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);

        // Primary Key
        $this->forge->addKey('id', true);

        // Create the table
        $this->forge->createTable('admin'); // Use lowercase table name
    }

    public function down()
    {
        // Drop the table in reverse migration
        $this->forge->dropTable('admin'); // Use lowercase table name
    }
}
