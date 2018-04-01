<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParcialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParcialesTable Test Case
 */
class ParcialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParcialesTable
     */
    public $Parciales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.parciales',
        'app.periodos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Parciales') ? [] : ['className' => ParcialesTable::class];
        $this->Parciales = TableRegistry::get('Parciales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parciales);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
