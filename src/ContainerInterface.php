<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Primate\Container;

interface ContainerInterface
{
    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @param  string|null $id
     * @return mixed
     */
    public function get(?string $id = null): mixed;

    /**
     * Adds data
     * ---------
     * Добавляет данные
     * 
     * @param  array  $data
     * @return void
     */
    public function set(array $data): void;

    /**
     * Checks for data
     * ---------------
     * Проверяет наличие данных
     *
     * @param  string  $id
     * @return bool
     */
    public function has(string $id): bool;
}
