<?php

namespace ContainerHM0D7ZY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9c21e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4618 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties007f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getConnection', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getMetadataFactory', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getExpressionBuilder', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'beginTransaction', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getCache', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'transactional', array('func' => $func), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->transactional($func);
    }

    public function commit()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'commit', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->commit();
    }

    public function rollback()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'rollback', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'createQuery', array('dql' => $dql), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'createQueryBuilder', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'flush', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'clear', array('entityName' => $entityName), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'close', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->close();
    }

    public function persist($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'persist', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'remove', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'refresh', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'detach', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'merge', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'contains', array('entity' => $entity), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getEventManager', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getConfiguration', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'isOpen', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getUnitOfWork', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getProxyFactory', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'getFilters', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'isFiltersStateClean', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'hasFilters', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return $this->valueHolder9c21e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd4618 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9c21e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9c21e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9c21e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__get', ['name' => $name], $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        if (isset(self::$publicProperties007f7[$name])) {
            return $this->valueHolder9c21e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__isset', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__unset', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__clone', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $this->valueHolder9c21e = clone $this->valueHolder9c21e;
    }

    public function __sleep()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__sleep', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return array('valueHolder9c21e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4618 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4618;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'initializeProxy', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c21e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c21e;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
