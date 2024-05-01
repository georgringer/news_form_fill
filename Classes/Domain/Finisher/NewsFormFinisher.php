<?php

namespace GeorgRinger\NewsFormFill\Domain\Finisher;


use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;

class NewsFormFinisher extends AbstractFinisher
{
    private array $fields = [
        'uid',
        'pid',
        'title',
        'teaser',
        'bodytext',
        'datetime',
    ];

    protected $defaultOptions = [
        'newsid' => '{newsid}',
    ];

    protected function executeInternal()
    {
        $newsId = (int)$this->parseOption('newsid');
        if ($newsId > 0) {
            $row = BackendUtility::getRecord('tx_news_domain_model_news', $newsId, implode(',', $this->fields));
            if ($row) {
                foreach ($this->fields as $field) {
                    $this->finisherContext->getFinisherVariableProvider()->add(
                        'newsFormFill',
                        $field,
                        $row[$field]
                    );
                }
            }

        }
    }
}