<?php
use Migrations\AbstractSeed;

/**
 * Properties seed.
 */
class PropertiesSeed extends AbstractSeed
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
                'title' => 'casa 1 - mansao',
                'description' => 'casa azul',
                'value' => '1000.00',
                'type_id' => 1,
                'district_id' => 2
            ],
            [
                'title' => 'casa 2 - barraco',
                'description' => 'casa vermelha',
                'value' => '2000.00',
                'type_id' => 2,
                'district_id' => 1
            ],
            [
                'title' => 'casa 3 - edificio',
                'description' => 'casa amarela',
                'value' => '3000.00',
                'type_id' => 1,
                'district_id' => 3
            ]
        ];

        $table = $this->table('properties');
        $table->insert($data)->save();
    }
}
