<?php

/**
 * FlexiTree
 *
 * @package FlexiTree
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://bit3.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Bit3\FlexiTree\Condition;

use Bit3\FlexiTree\ItemInterface;

/**
 * Class AndCondition
 */
class AndCondition extends AbstractConjunctionCondition
{
	/**
	 * {@inheritdoc}
	 */
	public function matchItem(ItemInterface $item)
	{
		foreach ($this->conditions as $condition) {
			if (!$condition->matchItem($item)) {
				return false;
			}
		}

		return true;
	}

	/**
	 * {@inheritdoc}
	 */
	public function describe()
	{
		$parts = array();
		foreach ($this->conditions as $condition) {
			$parts[] = $condition->describe();
		}

		if (count($parts)) {
			return sprintf('(%s)', implode(' AND ', $parts));
		}

		return 'true';
	}
}
