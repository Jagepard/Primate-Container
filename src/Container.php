<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Primate\Container;

class Container implements ContainerInterface
{
    /**
     * Sets data
     * ---------
     * Устанавливает данные
     *
     * @param  array $data
     */
    public function __construct(protected array $data = [])
    {
    }

    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @param  string|null $id
     * @return mixed
     */
    public function get(?string $id = null): mixed
    {
        if (empty($id)) {
            return $this->data;
        }

        if (!array_key_exists($id, $this->data)) {
            throw new \InvalidArgumentException("'$id' is not isset");
        }

        return $this->data[$id];
    }

    /**
     * Adds data
     * ---------
     * Добавляет данные
     * 
     * @param  array  $data
     * @return void
     */
    public function set(array $data): void
    {
        $this->data = array_merge($this->data, $data);
    }

    /**
     * Checks for data
     * ---------------
     * Проверяет наличие данных
     *
     * @param  string  $id
     * @return bool
     */
    public function has(string $id): bool
    {
        return array_key_exists($id, $this->data);
    }
}
