<?php

namespace Container3qKfEDg;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd55f7 = null;
    private $initializerf2fbf = null;
    private static $publicProperties53577 = [
        
    ];
    public function getConnection()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getConnection', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getMetadataFactory', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getExpressionBuilder', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'beginTransaction', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getCache', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'transactional', array('func' => $func), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'commit', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->commit();
    }
    public function rollback()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'rollback', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'createQuery', array('dql' => $dql), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'createQueryBuilder', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'flush', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'clear', array('entityName' => $entityName), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->clear($entityName);
    }
    public function close()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'close', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->close();
    }
    public function persist($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'persist', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'remove', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'refresh', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'detach', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'merge', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'contains', array('entity' => $entity), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getEventManager', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getConfiguration', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'isOpen', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getUnitOfWork', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getProxyFactory', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'getFilters', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'isFiltersStateClean', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'hasFilters', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return $this->valueHolderd55f7->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf2fbf = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderd55f7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd55f7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderd55f7->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__get', ['name' => $name], $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        if (isset(self::$publicProperties53577[$name])) {
            return $this->valueHolderd55f7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd55f7;
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
        $targetObject = $this->valueHolderd55f7;
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
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd55f7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderd55f7;
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
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__isset', array('name' => $name), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd55f7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderd55f7;
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
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__unset', array('name' => $name), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd55f7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd55f7;
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
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__clone', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        $this->valueHolderd55f7 = clone $this->valueHolderd55f7;
    }
    public function __sleep()
    {
        $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, '__sleep', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
        return array('valueHolderd55f7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2fbf = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2fbf;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf2fbf && ($this->initializerf2fbf->__invoke($valueHolderd55f7, $this, 'initializeProxy', array(), $this->initializerf2fbf) || 1) && $this->valueHolderd55f7 = $valueHolderd55f7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd55f7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd55f7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
