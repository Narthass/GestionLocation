<?php

namespace ContainerII3I4YV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder405fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer945c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesda0c9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getConnection', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getMetadataFactory', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getExpressionBuilder', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'beginTransaction', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getCache', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'transactional', array('func' => $func), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'commit', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->commit();
    }

    public function rollback()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'rollback', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getClassMetadata', array('className' => $className), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'createQuery', array('dql' => $dql), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'createNamedQuery', array('name' => $name), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'createQueryBuilder', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'flush', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'clear', array('entityName' => $entityName), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->clear($entityName);
    }

    public function close()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'close', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->close();
    }

    public function persist($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'persist', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'remove', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'refresh', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'detach', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'merge', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'contains', array('entity' => $entity), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getEventManager', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getConfiguration', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'isOpen', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getUnitOfWork', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getProxyFactory', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'initializeObject', array('obj' => $obj), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'getFilters', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'isFiltersStateClean', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'hasFilters', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return $this->valueHolder405fc->hasFilters();
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

        $instance->initializer945c4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder405fc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder405fc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder405fc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__get', ['name' => $name], $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        if (isset(self::$publicPropertiesda0c9[$name])) {
            return $this->valueHolder405fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder405fc;

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

        $targetObject = $this->valueHolder405fc;
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
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder405fc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder405fc;
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
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__isset', array('name' => $name), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder405fc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder405fc;
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
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__unset', array('name' => $name), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder405fc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder405fc;
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
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__clone', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        $this->valueHolder405fc = clone $this->valueHolder405fc;
    }

    public function __sleep()
    {
        $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, '__sleep', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;

        return array('valueHolder405fc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer945c4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer945c4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer945c4 && ($this->initializer945c4->__invoke($valueHolder405fc, $this, 'initializeProxy', array(), $this->initializer945c4) || 1) && $this->valueHolder405fc = $valueHolder405fc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder405fc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder405fc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
