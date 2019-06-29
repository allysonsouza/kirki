<?php
/**
 * Backwards-compatibility for Kirki filters.
 *
 * @package     Kirki
 * @category    Core
 * @author      Ari Stathopoulos (@aristath)
 * @copyright   Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license    https://opensource.org/licenses/MIT
 * @since       1.0
 */

namespace Kirki\Compatibility;

/**
 * Please do not use this class directly.
 * You should instead extend it per-field-type.
 */
class Deprecated {

    /**
     * Constructor.
     * 
     * @access public
     * @since 1.0
     */
    public function __construct() {
        require_once __DIR__ . '/deprecated/classes.php';
        require_once __DIR__ . '/deprecated/functions.php';
        require_once __DIR__ . '/deprecated/filters.php';
    }
}