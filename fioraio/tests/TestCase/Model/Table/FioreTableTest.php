<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FioreTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FioreTable Test Case
 */
class FioreTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FioreTable
     */
    protected $Fiore;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Fiore',
        'app.Occasions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fiore') ? [] : ['className' => FioreTable::class];
        $this->Fiore = TableRegistry::getTableLocator()->get('Fiore', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Fiore);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
