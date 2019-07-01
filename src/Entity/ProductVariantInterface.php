<?php

declare(strict_types=1);

namespace ChrisXF\SyliusArticleNumbersPlugin\Entity;

use ChrisXF\SyliusArticleNumbersPlugin\Model\ArticleNumberInfoInterface;
use Sylius\Component\Core\Model\ProductVariantInterface as BaseProductVariantInterface;

interface ProductVariantInterface extends BaseProductVariantInterface
{
	public function setArticleNumber(?string $articleNumber): void;

	public function getArticleNumber(): ?string;

	public function setEAN(?string $ean): void;

	public function getEAN(): ?string;

	public function setUPC(?string $upc): void;

	public function getUPC(): ?string;
}
