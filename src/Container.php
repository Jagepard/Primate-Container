<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Primate\Container;

use Psr\Container\NotFoundExceptionInterface;

class Container implements ContainerInterface
{
    protected array $data = [];

    /**
     * Sets data
     * ---------
     * Устанавливает данные
     *
     * @param  array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @param  string|null $id
     * @return void
     */
    public function get(string $id = null)
    {
        if (empty($id)) {
            return $this->data;
        }

        if (!array_key_exists($id, $this->data)) {
            throw new NotFoundExceptionInterface("'$id' is not isset");
        }

        return $this->data[$id];
    }

    /**
     * Adds data
     * ---------
     * Добавляет данные
     * 
     * @param  string $id
     * @param  array  $data
     * @return void
     */
    public function set(string $id, array $data): void
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * Checks for data
     * ---------------
     * Проверяет наличие данных
     *
     * @param  string  $id
     * @return boolean
     */
    public function has(string $id): bool
    {
        return array_key_exists($id, $this->data);
    }
}
