<?php

/*
 * This file is part of the Da2e SimpleFactory package.
 *
 * (c) Dmitry Abrosimov <abrosimovs@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Da2e\SimpleFactory;

/**
 * @author Dmitry Abrosimov <abrosimovs@gmail.com>
 */
class SimpleFactory implements SimpleFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function create(string $class, array $constructorArgs = [])
    {
        if (!class_exists($class)) {
            throw new \RuntimeException(sprintf('Class %s is not found.', $class));
        }

        return new $class(...$constructorArgs);
    }
}
