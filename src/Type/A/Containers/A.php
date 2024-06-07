<?php

namespace Jobsheet\Ex\Type\A\Containers;

use Jobsheet\Ex\Classes\Abstracts\Container;
use Jobsheet\Ex\Type\A\Components\AuxiliaryDevicesTest;
use Jobsheet\Ex\Type\A\Components\Capacitor;
use Jobsheet\Ex\Type\A\Components\CertificationDetails;
use Jobsheet\Ex\Type\A\Components\Connection;
use Jobsheet\Ex\Type\A\Components\DynamicTestDC;
use Jobsheet\Ex\Type\A\Components\DynamicTestFinal;
use Jobsheet\Ex\Type\A\Components\DynamicTestIncoming;
use Jobsheet\Ex\Type\A\Components\DynamicTestRunningTestFast;
use Jobsheet\Ex\Type\A\Components\DynamicTestRunningTestSlow;
use Jobsheet\Ex\Type\A\Components\FinalArmatureBarToBarResistanceTest;
use Jobsheet\Ex\Type\A\Components\Header;
use Jobsheet\Ex\Type\A\Components\IncomingArmatureBarToBarResistanceTest;
use Jobsheet\Ex\Type\A\Components\InsulationTest;
use Jobsheet\Ex\Type\A\Components\InsulationTestDC;
use Jobsheet\Ex\Type\A\Components\InsulationTestTwoSpeed;
use Jobsheet\Ex\Type\A\Components\LockedRotorTest;
use Jobsheet\Ex\Type\A\Components\LockedRotorTestDC;
use Jobsheet\Ex\Type\A\Components\MachineDetails;
use Jobsheet\Ex\Type\A\Components\MachineDetailsDC;
use Jobsheet\Ex\Type\A\Components\MachineDetailsSinglePhase;
use Jobsheet\Ex\Type\A\Components\MeasuringDevicesAndInstruments;
use Jobsheet\Ex\Type\A\Components\MechanicalRepairing;
use Jobsheet\Ex\Type\A\Components\OthersComponents;
use Jobsheet\Ex\Type\A\Components\Pictures;
use Jobsheet\Ex\Type\A\Components\PicturesDC;
use Jobsheet\Ex\Type\A\Components\PolarizationIndex;
use Jobsheet\Ex\Type\A\Components\RadialAirGabCalculation;
use Jobsheet\Ex\Type\A\Components\RadialAirGapCalculationGroup2;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTest;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestDC;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestSinglePhase;
use Jobsheet\Ex\Type\A\Components\ResistanceInductanceTestTwoSpeed;
use Jobsheet\Ex\Type\A\Components\RotationFromNDE;
use Jobsheet\Ex\Type\A\Components\RunningTest;
use Jobsheet\Ex\Type\A\Components\RunningTestFinalMV;
use Jobsheet\Ex\Type\A\Components\RunningTestSinglePhase;
use Jobsheet\Ex\Type\A\Components\StaticTest;
use Jobsheet\Ex\Type\A\Components\SummaryOfElectricalWork;
use Jobsheet\Ex\Type\A\Components\SummaryOfMechanicalWork;
use Jobsheet\Ex\Type\A\Components\SurgeComparisonTest;
use Jobsheet\Ex\Type\A\Components\SurgeComparisonTestDC;
use Jobsheet\Ex\Type\A\Components\TemperatureSensorHeater;
use Jobsheet\Ex\Type\A\Components\TimeResistanceMethod;
use Jobsheet\Ex\Type\A\Components\VibrationTestBearingTest;
use Jobsheet\Ex\Type\A\Components\VibrationTestBearingTestFinalTimeMV;
use Jobsheet\Ex\Type\A\Components\VibrationTestBearingTestIncomingMV;
use Jobsheet\Ex\Type\A\Components\VibrationTestBearingTestIncomingTimeMV;

class A extends Container
{
    protected static string $title = 'A';
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
        PolarizationIndex::class,
        TimeResistanceMethod::class,
        InsulationTestTwoSpeed::class,
        InsulationTestDC::class,
        SurgeComparisonTest::class,
        SurgeComparisonTestDC::class,
        AuxiliaryDevicesTest::class,
        TemperatureSensorHeater::class,
        Connection::class,
        RotationFromNDE::class,
        LockedRotorTest::class,
        LockedRotorTestDC::class,
        RunningTest::class,
        DynamicTestIncoming::class,
        DynamicTestFinal::class,
        RunningTestFinalMV::class,
        DynamicTestRunningTestSlow::class,
        DynamicTestRunningTestFast::class,
        RunningTestSinglePhase::class,
        DynamicTestDC::class,
        VibrationTestBearingTest::class,
        VibrationTestBearingTestIncomingMV::class,
        VibrationTestBearingTestIncomingTimeMV::class,
        VibrationTestBearingTestFinalTimeMV::class,
        MechanicalRepairing::class,
        SummaryOfElectricalWork::class,
        SummaryOfMechanicalWork::class,
        RadialAirGabCalculation::class,
        RadialAirGapCalculationGroup2::class,
        OthersComponents::class,
        MeasuringDevicesAndInstruments::class,
    ];

    protected static function renderHTML(): string
    {
        ob_start();
        require_once dirname(__DIR__) . '/Template/A.html';
        return ob_get_clean();
    }
}
