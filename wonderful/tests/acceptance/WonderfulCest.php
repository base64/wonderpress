<?php
namespace Wonderful;

use Wonderful\AcceptanceTester;

class WonderfulCest
{
    public function _before(AcceptanceTester $I)
    {
    }

	public function frontpageWorks(AcceptanceTester $I)
	{
		$I->amOnPage('/');
		$I->see('Wonderpress');
	}
}
