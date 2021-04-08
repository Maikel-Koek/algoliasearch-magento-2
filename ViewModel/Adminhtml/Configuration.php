<?php

namespace Algolia\AlgoliaSearch\ViewModel\Adminhtml;

use Algolia\AlgoliaSearch\Helper\Configuration\AssetHelper;
use Algolia\AlgoliaSearch\Helper\Configuration\NoticeHelper;

class Configuration implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /** @var AssetHelper */
    private $assetHelper;

    /** @var NoticeHelper */
    private $noticeHelper;

    public function __construct(
        AssetHelper $assetHelper,
        NoticeHelper $noticeHelper
    ) {
        $this->assetHelper = $assetHelper;
        $this->noticeHelper = $noticeHelper;
    }

    public function getLinksAndVideoTemplate($section)
    {
        return $this->assetHelper->getLinksAndVideoTemplate($section);
    }

    public function getExtensionNotices()
    {
        return $this->noticeHelper->getExtensionNotices();
    }
}
