## Table of contents
- [Primate\Container\Container](#primate_container_container)
- [Primate\Container\ContainerInterface](#primate_container_containerinterface)
<hr>

<a id="primate_container_container"></a>

### Class: Primate\Container\Container
##### implements [Primate\Container\ContainerInterface](#primate_container_containerinterface)
##### implements [Psr\Container\ContainerInterface](#psr_container_containerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( array $data )</em><br>Sets data<br>Устанавливает данные|
|public|<em><strong>get</strong>( ?string $id )</em><br>Receives data<br>Получает данные|
|public|<em><strong>set</strong>( string $id  array $data ): void</em><br>Adds data<br>Добавляет данные|
|public|<em><strong>has</strong>( string $id ): bool</em><br>Checks for data<br>Проверяет наличие данных|


<a id="primate_container_containerinterface"></a>

### Class: Primate\Container\ContainerInterface
##### implements [Psr\Container\ContainerInterface](#psr_container_containerinterface)
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>set</strong>( string $id  array $data ): void</em><br>|
|abstract public|<em><strong>get</strong>( string $id )</em><br>Finds an entry of the container by its identifier and returns it.|
|abstract public|<em><strong>has</strong>( string $id ): bool</em><br>Returns true if the container can return an entry for the given identifier.<br>Returns false otherwise.<br>`has($id)` returning true does not mean that `get($id)` will not throw an exception.<br>It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
