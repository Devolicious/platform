<?php
namespace Oro\Bundle\MessagingBundle\DependencyInjection\Compiler;

use Oro\Component\Messaging\ZeroConfig\Route;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class BuildRouteRegistryPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $processorTagName = 'oro_messaging.zero_config.message_processor';
        $routeRegistryId = 'oro_messaging.zero_config.route_registry';

        if (false == $container->hasDefinition($routeRegistryId)) {
            return;
        }

        $routeRegistryDef = $container->getDefinition($routeRegistryId);

        foreach ($container->findTaggedServiceIds($processorTagName) as $serviceId => $tagAttributes) {
            foreach ($tagAttributes as $tagAttribute) {
                if (false == isset($tagAttribute['messageName']) || false == $tagAttribute['messageName']) {
                    throw new \LogicException(sprintf('Message name is not set but it is required. service: "%s", tag: "%s"', $serviceId, $processorTagName));
                }

                $queueName = null;
                if (isset($tagAttribute['queueName']) && $tagAttribute['queueName']) {
                    $queueName = $tagAttribute['queueName'];
                }

                $processorName = $serviceId;
                if (isset($tagAttribute['processorName']) && $tagAttribute['processorName']) {
                    $processorName = $tagAttribute['processorName'];
                }

                $routeDef = new Definition(Route::class);
                $routeDef->setPublic(false);
                $routeDef->addMethodCall('setMessageName', [$tagAttribute['messageName']]);
                $routeDef->addMethodCall('setProcessorName', [$processorName]);
                $routeDef->addMethodCall('setQueueName', [$queueName]);

                $routeRegistryDef->addMethodCall('addRoute', [$routeDef]);
            }
        }
    }
}
