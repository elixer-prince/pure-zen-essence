<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

/**
 * Represents a size tag component for a product.
 *
 * Handles the display and selection of size-specific data,
 * including emitting price update events on selection.
 */
class ProductSizeTag extends Component
{
    /** The product component passed from the product card. */
    public Product $product;

    /** The size array passed from the product card. */
    public array $size;

    /** The selected state of each individual tag. */
    public bool $selected = false;

    /**
     * Dispatches a "price-updated" event each time the size tag is clicked.
     *
     * @param (int) $price
     * @param (Product) $product
     */
    public function setPrice(
        int $price,
        Product $product,
        int $size,
        bool $selected,
    ): void {
        $this->dispatch(
            "price-updated.{$product["id"]}",
            $price,
            $size,
            $selected,
        );
    }
}
