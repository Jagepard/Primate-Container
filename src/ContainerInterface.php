<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Primate\Container;

interface ContainerInterface
{
    /**
     * @param  string $id
     * @param  array  $data
     * @return void
     */
    public function set(string $id, array $data): void;

    /**
     * @param  string|null $id
     * @return void
     */
    public function get(string $id = null);

    /**
     * @param  string  $id
     * @return boolean
     */
    public function has(string $id): bool;
}
