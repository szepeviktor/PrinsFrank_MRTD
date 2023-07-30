<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\MRZ;

use PrinsFrank\MRTD\Data\MRZ2Data;
use PrinsFrank\MRTD\Data\MRZData;
use PrinsFrank\MRTD\Definition\MRZ2Definition;
use PrinsFrank\MRTD\Definition\MRZDefinition;
use PrinsFrank\MRTD\String\MRZ2String;
use PrinsFrank\MRTD\String\MRZString;

class MRZ2 implements MRZInterface
{
    public function __construct(
        public readonly MRZ2String $MRZ1String,
        public readonly MRZ2Data $MRZ1Data,
    ) {
    }

    /** @return class-string<MRZDefinition> */
    public static function getDefinitionFQN(): string
    {
        return MRZ2Definition::class;
    }

    /** @return class-string<MRZString> */
    public static function getStringObjectFQN(): string
    {
        return MRZ2String::class;
    }

    /** @return class-string<MRZData> */
    public static function getDataObjectFQN(): string
    {
        return MRZ2Data::class;
    }
}
