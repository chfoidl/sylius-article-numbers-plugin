<?php

declare(strict_types=1);

namespace ChrisXF\SyliusArticleNumbersPlugin\Block;

use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Sonata\BlockBundle\Mapper\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\Form\Validator\ErrorElement;

class ProductVariantArticleNumbersBlockService extends AbstractBlockService
{
	public function __construct(string $serviceId, TwigEngine $twig)
	{
		parent::__construct($serviceId, $twig);
	}

	public function setDefaultSettings(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults([
			'template' => '@ChrisXFSyliusArticleNumbersPlugin/Resources/views/_product_variant_article_numbers_block.html.twig'
		]);
	}

	public function execute(BlockContextInterface $blockContext, Response $response = null)
	{
		$block = $blockContext->getBlock();
		$form = $block->getSettings()['form'];
		$formFields = null;

		if (isset($form->children['variant'])) {
			$formFields = $form->children['variant'];
		} else if (isset($form->children['articleNumber'])) {
			$formFields = $form;
		}

		return $this->renderResponse($blockContext->getTemplate(), [
			'block' => $block,
			'settings' => $blockContext->getSettings(),
			'form' => $formFields
		], $response);
	}
}
