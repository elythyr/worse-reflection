<?php

namespace Phpactor\WorseReflection\Tests\Integration;

use Phpactor\WorseReflection\Tests\Integration\IntegrationTestCase;
use Phpactor\WorseReflection\Offset;
use Phpactor\WorseReflection\SourceCode;

class ReflectorTest extends IntegrationTestCase
{
    /**
     * @testdox It reflects the value at an offset.
     */
    public function testReflectOffset()
    {
        $source = <<<'EOT'
<?php

$foobar = 'Hello';
$foobar;
EOT
        ;

        $value = $this->createReflector($source)->reflectOffset(SourceCode::fromString($source), Offset::fromInt(27));
        $this->assertEquals('string', (string) $value->type());
    }
}
