<?php

declare(strict_types=1);

namespace spec\ChrisXF\SyliusArticleNumbersPlugin\Entity;

use ChrisXF\SyliusArticleNumbersPlugin\Entity\ProductVariantInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Core\Model\ProductVariant;

final class ProductVariantSpec extends ObjectBehavior
{
	function it_is_sylius_product(): void
	{
		$this->shouldHaveType(ProductVariant::class);
	}

	function it_implements_product_interface(): void
	{
		$this->shouldImplement(ProductVariantInterface::class);
	}

	function it_has_article_number(): void
	{
		$this->getArticleNumber()->shouldReturn(null);

		$articleNumber = '123456';
		$this->setArticleNumber($articleNumber);

		$this->getArticleNumber()->shouldReturn($articleNumber);
	}

	function it_has_ean(): void
	{
		$this->getEAN()->shouldReturn(null);

		$ean = '123456';
		$this->setEAN($ean);

		$this->getEAN()->shouldReturn($ean);
	}

	function it_has_upc(): void
	{
		$this->getUPC()->shouldReturn(null);

		$upc = '123456';
		$this->setUPC($upc);

		$this->getUPC()->shouldReturn($upc);
	}
}
