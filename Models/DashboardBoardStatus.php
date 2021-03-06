<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\Dashboard\Models
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Dashboard\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * DashboardBoard status enum.
 *
 * @package Modules\Dashboard\Models
 * @license OMS License 1.0
 * @link    https://orange-management.org
 * @since   1.0.0
 */
abstract class DashboardBoardStatus extends Enum
{
    public const ACTIVE = 1;

    public const INACTIVE = 2;
}
