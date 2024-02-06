<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PropertiesFixture
 */
class PropertiesFixture extends TestFixture
{
    public $fields =[
        'id' => ['type' => 'integer'],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false],
        'description' => ['type' => 'text', 'null' => true],
        'address' => ['type' => 'string', 'length' => 255, 'null' => true],
        'city' => ['type' => 'string', 'length' => 255, 'null' => true],
        'state' => ['type' => 'string', 'length' => 255, 'null' => true],
        'zip_code' => ['type' => 'string', 'length' => 20, 'null' => true],
        'price' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'null' => true],
        'bedrooms' => ['type' => 'integer', 'null' => true],
        'bathrooms' => ['type' => 'integer', 'null' => true],
        'area_sqft' => ['type' => 'integer', 'null' => true],
        'created_at' => ['type' => 'timestamp', 'null' => false],
        'updated_at' => ['type' => 'timestamp', 'null' => false],
        '_constraints' => ['type' => 'primary', 'columns' => ['id']],
    ];
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'address' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'zip_code' => 'Lorem ipsum dolor ',
                'price' => 1.5,
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area_sqft' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        parent::init();
    }
}
