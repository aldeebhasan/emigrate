<?php

namespace Aldeebhasan\MigrationMapper\Facades;

use Aldeebhasan\MigrationMapper\MigrationMapperManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static void generateMigration():
 * @method static void regenerateMigration():
 * @method static void rollbackMigration():
 * @see MigrationMapperManager
 */
class MigrationMapper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'migration-mapper';
    }
}
