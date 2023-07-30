<?php
declare(strict_types=1);

namespace PrinsFrank\MRTD\String;

class MRZ3String implements MRZString
{
    public function __construct(
        public readonly string $line1,
        public readonly string $line2,
    ) {
    }
}
