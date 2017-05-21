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
interface SimpleFactoryInterface
{
    /**
     * Creates a concrete object.
     *
     * @param string $class           FQN of the class (e.g. Object::class)
     * @param array  $constructorArgs Constructor arguments (optional)
     *
     * @return object
     */
    public function create(string $class, array $constructorArgs = []);
}
