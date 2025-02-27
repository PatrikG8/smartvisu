<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Sandbox;

/**
 * Exception thrown when a not allowed filter is used in a template.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class SecurityNotAllowedFilterError extends SecurityError
{
    private $filterName;

    public function __construct($message, $functionName, $lineno = -1, $filename = null, ?\Exception $previous = null)
    {
        parent::__construct($message, $lineno, $filename, $previous);
        $this->filterName = $functionName;
    }

    public function getFilterName()
    {
        return $this->filterName;
    }
}

class_alias('Twig\Sandbox\SecurityNotAllowedFilterError', 'Twig_Sandbox_SecurityNotAllowedFilterError');
