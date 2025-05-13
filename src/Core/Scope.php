<?php
namespace Peridot\Core;

use Peridot\Reporter\ReporterInterface as PeridotReporterInterface;
use Peridot\Scope\Scope as PeridotScope;

/**
 * Extends PeridotScope and is maintained here to support
 * backwards compatibility with plugins
 *
 * @package Peridot\Core
 */
#[\AllowDynamicProperties]
class Scope extends PeridotScope
{
    protected PeridotReporterInterface $reporter;

}
