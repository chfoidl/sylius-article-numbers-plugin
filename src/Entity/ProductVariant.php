<?php

declare(strict_types=1);

namespace ChrisXF\SyliusArticleNumbersPlugin\Entity;

use ChrisXF\SyliusArticleNumbersPlugin\Model\ArticleNumberInfoInterface;
use Sylius\Component\Core\Model\ProductVariant as BaseProductVariant;

class ProductVariant extends BaseProductVariant implements ProductVariantInterface
{
	/** @var string|null */
	private $articleNumber;

	/** @var string|null */
	private $ean;

	/** @var string|null */
	private $upc;

	public function setArticleNumber(?string $articleNumber): void
	{
		$this->articleNumber= $articleNumber;
	}

	public function getArticleNumber(): ?string
	{
		return $this->articleNumber;
	}

	public function setEAN(?string $ean): void
	{
		$this->ean= $ean;
	}

	public function getEAN(): ?string
	{
		return $this->ean;
	}

	public function setUPC(?string $upc): void
	{
		$this->upc= $upc;
	}

	public function getUPC(): ?string
	{
		return $this->upc;
	}
}
