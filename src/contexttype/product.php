<?php

declare(strict_types=1);

namespace TwoNobleStudio\OpenGraph\ContextType;

/**
 * Product OpenGraph object
 */
class Product
{
    /**
     * @var string[]
     */
    const CURRENCY_CODES = [
        'AED', 'AFN', 'ALL', 'AMD', 'ANG', 'AOA', 'ARS', 'AUD', 'AWG', 'AZN',
        'BAM', 'BBD', 'BDT', 'BGN', 'BHD', 'BIF', 'BMD', 'BND', 'BOB', 'BOV',
        'BRL', 'BSD', 'BTN', 'BWP', 'BYN', 'BZD', 'CAD', 'CDF', 'CHE', 'CHF',
        'CHW', 'CLF', 'CLP', 'CNY', 'COP', 'COU', 'CRC', 'CUC', 'CUP', 'CVE',
        'CZK', 'DJF', 'DKK', 'DOP', 'DZD', 'EGP', 'ERN', 'ETB', 'EUR', 'FJD',
        'FKP', 'GBP', 'GEL', 'GHS', 'GIP', 'GMD', 'GNF', 'GTQ', 'GYD', 'HKD',
        'HNL', 'HRK', 'HTG', 'HUF', 'IDR', 'ILS', 'INR', 'IQD', 'IRR', 'ISK',
        'JMD', 'JOD', 'JPY', 'KES', 'KGS', 'KHR', 'KMF', 'KPW', 'KRW', 'KWD',
        'KYD', 'KZT', 'LAK', 'LBP', 'LKR', 'LRD', 'LSL', 'LYD', 'MAD', 'MDL',
        'MGA', 'MKD', 'MMK', 'MNT', 'MOP', 'MRU', 'MUR', 'MVR', 'MWK', 'MXN',
        'MXV', 'MYR', 'MZN', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR',
        'PAB', 'PEN', 'PGK', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD',
        'RUB', 'RWF', 'SAR', 'SBD', 'SCR', 'SDG', 'SEK', 'SGD', 'SHP', 'SLL',
        'SOS', 'SRD', 'SSP', 'STN', 'SVC', 'SYP', 'SZL', 'THB', 'TJS', 'TMT',
        'TND', 'TOP', 'TRY', 'TTD', 'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'USN',
        'UYI', 'UYU', 'UYW', 'UZS', 'VED', 'VES', 'VND', 'VUV', 'WST', 'XAF',
        'XAG', 'XAU', 'XBA', 'XBB', 'XBC', 'XBD', 'XCD', 'XDR', 'XOF', 'XPD',
        'XPF', 'XPT', 'XSU', 'XTS', 'XUA', 'XXX', 'YER', 'ZAR', 'ZMW', 'ZWL'
    ];

    /**
     * @var string[]
     */
    const LOCALES = [
        'af', 'af_NA', 'af_ZA', 'ak', 'ak_GH', 'sq', 'sq_AL', 'sq_XK', 'sq_MK',
        'am', 'am_ET', 'ar', 'ar_DZ', 'ar_BH', 'ar_TD', 'ar_KM', 'ar_DJ', 'ar_EG',
        'ar_ER', 'ar_IQ', 'ar_IL', 'ar_JO', 'ar_KW', 'ar_LB', 'ar_LY', 'ar_MR',
        'ar_MA', 'ar_OM', 'ar_PS', 'ar_QA', 'ar_SA', 'ar_SO', 'ar_SS', 'ar_SD',
        'ar_SY', 'ar_TN', 'ar_AE', 'ar_EH', 'ar_YE', 'hy', 'hy_AM', 'as', 'as_IN',
        'az', 'az_AZ', 'az_Cyrl_AZ', 'az_Cyrl', 'az_Latn_AZ', 'az_Latn', 'bm',
        'bm_Latn_ML', 'bm_Latn', 'eu', 'eu_ES', 'be', 'be_BY', 'bn', 'bn_BD',
        'bn_IN', 'bs', 'bs_BA', 'bs_Cyrl_BA', 'bs_Cyrl', 'bs_Latn_BA', 'bs_Latn',
        'br', 'br_FR', 'bg', 'bg_BG', 'my', 'my_MM', 'ca', 'ca_AD', 'ca_FR',
        'ca_IT', 'ca_ES', 'zh', 'zh_CN', 'zh_HK', 'zh_MO', 'zh_Hans_CN',
        'zh_Hans_HK', 'zh_Hans_MO', 'zh_Hans_SG', 'zh_Hans', 'zh_SG', 'zh_TW',
        'zh_Hant_HK', 'zh_Hant_MO', 'zh_Hant_TW', 'zh_Hant', 'kw', 'kw_GB', 'hr',
        'hr_BA', 'hr_HR', 'cs', 'cs_CZ', 'da', 'da_DK', 'da_GL', 'nl', 'nl_AW',
        'nl_BE', 'nl_BQ', 'nl_CW', 'nl_NL', 'nl_SX', 'nl_SR', 'dz', 'dz_BT',
        'en', 'en_AS', 'en_AI', 'en_AG', 'en_AU', 'en_BS', 'en_BB', 'en_BE',
        'en_BZ', 'en_BM', 'en_BW', 'en_IO', 'en_VG', 'en_CM', 'en_CA', 'en_KY',
        'en_CX', 'en_CC', 'en_CK', 'en_DG', 'en_DM', 'en_ER', 'en_FK', 'en_FJ',
        'en_GM', 'en_GH', 'en_GI', 'en_GD', 'en_GU', 'en_GG', 'en_GY', 'en_HK',
        'en_IN', 'en_IE', 'en_IM', 'en_JM', 'en_JE', 'en_KE', 'en_KI', 'en_LS',
        'en_LR', 'en_MO', 'en_MG', 'en_MW', 'en_MY', 'en_MT', 'en_MH', 'en_MU',
        'en_FM', 'en_MS', 'en_NA', 'en_NR', 'en_NZ', 'en_NG', 'en_NU', 'en_NF',
        'en_MP', 'en_PK', 'en_PW', 'en_PG', 'en_PH', 'en_PN', 'en_PR', 'en_RW',
        'en_WS', 'en_SC', 'en_SL', 'en_SG', 'en_SX', 'en_SB', 'en_ZA', 'en_SS',
        'en_SH', 'en_KN', 'en_LC', 'en_VC', 'en_SD', 'en_SZ', 'en_TZ', 'en_TK',
        'en_TO', 'en_TT', 'en_TC', 'en_TV', 'en_UM', 'en_VI', 'en_UG', 'en_GB',
        'en_US', 'en_VU', 'en_ZM', 'en_ZW', 'eo', 'et', 'et_EE', 'ee', 'ee_GH',
        'ee_TG', 'fo', 'fo_FO', 'fi', 'fi_FI', 'fr', 'fr_DZ', 'fr_BE', 'fr_BJ',
        'fr_BF', 'fr_BI', 'fr_CM', 'fr_CA', 'fr_CF', 'fr_TD', 'fr_KM', 'fr_CG',
        'fr_CD', 'fr_CI', 'fr_DJ', 'fr_GQ', 'fr_FR', 'fr_GF', 'fr_PF', 'fr_GA',
        'fr_GP', 'fr_GN', 'fr_HT', 'fr_LU', 'fr_MG', 'fr_ML', 'fr_MQ', 'fr_MR',
        'fr_MU', 'fr_YT', 'fr_MC', 'fr_MA', 'fr_NC', 'fr_NE', 'fr_RE', 'fr_RW',
        'fr_SN', 'fr_SC', 'fr_BL', 'fr_MF', 'fr_PM', 'fr_CH', 'fr_SY', 'fr_TG',
        'fr_TN', 'fr_VU', 'fr_WF', 'ff', 'ff_CM', 'ff_GN', 'ff_MR', 'ff_SN',
        'gl', 'gl_ES', 'lg', 'lg_UG', 'ka', 'ka_GE', 'de', 'de_AT', 'de_BE',
        'de_DE', 'de_LI', 'de_LU', 'de_CH', 'el', 'el_CY', 'el_GR', 'gu',
        'gu_IN', 'ha', 'ha_GH', 'ha_Latn_GH', 'ha_Latn_NE', 'ha_Latn_NG',
        'ha_Latn', 'ha_NE', 'ha_NG', 'he', 'he_IL', 'hi', 'hi_IN', 'hu',
        'hu_HU', 'is', 'is_IS', 'ig', 'ig_NG', 'id', 'id_ID', 'ga', 'ga_IE',
        'it', 'it_IT', 'it_SM', 'it_CH', 'ja', 'ja_JP', 'kl', 'kl_GL', 'kn',
        'kn_IN', 'ks', 'ks_Arab_IN', 'ks_Arab', 'ks_IN', 'kk', 'kk_Cyrl_KZ',
        'kk_Cyrl', 'kk_KZ', 'km', 'km_KH', 'ki', 'ki_KE', 'rw', 'rw_RW', 'ko',
        'ko_KP', 'ko_KR', 'ky', 'ky_Cyrl_KG', 'ky_Cyrl', 'ky_KG', 'lo', 'lo_LA',
        'lv', 'lv_LV', 'ln', 'ln_AO', 'ln_CF', 'ln_CG', 'ln_CD', 'lt', 'lt_LT',
        'lu', 'lu_CD', 'lb', 'lb_LU', 'mk', 'mk_MK', 'mg', 'mg_MG', 'ms',
        'ms_BN', 'ms_Latn_BN', 'ms_Latn_MY', 'ms_Latn_SG', 'ms_Latn', 'ms_MY',
        'ms_SG', 'ml', 'ml_IN', 'mt', 'mt_MT', 'gv', 'gv_IM', 'mr', 'mr_IN',
        'mn', 'mn_Cyrl_MN', 'mn_Cyrl', 'mn_MN', 'ne', 'ne_IN', 'ne_NP', 'nd',
        'nd_ZW', 'se', 'se_FI', 'se_NO', 'se_SE', 'no', 'no_NO', 'nb', 'nb_NO',
        'nb_SJ', 'nn', 'nn_NO', 'or', 'or_IN', 'om', 'om_ET', 'om_KE', 'os',
        'os_GE', 'os_RU', 'ps', 'ps_AF', 'fa', 'fa_AF', 'fa_IR', 'pl', 'pl_PL',
        'pt', 'pt_AO', 'pt_BR', 'pt_CV', 'pt_GW', 'pt_MO', 'pt_MZ', 'pt_PT',
        'pt_ST', 'pt_TL', 'pa', 'pa_Arab_PK', 'pa_Arab', 'pa_Guru_IN', 'pa_Guru',
        'pa_IN', 'pa_PK', 'qu', 'qu_BO', 'qu_EC', 'qu_PE', 'ro', 'ro_MD',
        'ro_RO', 'rm', 'rm_CH', 'rn', 'rn_BI', 'ru', 'ru_BY', 'ru_KZ', 'ru_KG',
        'ru_MD', 'ru_RU', 'ru_UA', 'sg', 'sg_CF', 'gd', 'gd_GB', 'sr', 'sr_BA',
        'sr_Cyrl_BA', 'sr_Cyrl_XK', 'sr_Cyrl_ME', 'sr_Cyrl_RS', 'sr_Cyrl',
        'sr_XK', 'sr_Latn_BA', 'sr_Latn_XK', 'sr_Latn_ME', 'sr_Latn_RS',
        'sr_Latn', 'sr_ME', 'sr_RS', 'sh', 'sh_BA', 'sn', 'sn_ZW', 'ii',
        'ii_CN', 'si', 'si_LK', 'sk', 'sk_SK', 'sl', 'sl_SI', 'so', 'so_DJ',
        'so_ET', 'so_KE', 'so_SO', 'es', 'es_AR', 'es_BO', 'es_IC', 'es_EA',
        'es_CL', 'es_CO', 'es_CR', 'es_CU', 'es_DO', 'es_EC', 'es_SV', 'es_GQ',
        'es_GT', 'es_HN', 'es_MX', 'es_NI', 'es_PA', 'es_PY', 'es_PE', 'es_PH',
        'es_PR', 'es_ES', 'es_US', 'es_UY', 'es_VE', 'sw', 'sw_KE', 'sw_TZ',
        'sw_UG', 'sv', 'sv_AX', 'sv_FI', 'sv_SE', 'tl', 'tl_PH', 'ta', 'ta_IN',
        'ta_MY', 'ta_SG', 'ta_LK', 'te', 'te_IN', 'th', 'th_TH', 'bo', 'bo_CN',
        'bo_IN', 'ti', 'ti_ER', 'ti_ET', 'to', 'to_TO', 'tr', 'tr_CY', 'tr_TR',
        'uk', 'uk_UA', 'ur', 'ur_IN', 'ur_PK', 'ug', 'ug_Arab_CN', 'ug_Arab',
        'ug_CN', 'uz', 'uz_AF', 'uz_Arab_AF', 'uz_Arab', 'uz_Cyrl_UZ', 'uz_Cyrl',
        'uz_Latn_UZ', 'uz_Latn', 'uz_UZ', 'vi', 'vi_VN', 'cy', 'cy_GB', 'fy',
        'fy_NL', 'yi', 'yo', 'yo_BJ', 'yo_NG', 'zu', 'zu_ZA'
    ];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $itemGroupId;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $condition;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $price;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $currency;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $preTaxPrice;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $preTaxCurrency;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $originalPrice;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $originalCurrency;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $salePrice;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $saleCurrency;

    /**
     * Undocumented variable
     *
     * @var \DateTime
     */
    private $saleStart;

    /**
     * Undocumented variable
     *
     * @var \DateTime
     */
    private $saleEnd;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $retailerItemId;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $gtin;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $ean;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $isbn;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $upc;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $mpn;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $availability;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $weight;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $weightUnit;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $brand;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $category;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $size;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $color;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $material;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $gender;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $targetGender;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $ageGroup;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $locale;

    /**
     * Undocumented variable
     *
     * @var string[]
     */
    private $customLabel = [];

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $productLink;

    /**
     * Set product variant ID
     *
     * For dynamic ads - Items that are variants of a product. Provide the same
     * item_group_id for all items that are variants. For example,
     * a red Polo Shirt is a variant of Polo Shirt. Facebook maps this to the
     * retailer_product_group_id once we get your feed. With dynamic ads,
     * Facebook picks only one item out of the group based on the signal we
     * receive from the pixel or app event.
     *
     * For commerce - Provide the same product_group_id for all items that are
     * variants. For example, Red Polo Shirt is a variant of Polo Shirt.
     * Facebook maps this to retailer_product_group_id once we get your feed.
     *
     * Example: FB1234_shirts
     *
     * @param string $itemGroupId
     * @return void
     */
    public function setItemGroupId(string $itemGroupId): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->itemGroupId = $itemGroupId;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $productLink
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setProductLink(string $productLink): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->productLink = $productLink;

        return $this;
    }

    /**
     * Current condition of the item: new, refurbished, used.
     *
     * @param string $condition new, refurbished, used
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setCondition(string $condition): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($condition, ['new', 'refurbished', 'used'])) {
            throw new \InvalidArgumentException('Invalid product condition value');
        }

        $this->condition = $condition;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $price
     * @param string $currency
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setPrice(string $price, string $currency): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($currency, self::CURRENCY_CODES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid price currency', $currency));
        }

        $this->price = $price;
        $this->currency = $currency;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $preTaxPrice
     * @param string $preTaxCurrency
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setPreTaxPrice(string $preTaxPrice, string $preTaxCurrency): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($preTaxCurrency, self::CURRENCY_CODES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid pre-tax price currency', $preTaxCurrency));
        }

        $this->preTaxPrice = $preTaxPrice;
        $this->preTaxCurrency = $preTaxCurrency;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $originalPrice
     * @param string $originalCurrency
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setOriginalPrice(string $originalPrice, string $originalCurrency): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($originalCurrency, self::CURRENCY_CODES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid original price currency', $originalCurrency));
        }

        $this->originalPrice = $originalPrice;
        $this->originalCurrency = $originalCurrency;

        return $this;
    }

    /**
     * Discounted price if the item is on sale.
     *
     * @param string $salePrice Discounted price if the item is on sale. The sale price is required if you plan to use an overlay for discounted prices. Example: 9.99
     * @param string $currency Currency of the discounted price if the item is on sale in 3-digit ISO currency code. Example: USD
     * @param \DateTime|null $saleStart Start date and time for your sale
     * @param \DateTime|null $saleEnd End date and time for your sale
     * @return void
     */
    public function setSalePrice(string $salePrice, string $saleCurrency, \DateTime $saleStart = null, \DateTime $saleEnd = null): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($saleCurrency, self::CURRENCY_CODES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid sale price currency', $saleCurrency));
        }

        $this->salePrice = $salePrice;
        $this->saleCurrency = $saleCurrency;
        $this->saleStart = $saleStart;
        $this->saleEnd = $saleEnd;

        return $this;
    }

    /**
     * Retailer's ID for the item.
     *
     * @param string $retailerItemId
     * @return void
     */
    public function setRetailerItemId(string $retailerItemId): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->retailerItemId = $retailerItemId;

        return $this;
    }

    /**
     * Product's Global Trade Item Number (GTINs). Exclude dashes and spaces.
     *
     * Supported values are:
     *  UPC (North America, 12 digits),
     *  EAN (Europe, 13 digits),
     *  JAN (Japan, 8 or 13 digits),
     *  ISBN (books, 13 digits).
     *
     * Example: 4011200296908
     *
     * @param string $gtin
     * @return void
     */
    public function setGtin(string $gtin): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $ean
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setEan(string $ean): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->ean = $ean;

        return $this;
    }

    /**
     * International Standard Book Number. ISBNs consist of 13 digits.
     *
     * @param string $isbn
     * @return void
     */
    public function setIsbn(string $isbn): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $upc
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setUpc(string $upc): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->upc = $upc;

        return $this;
    }

    /**
     * Unique manufacturer part number for item. For commerce, Daily Deals
     * inventory must also include brand if mpn is provided.
     *
     * Example: 100020003
     *
     * @param string $mpn
     * @return void
     */
    public function setMpn(string $mpn): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->mpn = $mpn;

        return $this;
    }

    /**
     * Current availability of the item:
     *  in stock,
     *  out of stock,
     *  available for order,
     *  discontinued.
     *
     * @param string $availability
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setAvailability(string $availability): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($availability, ['in stock', 'out of stock', 'available for order', 'discontinued'])) {
            throw new \InvalidArgumentException('Invalid availability value');
        }

        $this->availability = $availability;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $weight
     * @param string $weightUnit
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setWeight(string $weight, string $weightUnit): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->weight = $weight;
        $this->weightUnit = $weightUnit;

        return $this;
    }

    /**
     * Brand name of the item.
     *
     * @param string $brand
     * @return void
     */
    public function setBrand(string $brand): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * For dynamic ads, represents predefined values (string or category ID)
     * from Google's product taxonomy.
     *
     * For commerce, represents the category of your product according to the
     * Google's product taxonomy. Learn more about product categories for commerce.
     *
     * @return void
     */
    public function setCategory(string $category): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $size
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setSize(string $size): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $color
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setColor(string $color): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $material
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setMaterial(string $material): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Determines gender for sizing: Female, Male, Unisex.
     *
     * @param string $gender
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setGender(string $gender): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($gender, ['Female', 'Male', 'Unisex'])) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid gender', $gender));
        }

        $this->gender = $gender;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $targetGender
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setTargetGender(string $targetGender): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($targetGender, ['Female', 'Male', 'Unisex'])) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid target gender', $targetGender));
        }

        $this->targetGender = $targetGender;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @param string $ageGroup
     * @return \TwoNobleStudio\OpenGraph\ContextType\Product
     */
    public function setAgeGroup(string $ageGroup): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($ageGroup, ['kids', 'adult'])) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid gender', $ageGroup));
        }

        $this->ageGroup = $ageGroup;

        return $this;
    }

    /**
     * Specifies which website version the product is from; for example, en_GB
     * for the UK website.
     *
     * @param string $locale
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setlocale(string $locale): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if (!in_array($locale, self::LOCALES)) {
            throw new \InvalidArgumentException(sprintf('%s is not a valid locale', $locale));
        }

        $locale = $locale;

        return $this;
    }

    /**
     * Max character limit: 100. Additional information about the item you
     * want to include.
     *
     * @param string $label
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setCustomLabel(string $customLabel): \TwoNobleStudio\OpenGraph\ContextType\Product
    {
        if ($this->labelIndex > 4) {
            throw new \InvalidArgumentException('Max. custom label limit reached');
        }

        $this->customLabel[] = $customLabel;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function getProperties(): array
    {
        $result = [];

        if ($this->itemGroupId) {
            $result[] = ['property' => 'product:item_group_id', 'content' => $this->itemGroupId];
        }

        if ($this->condition) {
            $result[] = ['property' => 'product:condition', 'content' => $this->condition];
        }

        if ($this->price && $this->currency) {
            $result[] = ['property' => 'og:price:amount', 'content' => $this->price];
            $result[] = ['property' => 'og:price:currency', 'content' => $this->currency];

            $result[] = ['property' => 'product:price:amount', 'content' => $this->price];
            $result[] = ['property' => 'product:price:currency', 'content' => $this->currency];
        }

        if ($this->preTaxPrice && $this->preTaxCurrency) {
            $result[] = ['property' => 'product:pretax_price:amount', 'content' => $this->preTaxPrice];
            $result[] = ['property' => 'product:pretax_price:currency', 'content' => $this->preTaxCurrency];
        }

        if ($this->originalPrice && $this->originalCurrency) {
            $result[] = ['property' => 'product:original_price:amount', 'content' => $this->originalPrice];
            $result[] = ['property' => 'product:original_price:currency', 'content' => $this->originalCurrency];
        }

        if ($this->salePrice && $this->saleCurrency) {
            $result[] = ['property' => 'product:sale_price:amount', 'content' => $this->salePrice];
            $result[] = ['property' => 'product:sale_price:currency', 'content' => $this->saleCurrency];

            if ($this->saleStart instanceof \DateTime && $this->saleEnd instanceof \DateTime) {
                $result[] = ['property' => 'product:sale_price_dates:start', 'content' => $this->saleStart->format('Y-m-d\TH:i:s')];
                $result[] = ['property' => 'product:sale_price_dates:end', 'content' => $this->saleEnd->format('Y-m-d\TH:i:s')];
            }
        }

        if ($this->retailerItemId) {
            $result[] = ['property' => 'product:retailer_item_id', 'content' => $this->retailerItemId];
        }

        if ($this->gtin) {
            $result[] = ['property' => 'product:gtin', 'content' => $this->gtin];
        }

        if ($this->ean) {
            $result[] = ['property' => 'product:ean', 'content' => $this->ean];
        }

        if ($this->isbn) {
            $result[] = ['property' => 'product:isbn', 'content' => $this->isbn];
        }

        if ($this->upc) {
            $result[] = ['property' => 'product:upc', 'content' => $this->upc];
        }

        if ($this->mpn) {
            $result[] = ['property' => 'product:mfr_part_no', 'content' => $this->mpn];
        }

        if ($this->availability) {
            $result[] = ['property' => 'og:availability', 'content' => $this->availability];
            $result[] = ['property' => 'product:availability', 'content' => $this->availability];
        }

        if ($this->weight && $this->weightUnit) {
            $result[] = ['property' => 'product:weight:value', 'content' => $this->weight];
            $result[] = ['property' => 'product:weight:units', 'content' => $this->weightUnit];
        }

        if ($this->brand) {
            $result[] = ['property' => 'og:brand', 'content' => $this->brand];
            $result[] = ['property' => 'product:brand', 'content' => $this->brand];
        }

        if ($this->category) {
            $result[] = ['property' => 'product:category', 'content' => $this->category];
        }

        if ($this->size) {
            $result[] = ['property' => 'product:size', 'content' => $this->size];
        }

        if ($this->color) {
            $result[] = ['property' => 'product:color', 'content' => $this->color];
        }

        if ($this->material) {
            $result[] = ['property' => 'product:material', 'content' => $this->material];
        }

        if ($this->gender) {
            $result[] = ['property' => 'product:gender', 'content' => $this->gender];
        }

        if ($this->targetGender) {
            $result[] = ['property' => 'product:target_gender', 'content' => $this->targetGender];
        }

        if ($this->ageGroup) {
            $result[] = ['property' => 'product:age_group', 'content' => $this->ageGroup];
        }

        if ($this->locale) {
            $result[] = ['property' => 'product:locale', 'content' => $this->locale];
        }

        foreach ($this->customLabel as $customLabel) {
            $result[] = ['property' => 'product:custom_label_' . $this->labelIndex, 'content' => $customLabel];
        }

        if ($this->productLink) {
            $result[] = ['property' => 'product:product_link', 'content' => $this->productLink];
        }

        return $result;
    }
}
