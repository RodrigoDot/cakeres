<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'username' => 'Rodrigo',
                'password' => '123',
                'active' => 1
            ],
            [
                'id' => 2,
                'username' => 'Duda',
                'password' => '123',
                'active' => 0
            ],
            [
                'id' => 3,
                'username' => 'Rodrigo3',
                'password' => '123',
                'active' => 1
            ],
            [
                'id' => 4,
                'username' => 'Duda3',
                'password' => '123',
                'active' => 0
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
