<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsistenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsistenciasTable Test Case
 */
class AsistenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AsistenciasTable
     */
    public $Asistencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.asistencias',
        'app.users',
        'app.horarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Asistencias') ? [] : ['className' => AsistenciasTable::class];
        $this->Asistencias = TableRegistry::get('Asistencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Asistencias);

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
