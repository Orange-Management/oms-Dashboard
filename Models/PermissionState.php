<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    Modules\Dashboard
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       https://orange-management.org
 */
declare(strict_types=1);

namespace Modules\Dashboard\Models;

use phpOMS\Stdlib\Base\Enum;

/**
 * Permision state enum.
 *
 * @package    Modules\Dashboard
 * @license    OMS License 1.0
 * @link       https://orange-management.org
 * @since      1.0.0
 */
abstract class PermissionState extends Enum
{
    public const DASHBOARD = 1;
    public const BOARD     = 2;
    public const COMPONENT = 3;
}
