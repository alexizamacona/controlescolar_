<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodosTable Test Case
 */
class PeriodosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodosTable
     */
    public $Periodos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.periodos',
        'app.calendarios',
        'app.grupos',
        'app.materias',
        'app.carreras',
        'app.users',
        'app.actividades',
        'app.horarios',
        'app.asistencias',
        'app.inscripciones',
        'app.parciales'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Periodos') ? [] : ['className' => PeriodosTable::class];
        $this->Periodos = TableRegistry::get('Periodos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periodos);

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
