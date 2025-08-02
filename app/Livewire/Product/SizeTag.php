<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

/**
 * This is a size tag for a product, of which there can be many.
 *
 * This component handles the display and manipulation
 * of size-specific data, including dispatching a
 * "price-updated" event on click.
 */
class SizeTag extends Component
{
    /**
     * This is passed from the product card because it is used
     * to scope each operation to a specific product card.
     * */
    public Product $product;
    /**
     * This is passed from the product card and is a specific
     * size used to get the size properties to display/modify.
     * */
    public array $size;
    /**
     * This is the id belonging to/scoped to a specific
     * product size tag.
     */
    public int $sizeId;
    /**
     * This is a copy passed from the product card and is the id of
     * the currently selected size.
     * */
    public int $currentSizeId;

    public function mount(Product $product, array $size): void
    {
        $this->product = $product;
        $this->sizeId = $size["id"];
    }

    /**
     * Dispatches a "price-updated" event each time the size tag
     * is clicked.
     *
     * @param (int) $price - The price of the currently selected tag.
     * @param (Product) $product - The specific product that each
     * tag belongs to.
     */
    public function setPrice(int $sizeId, int $price, Product $product): void
    {
        if ($this->currentSizeId === $sizeId) {
            return;
        }

        $this->dispatch("price-updated.{$product->id}", $price, $sizeId);
    }

    #[On("current-size-changed.{product.id}")]
    public function changeCurrentSizeId(int $sizeId): void
    {
        $this->currentSizeId = $sizeId;
    }
}
