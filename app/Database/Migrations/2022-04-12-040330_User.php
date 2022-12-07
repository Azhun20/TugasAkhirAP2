<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'iduser'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],'username'    =>[
                'type'      => 'VARCHAR',
                'constraint' => '30',
            ],'password'    => [
                'type'      => 'VARCHAR',
                'constraint'=> '8',
            ]
            ]);
        $this->forge->addPrimaryKey('iduser');
        $this->forge->createTable('user'); 
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
