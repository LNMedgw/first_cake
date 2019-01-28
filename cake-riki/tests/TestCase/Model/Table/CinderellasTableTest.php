<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CinderellasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CinderellasTable Test Case
 */
class CinderellasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CinderellasTable
     */
    public $Cinderellas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cinderellas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cinderellas') ? [] : ['className' => CinderellasTable::class];
        $this->Cinderellas = TableRegistry::getTableLocator()->get('Cinderellas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cinderellas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
