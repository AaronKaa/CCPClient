<?php
namespace AKaa\CCPApi\Client\Entities;

/**
 * APIProduct class.
 */
class APIProduct
{
    /**
     * @var string $BarCodeNumber
     */
    protected $BarCodeNumber = null;

    /**
     * @var string $AdditionalBarCodes
     */
    protected $AdditionalBarCodes = null;

    /**
     * @var string $ASIN
     */
    protected $ASIN = null;

    /**
     * @var string $EbayListingID
     */
    protected $EbayListingID = null;

    /**
     * @var string $SearchText
     */
    protected $SearchText = null;

    /**
     * @var string $ExternalProductId
     */
    protected $ExternalProductId = null;

    /**
     * @var string $Thumbs200x200
     */
    protected $Thumbs200x200 = null;

    /**
     * @var string $Thumbs75x75
     */
    protected $Thumbs75x75 = null;

    /**
     * @var string $MatchOptions
     */
    protected $MatchOptions = null;

    /**
     * @var ArrayOfString $imageB64Strings
     */
    protected $imageB64Strings = null;

    /**
     * @var ArrayOfAPIAmazonVariation $AmazonVariations
     */
    protected $AmazonVariations = null;

    /**
     * @var ArrayOfAPIEbayVariation $EbayVariations
     */
    protected $EbayVariations = null;

    /**
     * @var ArrayOfPackageProductWithQuantity $packItems
     */
    protected $packItems = null;

    /**
     * @var ArrayOfAPISalesChannelLink $SalesChannelLinks
     */
    protected $SalesChannelLinks = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var int $BrandID
     */
    protected $BrandID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ManufacturerSKU
     */
    protected $ManufacturerSKU = null;

    /**
     * @var \DateTime $DateAdded
     */
    protected $DateAdded = null;

    /**
     * @var ArrayOfAPIProductSupplierLink $SupplierProductLinks
     */
    protected $SupplierProductLinks = null;

    /**
     * @var float $BasePrice
     */
    protected $BasePrice = 0.00;

    /**
     * @var float $ChannelPrice
     */
    protected $ChannelPrice = 0.00;

    /**
     * @var int $VATRateID
     */
    protected $VATRateID = 0;

    /**
     * @var int $AmazonVariationID
     */
    protected $AmazonVariationID = null;

    /**
     * @var int $EbayVariationID
     */
    protected $EbayVariationID = null;

    /**
     * @var int $ProductRangeID
     */
    protected $ProductRangeID = null;

    /**
     * @var boolean $PreOrder
     */
    protected $PreOrder = false;

    /**
     * @var boolean $EndOfLine
     */
    protected $EndOfLine = false;

    /**
     * @var int $LengthMM
     */
    protected $LengthMM = 0;

    /**
     * @var int $WidthMM
     */
    protected $WidthMM = 0;

    /**
     * @var int $HeightMM
     */
    protected $HeightMM = 0;

    /**
     * @var int $WeightGM
     */
    protected $WeightGM = 0;

    /**
     * @var boolean $LargeLetterCompatible
     */
    protected $LargeLetterCompatible = false;

    /**
     * @var int $ProductType
     */
    protected $ProductType = null;

    /**
     * @var int $ProductVATRate
     */
    protected $ProductVATRate = 0;

    /**
     * @var StatusID $StatusID
     */
    protected $StatusID = "Enabled";

    /**
     * @var boolean $AdditionalShippingLabel
     */
    protected $AdditionalShippingLabel = false;

    /**
     * @var int $StockLevel
     */
    protected $StockLevel = 0;

    /**
     * @var int $ChannelPseudoStockLevel
     */
    protected $ChannelPseudoStockLevel = 0;

    /**
     * @var ArrayOfAPIProductRangeOptionValue $SelectedProductRangeOptionValues
     */
    protected $SelectedProductRangeOptionValues = null;

    /**
     * @var ArrayOfAPIProductImage $images
     */
    protected $images = null;

    /**
     * @var ArrayOfItemBayStockLevel $StockLocations
     */
    protected $StockLocations = null;

    /**
     * @var ArrayOfSupplierOrderItem $OnOrder
     */
    protected $OnOrder = null;

    /**
     * __construct function.
     *
     * @access public
     * @param array $product_details (default: null)
     * @return void
     */
    public function __construct(array $product_details = null)
    {
        if ($product_details) {
            foreach ($product_details as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * @return string
     */
    public function getBarCodeNumber()
    {
        return $this->BarCodeNumber;
    }

    /**
     * @param string $BarCodeNumber
     * @return APIProduct
     */
    public function setBarCodeNumber($barCodeNumber)
    {
        $this->BarCodeNumber = $barCodeNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalBarCodes()
    {
        return $this->AdditionalBarCodes;
    }

    /**
     * @param string $AdditionalBarCodes
     * @return APIProduct
     */
    public function setAdditionalBarCodes($additionalBarCodes)
    {
        $this->AdditionalBarCodes = $additionalBarCodes;
        return $this;
    }

    /**
     * @return string
     */
    public function getASIN()
    {
        return $this->ASIN;
    }

    /**
     * @param string $ASIN
     * @return APIProduct
     */
    public function setASIN($asin)
    {
        $this->ASIN = $asin;
        return $this;
    }

    /**
     * @return string
     */
    public function getEbayListingID()
    {
        return $this->EbayListingID;
    }

    /**
     * @param string $EbayListingID
     * @return APIProduct
     */
    public function setEbayListingID($ebayListingID)
    {
        $this->EbayListingID = $ebayListingID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
        return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return APIProduct
     */
    public function setSearchText($searchText)
    {
        $this->SearchText = $searchText;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalProductId()
    {
        return $this->ExternalProductId;
    }

    /**
     * @param string $ExternalProductId
     * @return APIProduct
     */
    public function setExternalProductId($externalProductId)
    {
        $this->ExternalProductId = $externalProductId;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbs200x200()
    {
        return $this->Thumbs200x200;
    }

    /**
     * @param string $Thumbs200x200
     * @return APIProduct
     */
    public function setThumbs200x200($thumbs200x200)
    {
        $this->Thumbs200x200 = $thumbs200x200;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbs75x75()
    {
        return $this->Thumbs75x75;
    }

    /**
     * @param string $Thumbs75x75
     * @return APIProduct
     */
    public function setThumbs75x75($thumbs75x75)
    {
        $this->Thumbs75x75 = $thumbs75x75;
        return $this;
    }

    /**
     * @return string
     */
    public function getMatchOptions()
    {
        return $this->MatchOptions;
    }

    /**
     * @param string $MatchOptions
     * @return APIProduct
     */
    public function setMatchOptions($matchOptions)
    {
        $this->MatchOptions = $matchOptions;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getImageB64Strings()
    {
        return $this->imageB64Strings;
    }

    /**
     * @param ArrayOfString $imageB64Strings
     * @return APIProduct
     */
    public function setImageB64Strings($imageB64Strings)
    {
        $this->imageB64Strings = $imageB64Strings;
        return $this;
    }

    /**
     * @return ArrayOfAPIAmazonVariation
     */
    public function getAmazonVariations()
    {
        return $this->AmazonVariations;
    }

    /**
     * @param ArrayOfAPIAmazonVariation $AmazonVariations
     * @return APIProduct
     */
    public function setAmazonVariations($amazonVariations)
    {
        $this->AmazonVariations = $amazonVariations;
        return $this;
    }

    /**
     * @return ArrayOfAPIEbayVariation
     */
    public function getEbayVariations()
    {
        return $this->EbayVariations;
    }

    /**
     * @param ArrayOfAPIEbayVariation $EbayVariations
     * @return APIProduct
     */
    public function setEbayVariations($ebayVariations)
    {
        $this->EbayVariations = $ebayVariations;
        return $this;
    }

    /**
     * @return ArrayOfPackageProductWithQuantity
     */
    public function getPackItems()
    {
        return $this->packItems;
    }

    /**
     * @param ArrayOfPackageProductWithQuantity $packItems
     * @return APIProduct
     */
    public function setPackItems($packItems)
    {
        $this->packItems = $packItems;
        return $this;
    }

    /**
     * @return ArrayOfAPISalesChannelLink
     */
    public function getSalesChannelLinks()
    {
        return $this->SalesChannelLinks;
    }

    /**
     * @param ArrayOfAPISalesChannelLink $SalesChannelLinks
     * @return APIProduct
     */
    public function setSalesChannelLinks($salesChannelLinks)
    {
        $this->SalesChannelLinks = $salesChannelLinks;
        return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return APIProduct
     */
    public function setID($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandID()
    {
        return $this->BrandID;
    }

    /**
     * @param int $BrandID
     * @return APIProduct
     */
    public function setBrandID($brandID)
    {
        $this->BrandID = $brandID;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return APIProduct
     */
    public function setName($name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return APIProduct
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerSKU()
    {
        return $this->ManufacturerSKU;
    }

    /**
     * @param string $ManufacturerSKU
     * @return APIProduct
     */
    public function setManufacturerSKU($manufacturerSKU)
    {
        $this->ManufacturerSKU = $manufacturerSKU;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdded()
    {
        if ($this->DateAdded == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateAdded);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateAdded
     * @return APIProduct
     */
    public function setDateAdded(\DateTime $dateAdded)
    {
        $this->DateAdded = $dateAdded->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfAPIProductSupplierLink
     */
    public function getSupplierProductLinks()
    {
        return $this->SupplierProductLinks;
    }

    /**
     * @param ArrayOfAPIProductSupplierLink $SupplierProductLinks
     * @return APIProduct
     */
    public function setSupplierProductLinks($supplierProductLinks)
    {
        $this->SupplierProductLinks = $supplierProductLinks;
        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->BasePrice;
    }

    /**
     * @param float $BasePrice
     * @return APIProduct
     */
    public function setBasePrice($basePrice)
    {
        $this->BasePrice = $basePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getChannelPrice()
    {
        return $this->ChannelPrice;
    }

    /**
     * @param float $ChannelPrice
     * @return APIProduct
     */
    public function setChannelPrice($channelPrice)
    {
        $this->ChannelPrice = $channelPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getVATRateID()
    {
        return $this->VATRateID;
    }

    /**
     * @param int $VATRateID
     * @return APIProduct
     */
    public function setVATRateID($vatRateId)
    {
        $this->VATRateID = $vatRateId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmazonVariationID()
    {
        return $this->AmazonVariationID;
    }

    /**
     * @param int $AmazonVariationID
     * @return APIProduct
     */
    public function setAmazonVariationID($amazonVariationID)
    {
        $this->AmazonVariationID = $amazonVariationID;
        return $this;
    }

    /**
     * @return int
     */
    public function getEbayVariationID()
    {
        return $this->EbayVariationID;
    }

    /**
     * @param int $EbayVariationID
     * @return APIProduct
     */
    public function setEbayVariationID($ebayVariationID)
    {
        $this->EbayVariationID = $ebayVariationID;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductRangeID()
    {
        return $this->ProductRangeID;
    }

    /**
     * @param int $ProductRangeID
     * @return APIProduct
     */
    public function setProductRangeID($productRangeID)
    {
        $this->ProductRangeID = $productRangeID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPreOrder()
    {
        return $this->PreOrder;
    }

    /**
     * @param boolean $PreOrder
     * @return APIProduct
     */
    public function setPreOrder($preOrder)
    {
        $this->PreOrder = $preOrder;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEndOfLine()
    {
        return $this->EndOfLine;
    }

    /**
     * @param boolean $EndOfLine
     * @return APIProduct
     */
    public function setEndOfLine($endOfLine)
    {
        $this->EndOfLine = $endOfLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getLengthMM()
    {
        return $this->LengthMM;
    }

    /**
     * @param int $LengthMM
     * @return APIProduct
     */
    public function setLengthMM($lengthMM)
    {
        $this->LengthMM = $lengthMM;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidthMM()
    {
        return $this->WidthMM;
    }

    /**
     * @param int $WidthMM
     * @return APIProduct
     */
    public function setWidthMM($widthMM)
    {
        $this->WidthMM = $widthMM;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeightMM()
    {
        return $this->HeightMM;
    }

    /**
     * @param int $HeightMM
     * @return APIProduct
     */
    public function setHeightMM($heightMM)
    {
        $this->HeightMM = $heightMM;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeightGM()
    {
        return $this->WeightGM;
    }

    /**
     * @param int $WeightGM
     * @return APIProduct
     */
    public function setWeightGM($weightGM)
    {
        $this->WeightGM = $weightGM;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLargeLetterCompatible()
    {
        return $this->LargeLetterCompatible;
    }

    /**
     * @param boolean $LargeLetterCompatible
     * @return APIProduct
     */
    public function setLargeLetterCompatible($largeLetterCompatible)
    {
        $this->LargeLetterCompatible = $largeLetterCompatible;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @param int $ProductType
     * @return APIProduct
     */
    public function setProductType($productType)
    {
        $this->ProductType = $productType;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductVATRate()
    {
        return $this->ProductVATRate;
    }

    /**
     * @param int $ProductVATRate
     * @return APIProduct
     */
    public function setProductVATRate($productVATRate)
    {
        $this->ProductVATRate = $productVATRate;
        return $this;
    }

    /**
     * @return StatusID
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }

    /**
     * @param StatusID $StatusID
     * @return APIProduct
     */
    public function setStatusID($statusID)
    {
        $this->StatusID = $statusID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalShippingLabel()
    {
        return $this->AdditionalShippingLabel;
    }

    /**
     * @param boolean $AdditionalShippingLabel
     * @return APIProduct
     */
    public function setAdditionalShippingLabel($additionalShippingLabel)
    {
        $this->AdditionalShippingLabel = $additionalShippingLabel;
        return $this;
    }

    /**
     * @return int
     */
    public function getStockLevel()
    {
        return $this->StockLevel;
    }

    /**
     * @param int $StockLevel
     * @return APIProduct
     */
    public function setStockLevel($stockLevel)
    {
        $this->StockLevel = $stockLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getChannelPseudoStockLevel()
    {
        return $this->ChannelPseudoStockLevel;
    }

    /**
     * @param int $ChannelPseudoStockLevel
     * @return APIProduct
     */
    public function setChannelPseudoStockLevel($channelPseudoStockLevel)
    {
        $this->ChannelPseudoStockLevel = $channelPseudoStockLevel;
        return $this;
    }

    /**
     * @return ArrayOfAPIProductRangeOptionValue
     */
    public function getSelectedProductRangeOptionValues()
    {
        return $this->SelectedProductRangeOptionValues;
    }

    /**
     * @param ArrayOfAPIProductRangeOptionValue $SelectedProductRangeOptionValues
     * @return APIProduct
     */
    public function setSelectedProductRangeOptionValues($selectedProductRangeOptionValues)
    {
        $this->SelectedProductRangeOptionValues = $selectedProductRangeOptionValues;
        return $this;
    }

    /**
     * @return ArrayOfAPIProductImage
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param ArrayOfAPIProductImage $images
     * @return APIProduct
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return ArrayOfItemBayStockLevel
     */
    public function getStockLocations()
    {
        return $this->StockLocations;
    }

    /**
     * @param ArrayOfItemBayStockLevel $StockLocations
     * @return APIProduct
     */
    public function setStockLocations($stockLocations)
    {
        $this->StockLocations = $stockLocations;
        return $this;
    }

    /**
     * @return ArrayOfSupplierOrderItem
     */
    public function getOnOrder()
    {
        return $this->OnOrder;
    }

    /**
     * @param ArrayOfSupplierOrderItem $OnOrder
     * @return APIProduct
     */
    public function setOnOrder($onOrder)
    {
        $this->OnOrder = $onOrder;
        return $this;
    }
}
