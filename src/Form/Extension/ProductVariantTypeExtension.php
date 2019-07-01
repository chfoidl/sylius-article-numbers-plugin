<?php

declare(strict_types=1);

namespace ChrisXF\SyliusArticleNumbersPlugin\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sylius\Bundle\ProductBundle\Form\Type\ProductVariantType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductVariantTypeExtension extends AbstractTypeExtension
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
	{
		$builder->add('articleNumber', TextType::class, [
			'label' => 'chrisxf_sylius_article_numbers_plugin.ui.article_number',
			'required' => false
		]);

		$builder->add('ean', TextType::class, [
			'label' => 'chrisxf_sylius_article_numbers_plugin.ui.ean',
			'required' => false
		]);

		$builder->add('upc', TextType::class, [
			'label' => 'chrisxf_sylius_article_numbers_plugin.ui.upc',
			'required' => false
		]);
	}

	public function getExtendedType(): string
	{
		return ProductVariantType::class;
	}
}
