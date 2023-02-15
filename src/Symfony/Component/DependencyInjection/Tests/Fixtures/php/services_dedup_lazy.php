<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    protected $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'bar' => 'getBarService',
            'baz' => 'getBazService',
            'buz' => 'getBuzService',
            'foo' => 'getFooService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    protected function createProxy($class, \Closure $factory)
    {
        return $factory();
    }

    /**
     * Gets the public 'bar' shared service.
     *
     * @return \stdClass
     */
    protected function getBarService($lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $this->services['bar'] = $this->createProxy('stdClassGhost5a8a5eb', fn () => \stdClassGhost5a8a5eb::createLazyGhost($this->getBarService(...)));
        }

        return $lazyLoad;
    }

    /**
     * Gets the public 'baz' shared service.
     *
     * @return \stdClass
     */
    protected function getBazService($lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $this->services['baz'] = $this->createProxy('stdClassProxy5a8a5eb', fn () => \stdClassProxy5a8a5eb::createLazyProxy(fn () => $this->getBazService(false)));
        }

        return \foo_bar();
    }

    /**
     * Gets the public 'buz' shared service.
     *
     * @return \stdClass
     */
    protected function getBuzService($lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $this->services['buz'] = $this->createProxy('stdClassProxy5a8a5eb', fn () => \stdClassProxy5a8a5eb::createLazyProxy(fn () => $this->getBuzService(false)));
        }

        return \foo_bar();
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \stdClass
     */
    protected function getFooService($lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $this->services['foo'] = $this->createProxy('stdClassGhost5a8a5eb', fn () => \stdClassGhost5a8a5eb::createLazyGhost($this->getFooService(...)));
        }

        return $lazyLoad;
    }
}

class stdClassGhost5a8a5eb extends \stdClass implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

class stdClassProxy5a8a5eb extends \stdClass implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);