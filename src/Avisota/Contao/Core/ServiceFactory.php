<?php

/**
 * Avisota newsletter and mailing system
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota/contao-core
 * @license    LGPL-3.0+
 * @filesource
 */

namespace Avisota\Contao\Core;

use Avisota\Contao\Core\RecipientSource\RecipientSourceFactoryInterface;
use Avisota\Contao\Core\Transport\TransportFactoryInterface;
use Avisota\Contao\Core\Queue\QueueFactoryInterface;
use Avisota\Contao\Entity\RecipientSource;
use Avisota\Contao\Entity\Transport;
use Avisota\Contao\Entity\Queue;
use Contao\Doctrine\ORM\EntityHelper;

class ServiceFactory
{
	/**
	 * @param \Pimple $container
	 */
	public function init($container)
	{
		$factory = $this;

		// initialize the entity manager and class loaders
		$container['doctrine.orm.entityManager'];

		if (class_exists('Avisota\Contao\Entity\RecipientSource')) {
			$recipientSourceRepository = EntityHelper::getRepository('Avisota\Contao:RecipientSource');
			/** @var RecipientSource[] $recipientSources */
			$recipientSources = $recipientSourceRepository->findAll();

			foreach ($recipientSources as $recipientSource) {
				$container[sprintf('avisota.recipientSource.%s', $recipientSource->getId())] = $container->share(
					function ($container) use ($recipientSource, $factory) {
						return $factory->createRecipientSource($recipientSource);
					}
				);

				$container[sprintf('avisota.recipientSource.%s', $recipientSource->getAlias())] = function($container) use ($recipientSource) {
					return $container[sprintf('avisota.recipientSource.%s', $recipientSource->getId())];
				};
			}
		}

		if (class_exists('Avisota\Contao\Entity\Queue')) {
			$queueRepository = EntityHelper::getRepository('Avisota\Contao:Queue');
			/** @var Queue[] $queues */
			$queues = $queueRepository->findAll();

			foreach ($queues as $queue) {
				$container[sprintf('avisota.queue.%s', $queue->getId())] = $container->share(
					function ($container) use ($queue, $factory) {
						return $factory->createQueue($queue);
					}
				);

				$container[sprintf('avisota.queue.%s', $queue->getAlias())] = function($container) use ($queue) {
					return $container[sprintf('avisota.queue.%s', $queue->getId())];
				};
			}
		}

		if (class_exists('Avisota\Contao\Entity\Transport')) {
			$transportRepository = EntityHelper::getRepository('Avisota\Contao:Transport');
			/** @var Transport[] $transports */
			$transports = $transportRepository->findAll();

			foreach ($transports as $transport) {
				$container[sprintf('avisota.transport.%s', $transport->getId())] = $container->share(
					function ($container) use ($transport, $factory) {
						return $factory->createTransport($transport);
					}
				);

				$container[sprintf('avisota.transport.%s', $transport->getAlias())] = function($container) use ($transport) {
					return $container[sprintf('avisota.transport.%s', $transport->getId())];
				};
			}
		}
	}

	public function createRecipientSource(RecipientSource $recipientSource)
	{
		$recipientSourceFactoryClass = new \ReflectionClass($GLOBALS['AVISOTA_RECIPIENT_SOURCE'][$recipientSource->getType()]);
		/** @var RecipientSourceFactoryInterface $recipientSourceFactory */
		$recipientSourceFactory = $recipientSourceFactoryClass->newInstance();

		return $recipientSourceFactory->createRecipientSource($recipientSource);
	}

	public function createQueue(Queue $queue)
	{
		$queueFactoryClass = new \ReflectionClass($GLOBALS['AVISOTA_QUEUE'][$queue->getType()]);
		/** @var QueueFactoryInterface $queueFactory */
		$queueFactory = $queueFactoryClass->newInstance();

		return $queueFactory->createQueue($queue);
	}

	public function createTransport(Transport $transport)
	{
		$transportFactoryClass = new \ReflectionClass($GLOBALS['AVISOTA_TRANSPORT'][$transport->getType()]);
		/** @var TransportFactoryInterface $transportFactory */
		$transportFactory = $transportFactoryClass->newInstance();

		return $transportFactory->createTransport($transport);
	}
}
