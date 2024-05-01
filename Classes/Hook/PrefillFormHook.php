<?php

declare(strict_types=1);

namespace GeorgRinger\NewsFormFill\Hook;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Form\Domain\Model\FormElements\GenericFormElement;
use TYPO3\CMS\Form\Domain\Runtime\FormRuntime;

class PrefillFormHook
{
    public function beforeRendering(FormRuntime $formRuntime, $element): void
    {
        $newsId = (int)GeneralUtility::_GET('newsid');
        if ($newsId && $element instanceof GenericFormElement && $element->getIdentifier() === 'newsid') {
            $element->setDefaultValue($newsId);
        }
    }
}
