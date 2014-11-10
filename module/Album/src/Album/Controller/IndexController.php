<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

	protected $_albumDbTable;

	public function indexAction() {
		return new ViewModel(array(
			'albums' => $this->_albumDbTable()->fetchAll(),
		));
	}

	public function addAction() {

	}

	public function editAction() {

	}

	public function deleteAction() {

	}

	protected function _albumDbTable() {
         if (!$this->_albumDbTable) {
             $sm = $this->getServiceLocator();
						 echo "<pre>";
						 var_dump($sm);
						 echo "</pre>";
						 die('<div style="position: fixed; left: 0; bottom: 0; right: 0; text-align: center; background-color: black; font-weight: bold; font-size: 52px; "><font color=ff0000 size=1>K</font><font color=ff3333 size=2>i</font><font color=ff6666 size=3>l</font><font color=ff9999 size=4>l</font><font color=ffcccc size=5>e</font><font color=ffffff size=6>d</font> <font color=ccffcc size=7>b</font><font color=99ff99 size=6>y</font> <font color=66ff66 size=5>x</font><font color=33ff33 size=4>o</font><font color=00ff00 size=3>g</font><font color=33ff33 size=2>a</font><font color=66ff66 size=1>f</font> <font color=99ff99 size=2>-</font> <font color=ccffcc size=3>Y</font><font color=ffffff size=4>o</font><font color=ffcccc size=5>u</font> <font color=ff9999 size=6>a</font><font color=ff6666 size=7>r</font><font color=ff3333 size=6>e</font> <font color=ff6666 size=5>d</font><font color=ff9999 size=4>e</font><font color=ffcccc size=3>a</font><font color=ffffff size=2>d</font><font color=ccffcc size=1>.</font></div>');
             $this->albumTable = $sm->get('Album\Model\DbTable\Album');
         }
         return $this->_albumDbTable;
     }
}
