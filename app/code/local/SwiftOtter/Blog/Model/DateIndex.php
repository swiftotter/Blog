<?php
/**
 * SwiftOtter_Base is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SwiftOtter_Base is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with SwiftOtter_Base. If not, see <http://www.gnu.org/licenses/>.
 *
 * Copyright: 2013 (c) SwiftOtter Studios
 *
 * @author Joseph Maxwell
 * @copyright Swift Otter Studios, 5/6/15
 * @package default
 **/

class SwiftOtter_Blog_Model_DateIndex extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        $this->_init('SwiftOtter_Blog/DateIndex');
    }

    public function getUrl()
    {
        return Mage::app()->getStore()->getUrl(sprintf('blog/%s/%s', $this->getYear(), $this->getMonth()));
    }
}