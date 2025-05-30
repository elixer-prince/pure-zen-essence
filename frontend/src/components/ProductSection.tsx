import { useContext } from "react";
import ProductCard from "./ProductCard";
import { ProductsContext } from "../App";

const ProductSection = () => {
  const products = useContext(ProductsContext);

  return (
    <section
      id="products"
      aria-labelledby="products-header"
      className="scroll-mt-24 gap-4 bg-neutral-100 px-4 py-8 pb-16"
    >
      <header className="flex justify-center">
        <h2
          id="products-header"
          className="border-b-brand-blue my-8 inline-block border-b-8 pb-2 text-4xl font-black md:text-5xl"
        >
          OUR PRODUCTS
        </h2>
      </header>
      <div className="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        {products.map((product) => (
          <ProductCard
            key={product.id}
            title={product.title}
            description={product.description}
            imageUrl={product.imageUrl}
            sizes={product.sizes}
          />
        ))}
      </div>
    </section>
  );
};

export default ProductSection;
