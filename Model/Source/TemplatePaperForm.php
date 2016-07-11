<?php
/**
 * EaDesgin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@eadesign.ro so we can send you a copy immediately.
 *
 * @category    custom_ext_code
 * @copyright   Copyright (c) 2008-2016 EaDesign by Eco Active S.R.L.
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

namespace Eadesigndev\Pdfgenerator\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\View\Model\PageLayout\Config\BuilderInterface;

/**
 * Class PageLayout
 */
class TemplatePaperForm extends \Eadesigndev\Pdfgenerator\Model\Source\AbstractSource
{
    /**
     * @var \Magento\Framework\View\Model\PageLayout\Config\BuilderInterface
     */
    protected $pageLayoutBuilder;

    /**
     * @var array
     */
    protected $options;

    /**
     * Constructor
     *
     * @param BuilderInterface $pageLayoutBuilder
     */
    public function __construct(BuilderInterface $pageLayoutBuilder)
    {
        $this->pageLayoutBuilder = $pageLayoutBuilder;
    }

    /**
     * Paper types
     */
    const TEMAPLATE_PAPER_FORM_A4 = 1;
    const TEMAPLATE_PAPER_FORMAT_A3 = 2;
    const TEMAPLATE_PAPER_FORMAT_A5 = 3;
    const TEMAPLATE_PAPER_FORMAT_A6 = 4;
    const TEMAPLATE_PAPER_FORMAT_LETTER = 5;
    const TEMAPLATE_PAPER_FORMAT_LEGAL = 6;


    /**
     * Prepare post's statuses.
     *
     * @return array
     */
    public function getAvailable()
    {
        return [
            self::TEMAPLATE_PAPER_FORM_A4 => __('A4'),
            self::TEMAPLATE_PAPER_FORMAT_A3 => __('A3'),
            self::TEMAPLATE_PAPER_FORMAT_A5 => __('A5'),
            self::TEMAPLATE_PAPER_FORMAT_A6 => __('A6'),
            self::TEMAPLATE_PAPER_FORMAT_LETTER => __('Letter'),
            self::TEMAPLATE_PAPER_FORMAT_LEGAL => __('Legal'),
        ];
    }

}
