<?php

declare(strict_types=1);

namespace ChrisXF\SyliusArticleNumbersPlugin\Event;

use Sonata\BlockBundle\Event\BlockEvent;
use Sonata\BlockBundle\Model\Block;

class ProductVariantArticleNumbers
{
	public function onBlock(BlockEvent $event)
	{
		$block = new Block();
		$block->setId('chrisxf.sylius_article_numbers_plugin.block.product_variant_article_numbers');
		$block->setSettings($event->getSettings());
		$block->setType('chrisxf.sylius_article_numbers_plugin.block.service.product_variant_article_numbers');

		$event->addBlock($block);
	}
}
