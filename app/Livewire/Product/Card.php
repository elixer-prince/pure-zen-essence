<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Card extends Component
{
    /**
     * This is a product sold by Pure Zen Essence and all
     * its properties.
     */
    public Product $product;
    /**
     * This is the current price displayed by the card and
     * updated by the size tag.
     */
    public int $price;
    /**
     * This keeps track of the currently selected size and is updated
     * when a size tag is clicked.
     */
    public int $currentSizeId = 1;
    /**
     * This manages the selected state for each tag.
     * */
    public bool $selected = false;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->price = $product->sizes[0]["price"];
    }

    #[On("price-updated.{product.id}")]
    public function updatePrice(int $price, int $sizeId)
    {
        $this->selected = true;
        $this->currentSizeId = $sizeId;
        $this->price = $price;

        $product = $this->product;

        $this->dispatch("current-size-changed.{$product->id}", $sizeId);
    }
}
