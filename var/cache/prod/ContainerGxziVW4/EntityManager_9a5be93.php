<?php

namespace ContainerGxziVW4;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder945f9 = null;
    private $initializere4738 = null;
    private static $publicPropertiesf5701 = [
        
    ];
    public function getConnection()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getConnection', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getMetadataFactory', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getExpressionBuilder', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'beginTransaction', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->beginTransaction();
    }
    public function getCache()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getCache', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getCache();
    }
    public function transactional($func)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'transactional', array('func' => $func), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'wrapInTransaction', array('func' => $func), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'commit', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->commit();
    }
    public function rollback()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'rollback', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getClassMetadata', array('className' => $className), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'createQuery', array('dql' => $dql), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'createNamedQuery', array('name' => $name), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'createQueryBuilder', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'flush', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'clear', array('entityName' => $entityName), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->clear($entityName);
    }
    public function close()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'close', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->close();
    }
    public function persist($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'persist', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'remove', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'refresh', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'detach', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'merge', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'contains', array('entity' => $entity), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getEventManager', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getConfiguration', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'isOpen', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getUnitOfWork', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getProxyFactory', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'initializeObject', array('obj' => $obj), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'getFilters', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'isFiltersStateClean', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'hasFilters', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return $this->valueHolder945f9->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializere4738 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder945f9) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder945f9 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder945f9->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__get', ['name' => $name], $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        if (isset(self::$publicPropertiesf5701[$name])) {
            return $this->valueHolder945f9->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder945f9;
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
        $targetObject = $this->valueHolder945f9;
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
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder945f9;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder945f9;
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
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__isset', array('name' => $name), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder945f9;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder945f9;
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
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__unset', array('name' => $name), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder945f9;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder945f9;
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
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__clone', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        $this->valueHolder945f9 = clone $this->valueHolder945f9;
    }
    public function __sleep()
    {
        $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, '__sleep', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
        return array('valueHolder945f9');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4738 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4738;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere4738 && ($this->initializere4738->__invoke($valueHolder945f9, $this, 'initializeProxy', array(), $this->initializere4738) || 1) && $this->valueHolder945f9 = $valueHolder945f9;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder945f9;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder945f9;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
