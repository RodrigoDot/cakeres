<?php
use Migrations\AbstractSeed;

/**
 * Districts seed.
 */
class DistrictsSeed extends AbstractSeed
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
                'title' => 'pedreira'
            ],
            [
                'id' => 2,
                'title' => 'barreira'
            ],
            [
                'id' => 3,
                'title' => 'enseada'
            ]
        ];

        $table = $this->table('districts');
        $table->insert($data)->save();
    }
}
