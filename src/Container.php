<?php

/**
 * @author    : Jagepard <jagepard@yandex.ru">
 * @license   https://mit-license.org/ MIT
 */

namespace Primate\Container;

class Container implements ContainerInterface
{
    protected array $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function get(string $id = null)
    {
        if (empty($id)) {
            return $this->data;
        }

        if (!array_key_exists($id, $this->data)) {
            throw new \InvalidArgumentException("'$id' is not isset");
        }

        return $this->data[$id];
    }

    public function set(array $data): void
    {
        $this->data = array_merge($this->data, $data);
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->data);
    }
}
