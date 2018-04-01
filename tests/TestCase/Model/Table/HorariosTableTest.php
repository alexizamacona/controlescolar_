<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorariosTable Test Case
 */
class HorariosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HorariosTable
     */
    public $Horarios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.horarios',
        'app.grupos',
        'app.materias',
        'app.users',
        'app.periodos',
        'app.actividades',
        'app.inscripciones',
        'app.asistencias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Horarios') ? [] : ['className' => HorariosTable::class];
        $this->Horarios = TableRegistry::get('Horarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Horarios);

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
