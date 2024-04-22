<?php

namespace Jobsheet\Ex\Type\A\Containers;

use Jobsheet\Ex\Classes\Abstracts\Container;
use Jobsheet\Ex\Type\A\Components\Capacitor;
use Jobsheet\Ex\Type\A\Components\CertificationDetails;
use Jobsheet\Ex\Type\A\Components\FinalArmatureBarToBarResistanceTest;
use Jobsheet\Ex\Type\A\Components\Header;
use Jobsheet\Ex\Type\A\Components\IncomingArmatureBarToBarResistanceTest;
use Jobsheet\Ex\Type\A\Components\InsulationTest;
use Jobsheet\Ex\Type\A\Components\MachineDetails;
use Jobsheet\Ex\Type\A\Components\MachineDetailsDC;
use Jobsheet\Ex\Type\A\Components\MachineDetailsSinglePhase;
use Jobsheet\Ex\Type\A\Components\Pictures;
use Jobsheet\Ex\Type\A\Components\PicturesDC;
use Jobsheet\Ex\Type\A\Components\PolarizationIndex;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTest;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestDC;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestSinglePhase;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestTwoSpeed;
use Jobsheet\Ex\Type\A\Components\StaticTest;

class A extends Container
{
    protected static array $components = [
        Header::class,
        MachineDetails::class,
        MachineDetailsSinglePhase::class,
        MachineDetailsDC::class,
        CertificationDetails::class,
        Pictures::class,
        PicturesDC::class,
        StaticTest::class,
        ResistanceInductanceTest::class,
        ResistanceInductanceTestTwoSpeed::class,
        ResistanceInductanceTestSinglePhase::class,
        ResistanceInductanceTestDC::class,
        IncomingArmatureBarToBarResistanceTest::class,
        FinalArmatureBarToBarResistanceTest::class,
        Capacitor::class,
        InsulationTest::class,
        PolarizationIndex::class
    ];

    protected static function renderHTML(): string
    {
        ob_start();
        require_once dirname(__DIR__) . '/Template/A.html';
        return ob_get_clean();
    }
}
