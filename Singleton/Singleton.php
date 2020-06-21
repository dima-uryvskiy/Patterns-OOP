<?php

class Singleton
{
    private static $instance;

    public  static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new static;
        }

        return self::$instance;
    }

    /**
     * Конструктор Одиночки всегда должен быть скрытым, чтобы предотвратить
     * создание объекта через оператор new.
     */
    protected function __construct() { }

    /**
     * Клонирование и десериализация не разрешены для одиночек.
     */
    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}


$s1 = Singleton::getInstance();
$s2 = Singleton::getInstance();
if ($s1 === $s2) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}


