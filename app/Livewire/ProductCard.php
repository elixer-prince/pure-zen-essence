<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class ProductCard extends Component
{
    public Product $product;
    public int $price;
    public int $selectedSizeId = 0;

    public function mount(Product $product): void
    {
        $this->product = $product;
        $this->price = $product->sizes[0]["price"];
        // $this->selectedSizeId = $product->sizes[0]["id"];
    }

    #[On("price-updated.{product.id}")]
    public function updatePrice(int $price, int $size, bool $selected): void
    {
        $this->price = $price;
        $this->selectedSizeId = $size;
    }
}
