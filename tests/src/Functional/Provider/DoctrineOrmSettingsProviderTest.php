<?php
declare(strict_types=1);

namespace Helis\SettingsManagerBundle\Tests\Functional\Provider;

use App\Entity\Setting;
use App\Entity\Tag;
use Helis\SettingsManagerBundle\Provider\DoctrineOrmSettingsProvider;
use Helis\SettingsManagerBundle\Provider\SettingsProviderInterface;
use Liip\TestFixturesBundle\Test\FixturesTrait;

class DoctrineOrmSettingsProviderTest extends AbstractSettingsProviderTest
{
    use FixturesTrait;

    protected function setUp()
    {
        $this->loadFixtures([]);

        parent::setUp();
    }

    protected function createProvider(): SettingsProviderInterface
    {
        return new DoctrineOrmSettingsProvider(
            $this->getContainer()->get('doctrine.orm.default_entity_manager'),
            Setting::class,
            Tag::class
        );
    }
}
