<?php namespace BetterExporter\Tests;

use PHPUnit\Framework\TestCase;
use BetterExport\VarExporter;

class VarExporterTest extends TestCase
{
    /** @var VarExporter */
    public $exporter;

    public function setUp()
    {
        $this->exporter = new VarExporter;
    }

    public function testExport()
    {
        $exported = $this->exporter->export('TOP GEG :DDD');
        $this->assertEquals("'TOP GEG :DDD'", $exported);
    }
}
