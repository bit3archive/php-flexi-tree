<?php

/**
 * FlexiTree
 *
 * @package FlexiTree
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Bit3\FlexiTree\Renderer;

use Bit3\FlexiTree\ItemCollectionInterface;

/**
 * Class ItemCollectionRendererInterface
 */
interface ItemCollectionRendererInterface
{
	/**
	 * @param ItemCollectionInterface $collection
	 *
	 * @return mixed
	 */
	public function renderCollection(
		ItemCollectionInterface $collection,
		ItemRendererInterface $itemRenderer = null
	);
}
