<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\Definition;

use PrinsFrank\MRTD\CheckDigit\CheckDigit;
use PrinsFrank\MRTD\DataElement\DataElement;

interface MRZDefinition
{
    public static function nrOfLines(): int;

    public static function nrOfCharactersPerLine(): int;

    /** @return array<DataElement> */
    public static function getDataElements(): array;

    /** @return array<CheckDigit> */
    public static function getCheckDigits(): array;
}
